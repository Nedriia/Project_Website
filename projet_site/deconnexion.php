<?php
session_start();
require 'gabarit.php';
?>
<html>
<head><title>Deconnexion</title></head>
<body>Deconnexion :
<?php
$_SESSION=array();
session_destroy();
?>
<br/><br/><br/>
Vous avez ete deconnecte avec succes
<br/>
<a href='index.php'>Retour a la page d'accueil</a></p>
</body>
</html>

