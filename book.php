<?php
require_once "model/entity/book.php";
require_once "model/bookManager.php"; 
require_once "model/entity/user.php";
require_once "model/userManager.php"; 

$userMananger = New userManager();
$bookManger = new BookManager();
$getUserByBook = $userMananger->getUserByBook();
$getBooks = $bookManger->getBooks();
 




















include "view/template/headNav.php";
require "view/bookView.php";







?>

















<?php include "view/template/footer.php";?>