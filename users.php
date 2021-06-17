<?php
require "model/entity/user.php";
require "model/userManager.php";

$user = new userManager();
$getUsers = $user->getUsers();

include "view/usersView.php";
?>










