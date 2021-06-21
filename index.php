<?php 
      require_once "model/entity/book.php";
      require_once "model/entity/user.php";
      require_once "model/bookManager.php";
      require_once "model/userManager.php";

      if(@$_POST["book"] && $_POST["user"])
      {

            $user = new User();
            $book = new Book();
            $bookManager = new bookManager();
            $userManager = new userManager();
            $book->setBook_id($_POST["book"]);
            $book->setUser_id($_POST["user"]);
            $user->setId($_POST["user"]);
            $user->setBook_id($_POST["book"]);
            $getBook = $bookManager->getbook($book);
            $getUser = $userManager->getUserById($user);
            $bookManager->borrowingBook($book, $user);
      }

?>




<?php  include "view/template/headNav.php";
       require "view/indexView.php";
       include "view/template/footer.php";?>