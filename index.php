<?php 
      require "model/dataBase.php";
      
      
      $connect = new Connexion();
      $connect->connexion();

      include "view/template/headNav.php";
      require "view/indexView.php";

?>















<?php include "view/template/footer.php";?>