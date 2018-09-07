
<html>
<head>
    <meta charset="utf-8" />
    <title>Lecture</title>
    <link rel="stylesheet" href="VectorLover.css"/> 
</head>
<body>
 <?php foreach ($Texte as $textes): ?>
	<?php echo '<img src="Image/'.$textes['image_article'].'" ><br/><br/><br/>';?>
	<?php echo $textes['resume_article']?><br/><br/>
<?php endforeach ?>

<form name="monform" id="monform" method="post">
    <label>Noter cet article</label>
    <select name="note" onchange="javascript:submit(this)">
    <option value="">Note</option>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
	</select>
    </form>

	<p>
	© All your copyright info here       Design by 
	<a href="http://www.styleshout.com/"> styleshout </a>
	<a href="index.php"> | Acceuil | </a>
	</p>
	<br/><br/>
</body>
</html>