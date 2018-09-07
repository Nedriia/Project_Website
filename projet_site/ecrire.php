<?php
session_start();
require 'modele.php';
require 'gabarit.php';

if (!empty($_POST["article"]) and !empty($_POST["source"])and !empty($_POST["titre"])){
	$article=$_POST["article"];
	$source=$_POST["source"];
	$titre=$_POST["titre"];	

	$categorie=$_POST["categorie"];
	if ($categorie == "theme 1") {
		$categorie = 1;
	}
	if ($categorie == "theme 2") {
		$categorie = 2;
	}
	if ($categorie == "theme 3") {
		$categorie = 3;
	}
	if ($categorie == "theme 4") {
		$categorie = 4;
	}
	if ($categorie == "theme 5") {
		$categorie = 5;
	}
	
	$image=$_POST["image"];
	EcrireArticle($article,$titre,$source,$image,$_SESSION["s_id"],$categorie);
	echo 'L article a bien été enregistré';
	$id_article = getIdArticle($titre);
	$id_source = getIdSource($source);
	NouvelleBiblio($id_article,$id_source);
	}
	
	else{
	die ('Vous n\'avez rien tape et/ou n\'avez pas remplis tous les champs');	
	}
	
	echo '<br><br><a href="index.php">Retour a l\'index</a>';
	

?>

