<?php
//Affiche tous les articles

try{
require 'modele.php';
$articles = getArticles();
require 'vue_acceuil.php';
}
catch (Exception $e){
	echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
?>