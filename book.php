<?php
// Controleur qui gère l'affichage du détail d'un livre
require "model/entity/book.php";
require "model/bookManager.php"; 


$bookManger = new BookManager();
$getBooks = $bookManger->getBooks();
/* var_dump($getBooks);
 */




















include "view/template/headNav.php";
require "view/bookView.php";







?>

















<?php include "view/template/footer.php";?>