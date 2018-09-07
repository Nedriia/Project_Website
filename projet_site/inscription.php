<?php
require 'modele.php';
require 'gabarit.php';
session_start();
if (!empty($_POST["pseudo"]) and !empty($_POST["pass"]) and ($_POST["pass"]==$_POST["pass2"])) {
	$pseudo = $_POST["pseudo"];
	$pass = $_POST["pass"];
	$inscript=Inscription($pseudo,$pass);
	echo'Inscription réussie<br>';
	echo 'Bienvenue : "'.$pseudo.'"<Br>';
	echo'<a href="index.php"> | Acceuil | </a>';
	$_SESSION["s_pseudo"]=$_POST["pseudo"];
	$_SESSION["s_pass"]=$_POST["pass"];
}else{
	echo'Erreur<br/><br/>';
	echo'<a href="vue_inscription.php"> Retour </a>';
}
?>


