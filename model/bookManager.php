<?php
 require "dataBase.php";

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

  // Récupère un livre
  public function getBook() 
  {

  }

  // Ajoute un nouveau livre
  public function addBook() 
  {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus()
   {

  }

}
