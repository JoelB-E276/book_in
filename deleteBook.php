<?php
 require_once "model/bookManager.php";
 require_once "model/userManager.php";
 require_once "model/entity/book.php";

 if(isset($_POST["deleteBook"])):
    $book = new Book();
    $book->setBook_id($_POST["deleteBook"]);
    $bookManager = new bookManager();
    $deleteBook = $bookManager->deleteBook($book);

    if($deleteBook):

        echo "Le livre a bien été supprimé de la base de données";
          // A modifier  
    else:// La requête ne renvoie pas FALSE, le message n'est pas affiché
        echo "Le livre ne peut être supprimé car il est déjà emprunté";

    endif;


endif;







  include "view/template/headNav.php";
  include "view/deleteBookView.php";
  include "view/template/footer.php";
  
  
  ?>
