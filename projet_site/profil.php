<?php
	session_start();
	require 'modele.php';
	require 'gabarit.php';
?>
<html>
<head><title>Site d'informations !</title></head>
<body bgcolor="EEEEEE" text="191970">
<h1 align="center">Profil</h1>
<U>Informations generales :</U><br/><br/><br/>
<?php
	if (isset($_SESSION['s_pseudo']) AND $_SESSION['s_pseudo'] != "") {
		RecupererInfos($_SESSION['s_pseudo'],$_SESSION['s_pass']);
	}
	else {
		echo 'Vous devez vous connecter pour acceder a cette page';
		$connect = 0;
	}
?>
<a href='index.php'>Retour a la page d'accueil</a></p>
<br/>
<br/><br/>
</body>
</html>