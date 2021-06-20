<?php
 require_once "dataBase.php";
 require_once "bookManager.php";
 require_once "entity/user.php";
 
class userManager extends User
{
  public PDO $db;

    public function __construct() 
    {   
        $connexion = new Connexion();
        $this->db = $connexion->connexion();
    }


  public function getUsers()
   {
    $response = $this->db->query("SELECT * FROM user");                         
   
    $result = $response->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as $key => $data)
      {
        $result[$key] = new User($data);
      } 
      
     return $result;
    }

  // Récupère un utilisateur par son id
  public function getUserById(User $id) {
   $query = $this->db->prepare("SELECT lastname, firstname, id FROM user WHERE id = :id") ;
   $query->execute([
     "id" => $id->getId()
   ]);
   $result = $query->fetchall(PDO::FETCH_ASSOC);
      foreach($result as $key => $data)
      {
        $result[$key] = new User($data);
      }
     return $result;  
  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
   // Ajout l'id d'un livre 
  public function addBook_id(User $user)
  {
   $user = new User($user);
   $addbook = parent::setBook_id($user->getBook_id());

   return $addbook;
  }

  public function borrower(User $user)
  {
    $query = $this->db->prepare 
    (
      "UPDATE user 
      SET book_id = :book_id  
      WHERE id = :id"
    );
  
      $status = $query->execute([
          "book_id" => $user->getBook_id(),
          "id" => $user->getId()        
      ]);
      return TRUE;
    
  }
  // Récupère les clients qui ont emprunté un livre
  public function getUserByBook()
  {
    $response = $this->db->query
    ("SELECT user.id, user.lastname, user.firstname, user.email, user.book_id ,user.city
    FROM user 
    WHERE book_id >= 1
   ");   

     $result = $response->fetchall(PDO::FETCH_ASSOC);
     foreach($result as $key => $data)
     {
       $results[$key] = new User($data);
     }
     
    return $results;  
  }
}
