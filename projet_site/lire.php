
<?php
require 'modele.php';
session_start();
if (isset($_GET['Titre'])){
	$Titre=$_GET['Titre'];
}

echo "<h1></br></br><u>$Titre</u></h1></br></br></br>";
$Texte = Lire();
if (!empty($_POST['note'])){
	$id_auteur = $_SESSION["s_id"];
	$id_article = getIdArticle($Titre);
	$note =$_POST["note"];
	note($note,$id_auteur,$id_article);
}
require 'vue_lire.php';

echo '<br><br><a href="index.php">Retour a l\'index</a>';

