<?php require("config.php"); ?>
<?php
// Set a variable for the POST
$pseudo = strip_tags($_POST["pseudo"]);
$message = strip_tags($_POST["message"]);
// Protect send on bdd
if ($pseudo !== "" && $message !== "") {
  $bdd->exec("INSERT INTO chat (pseudo, message) VALUES ('$pseudo', '$message')");
  header('location:index.php');
} else {
  header('location:index.php');
}

?>
