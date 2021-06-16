<?php
// Controleur qui gère l'affichage de tous les utilisateurs
include "view/template/headNav.php";
include "view/usersView.php";
require "model/entity/user.php";
require "model/userManager.php";


$user = new userManager();
$getUsers = $user->getUsers();
var_dump($getUsers);
?>









<?php include "view/template/footer.php";?>
