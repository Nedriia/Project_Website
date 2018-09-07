<!doctype html>
<?php
session_start();
?>

<html>
<head>
    <meta charset="utf-8" />
    <title>Accueil</title>
    <link rel="stylesheet" href="VectorLover.css"/> 
</head>
<body>
	<header>
		<img src="Bandeau/iStock_000022099457Medium_300.jpg" width="99%" height="20%"/>
	</header>
	
	<h1>Bienvenue sur notre site d'informations!</h1>
	
	<?php
	if (isset($_SESSION['s_pseudo']) AND $_SESSION['s_pseudo'] != "") {
		echo 'Bonjour '.$_SESSION['s_pseudo'].'!<br/><br/>';
		echo '<a href="vue_ecrire.php"> | Nouvel Article | </a>';
		echo '<a href="deconnexion.php"> | Deconnexion | </a>' ;
		echo '<a href="profil.php"> | Profil | </a>';
	}
	else{
		echo '<a href="vue_connexion.php"> | Connexion | </a>';
		echo '<a href="vue_inscription.php"> | Inscription | </a>';
	}
	?>
	
	<table width="99%" border="1">
 
		<thead>
			<tr class="titre_horizon_classique">
            <th colspan="11"><h3>Articles</h3></th>
			</tr>
        <tr class="titre_horizon_classique">
            <th width="15%">Titre</th>
            <th>Resume</th>
            <th width="17%">Lien</th>
        </tr>
        </thead>
		
    <?php foreach ($articles as $article): ?>
		<tr>
			<td><?php echo '<a href="lire.php?Titre='.$article['titre_article'].' "> '.$article['titre_article'].'</a>'?></td>
			<td><?php echo $article['resume_article'] ?></td>
			<td><?php echo '<a href=" '.$article['lien_article'].'">"'.$article['lien_article'].'"</a>'; ?></td>
			
		</tr>
		<?php endforeach ?>
    </table>
	<p>
	
	
	<br/><br/>
	© All your copyright info here       Design by 
	<a href="http://www.styleshout.com/"> styleshout </a>
	
	</p>
	<br/><br/>
</body>
</html>