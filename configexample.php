<?php
 try
 {
   // on host = put you'r host, for local it's localhost //// for dbname= put you'r name of bdd at root put you'r login, on '' put you'r password
 	$bdd = new PDO('mysql:host=;dbname=;charset=utf8', 'root', '');
 }
 catch(Exception $e)
 {
         die('Erreur : '.$e->getMessage());
 }
?>
