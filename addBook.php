<?php
require_once "model/entity/book.php";
require_once "model/bookManager.php";


if(!empty(@$_POST["title"] && @$_POST["author"] && @$_POST["edition"] && @$_POST["number_pages"] && @$_POST["genre"] && @$_POST["release_date"] && @$_POST["resume"]))
   {
      $bookManager = new bookManager();
      $book = new Book($_POST);
      $addbook = $bookManager->addbook($book);
      
      if($addbook)
      {
          echo "Votre livre a bien été ajouté à la base de données";
      } else 
        {
            echo "Une erreur s'est produite lors de l'ajout. Vérifiez d'avoir rempli tous les champs";
        };
   } else 
    {
      echo "TOUS les champs DOIVENT être remplis avec les données correspondantes."   ;
    };
        
















include "view/template/headNav.php";
require "view/addBookView.php";
include "view/template/footer.php";?>