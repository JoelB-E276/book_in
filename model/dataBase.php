<?php

class Connexion
{
    const DB_NAME = 'bookin_php';
    const USER_NAME = 'bookin';
    const USER_PASSWORD = 'book';

    public function connexion()
   {
    try 
    {
      $db = new PDO('mysql:host=localhost;dbname='. self::DB_NAME .';charset=utf8', self::USER_NAME , self::USER_PASSWORD);
      return $db;
    }
      catch(Exception $error)
       {
         echo " Non connecté à la DBB <br>";
         echo $error->getMessage();
         exit;
       }
   }
}