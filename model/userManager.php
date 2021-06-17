<?php
 require_once "dataBase.php";

class userManager 
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
}
