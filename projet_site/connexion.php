<?php 
session_start();
require 'modele.php';
require 'gabarit.php'; 

try {
if (!empty($_POST["pseudo"]) and !empty($_POST["pass"])) {
	$pseudo = $_POST["pseudo"];
	$pass = $_POST["pass"];
	Connexion ($pseudo, $pass);
	echo '<br><br><a href="index.php">Retour a l\'index</a>';
}else
	throw new Exception("Vous n'avez pas rempli tous les champs");
}

catch (Exception $e) {
  echo "Vous n'avez pas rempli tous les champs";
}
?>



