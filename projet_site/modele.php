<?php

function getBdd(){
	$bdd = new PDO('mysql:host=localhost;dbname=site;charset=utf8',"root","", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	return $bdd;
}

function getArticles() {
	$bdd = getBdd();
    $articles = $bdd->query("SELECT titre_article, resume_article, lien_article FROM article ORDER BY id_article DESC  ");
	return $articles;
}

function getIdArticle($titre_article) {
	$bdd = getBdd();
	$connect = $bdd-> query("SELECT id_article FROM article WHERE titre_article='".$titre_article."';");
	$id_article = $connect -> fetch();
	return $id_article["id_article"];
}

function getIdSource($titre_source) {
	$bdd = getBdd();
	$connect = $bdd-> query("SELECT id_source FROM source WHERE titre_source='".$titre_source."';");
	$id_source = $connect -> fetch();
	return $id_source["id_source"];
}

function Connexion($pseudo,$pass){
	$bdd = getBdd();
	$connect = $bdd ->query ("SELECT pseudo_auteur, id_auteur,avatar_auteur,date_inscription FROM auteur WHERE pseudo_auteur='".$pseudo."' AND mdp_auteur='".$pass."';");
	$donnees_exist = $connect ->fetch();
	if($donnees_exist == FALSE){
		echo 'Identifiant ou mot de passe erronne';
		
	}else{
		$_SESSION["s_pseudo"]=$_POST["pseudo"];
		$_SESSION["s_pass"]=$_POST["pass"];
		$_SESSION["s_id"]=$donnees_exist["id_auteur"];
		echo "Vous êtes bien connecté!";
	}
}


function Suppression($pseudo,$pass){
	$bdd = getBdd();
	$recherche = $bdd ->query ("SELECT pseudo_auteur, mdp_auteur FROM auteur WHERE pseudo_auteur='".$pseudo."' AND mdp_auteur='".$pass."';");
	$donnees_exist = $recherche ->fetch();
	
	if($donnees_exist == FALSE){
		die ("Identifiant inexistant ou mot de passe erroné");
	}else{
		$suppr= $bdd ->query('DELETE FROM auteur WHERE pseudo_auteur="'.$pseudo.'";');
	}
}

function Lire(){
	$bdd = getBdd();
	$Texte = $bdd ->query ("SELECT titre_article, resume_article,image_article FROM article WHERE titre_article='".$_GET['Titre']."' ;");
	return $Texte;
}

function RecupererInfos($pseudo,$pass){
	$bdd = getBdd();
	$connect = $bdd -> query("SELECT pseudo_auteur, avatar_auteur, date_inscription FROM auteur WHERE pseudo_auteur='".$pseudo."' AND mdp_auteur='".$pass."';");
	$donnees = $connect -> fetch();
	echo 'Pseudo: '.$donnees['pseudo_auteur'].'<br/><br/>';
	echo 'Date: '.$donnees['date_inscription'].'<br/><br/>';
	echo 'Avatar: <img src ="Avatar/'.$donnees['avatar_auteur'].'"/><br/><br/>';
}


function Inscription($pseudo,$pass){
	$bdd = getBdd();
	$bdd2 = getBdd();
	$inscript= $bdd ->prepare('INSERT INTO auteur(pseudo_auteur,mdp_auteur,date_inscription) VALUES(?,?,?)');
	$date = date("Y/m/d");
	try {
	$inscript -> execute(array($pseudo,$pass,$date));
	}
	catch(PDOException $e){
		echo "erreur requete :".$e->getMessage();
		die();
	}
	$connect = $bdd2 -> query("SELECT id_auteur FROM auteur WHERE pseudo_auteur='".$pseudo."';");
	$donnees = $connect -> fetch();
	$_SESSION["s_id"]=$donnees["id_auteur"];
	
}

function EcrireArticle($resumeArticle,$titreArticle,$lienArticle,$image,$id_auteur,$id_categorie){
	$bdd = getBdd();
	$bdd2 = getBdd();
	$nouvelArticle = $bdd -> prepare("INSERT INTO article(resume_article,titre_article,lien_article,image_article,id_auteur,id_categorie) VALUES(?,?,?,?,?,?)");
	$nouvelleSource = $bdd2 -> prepare("INSERT INTO source(titre_source) VALUES (?)");
	try{
		$nouvelArticle -> execute(array($resumeArticle,$titreArticle,$lienArticle,$image,$id_auteur,$id_categorie));
		$nouvelleSource -> execute(array($lienArticle));
	}
	catch(PDOException $e){
		echo "erreur requete :".$e->getMessage();
		die();
	}
}

function NouvelleBiblio($id_article,$id_source){
	$bdd = getBdd();
	$nouvelleBiblio = $bdd -> prepare("INSERT INTO bibliographie(id_article,id_source) VALUES (?,?)");
	try{
		$nouvelleBiblio -> execute(array($id_article,$id_source));
	}
	catch(PDOException $e){
		echo "erreur requete :".$e->getMessage();
		die();
	}
}

function note($note,$id_auteur,$id_article){
	$bdd = getBdd();
	//$eval=$bdd -> query ("INSERT INTO evaluation(note,id_auteur,id_article) VALUES ('".$note."','".$_SESSION['ID']."','".$_SESSION['IDarticle']."');';
	$eval = $bdd -> prepare ('INSERT INTO evaluation(note,id_auteur,id_article) VALUES (?,?,?)');
	try {
		$eval -> execute(array($note,$id_auteur,$id_article));
	}
	catch(PDOException $e){
		
		echo "erreur requete :".$e->getMessage();
		die();
		}
	}


?>