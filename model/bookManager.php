<?php
 require_once "dataBase.php";

class BookManager 
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
     $query = $this->db->prepare(
       "SELECT * 
       FROM book 
       WHERE book_id = :book_id");   

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

  

  // Ajoute un nouveau livre
  public function addBook() 
  {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus(Book $book)
  {     
    $query = $this->db->prepare (
    "UPDATE book 
    SET availability = 'oui',  
    borrowing_date = now() 
    WHERE book_id = :book_id");

    $status = $query->execute([
        "book_id" => $book->getBook_id(),
        
    ]);
    return TRUE;
  
  }

  public function borrowingBook()
  { 
    try
    {
      $this->db->getBook();
      $this->updateBookStatus();


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
}
