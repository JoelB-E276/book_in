<?php
 require_once "dataBase.php";
 require_once "userManager.php";

class BookManager extends userManager
{
  
    public PDO $db;

    public function __construct() 
    {   
        $connexion = new Connexion();
        $this->db = $connexion->connexion();
        
    }


  // Récupère tous les livres
  public function getBooks()
   {
    $response = $this->db->query("SELECT * FROM book");                         
   
    $result = $response->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as $key => $data)
      {
        $result[$key] = new book($data);
      } 
   return $result;  

  }

  public function getBook(Book $book_id) 
  {
     $query = $this->db->prepare
     ("SELECT * 
       FROM book 
       WHERE book_id = :book_id
    ");   

     $query->execute([
      "book_id" => $book_id->getBook_id()
     ]);                      
      $result = $query->fetchall(PDO::FETCH_ASSOC);
      foreach($result as $key => $data)
      {
        $result[$key] = new Book($data);
      }
     return $result;  
  }
  /*
  SELECT book.book_id, book.title, book.author, book.resume, book.genre, book.edition, book.number_pages, book.availability, user.id,user.lastname, user.firstname, user.email FROM book INNER JOIN user ON book.book_id = :book_id
  SELECT * FROM book WHERE user_id IS NOT NULL
  SELECT book.book_id, book.title, book.author, book.resume, book.genre, book.edition, book.number_pages, book.availability, user.id,user.lastname, user.firstname, user.email FROM book INNER JOIN user WHERE user_id IS NOT NULL 
  SELECT book.book_id, book.title, book.author, book.resume, book.genre, book.edition, book.number_pages, book.availability FROM book WHERE book.user_id IS NOT NULL
   SELECT book.book_id, book.title, book.author, book.resume, book.genre, book.edition, book.number_pages, book.availability, user.id,user.lastname, user.firstname, user.email FROM book INNER JOIN user ON book.book_id = user.book_id
  */


  // Récupère les clients qui ont emprunté un livre SOIT 2 OBJETS
  public function getUserBook() 
  {
     $response = $this->db->query
     ("SELECT book.book_id, book.title, book.author, book.resume, book.genre, book.edition, book.number_pages, book.availability, user.id,user.lastname, user.firstname, user.email
      FROM book 
      INNER JOIN user 
      ON book.book_id = user.book_id
    ");   

      $result = $response->fetchall(PDO::FETCH_ASSOC);
      foreach($result as $key => $data)
      {
        $result[$key] = new Book($data);
        $results[$key] = new User($data);
      }
      
     return array($result, $results);  
  }
  

  // Ajoute un livre en bdd
  public function addBook(Book $book) 
  {
    try
    {
      $query = $this->db->prepare 
    (
      "INSERT INTO book
      (title, author, resume, release_date, genre, edition, number_pages, availability)
      VALUES
      (:title, :author, :resume, :release_date, :genre, :edition, :number_pages, 'oui')"
    );
    $result = $query->execute([
      "title" => $book->getTitle(),
      "author" => $book->getAuthor(),
      "resume" => $book->getResume(), 
      "release_date" => $book->getRelease_date(), 
      "genre" => $book->getGenre(), 
      "edition" => $book->getEdition(), 
      "number_pages" => $book->getNumber_pages() 
    ]);

      return TRUE;
    }
     catch (PDOException $e)
     {
       echo $e->getMessage();
       return FALSE;
     }
    

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus(Book $book)
  {     
    $query = $this->db->prepare 
    (
      "UPDATE book 
      SET availability = 'non',  
      borrowing_date = now(),
      user_id = :user_id
      WHERE book_id = :book_id"
    );

    $status = $query->execute([
        "book_id" => $book->getBook_id(),
        "user_id" => $book->getUser_id()        
    ]);
    return TRUE;
  
  }
 // Ajoute un livre à un client et un client a un livre
  public function borrowingBook(Book $book, User $user)
  { 
    try
    {
      $this->db->beginTransaction();
      $this->getBook($book);
      $bookin = new Book($book);
      $this->updateBookStatus($bookin);
      parent::getUserById($user);
      $borrower = new User($user);
      parent::addBook_id($borrower);
      parent::borrower($borrower);
      $this->db->commit();
      return TRUE;
    }
     catch (PDOException $e)
     {
       $this->db->rollBack();
       echo $e->getMessage();
       return FALSE;
     }
    
  }
   // Passe le statut d'un livre en DISPO
  public function renderingBook(Book $book)
  {     
    $query = $this->db->prepare 
    (
    "UPDATE book 
    SET availability = 'oui',  
    rendering_date = now(),
    user_id = :user_id
    WHERE book_id = :book_id");

    $status = $query->execute([
        "book_id" => $book->getBook_id(),
        "user_id" => $book->getUser_id()        
    ]);
    return TRUE;
  
  }

  // Supprime un livre de la bdd
  public function deleteBook(Book $book)
  {     
      $query = $this->db->prepare 
      (
      "DELETE FROM book 
      WHERE (book_id = :book_id AND user_id IS NULL)
      ");
  
      $status = $query->execute([
          "book_id" => $book->getBook_id(),
      ]);
      var_dump($status);
      return TRUE; 
  }

}
