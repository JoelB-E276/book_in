<?php 
      require "model/entity/book.php";
      require "model/entity/user.php";
      require "model/bookManager.php";
      require "model/userManager.php";



            $user = new User();
            $user->setId(2);
            $book = new Book();
            $bookManager = new bookManager();
            $book->setBook_id(4);
            $book->setAvailability("oui");
            $book->setBorrowing_date("2019");
            var_dump($book,$user);
            $bookManager->updateBookStatus($book);



     /*  if(($_POST["book"] && $_POST["user"])):

           


              
           $book = new Book();
            $user = new User();
            $userManager = new userManager();
            $bookManager = new bookManager();
            $book->setBook_id($_POST["book"]);
            $user->setId($_POST["user"]);
            $borrowingBook = $bookManager->getbook($book);
            $borrower = $userManager->getUserById($user);

      endif;

     */
?>




<?php  include "view/template/headNav.php";
       require "view/indexView.php";
       include "view/template/footer.php";?>