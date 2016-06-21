<!DOCTYPE html>
<html>
<head>
<meta content="text/html"; charset="utf-8" />
<link rel="stylesheet" href="../styles/style.css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Indie+Flower">
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
	<script language="javascript" type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
<script language="javascript" type="text/javascript">
tinymce.init({
    selector: "textarea.tinymce",
    plugins: "colorpicker"
 });



</script>

	

<title>Naïg Coiffure</title>
</head>

<body>


<?php 

include ("../outils/sql.php");

$co = connexionSql();
$co->exec("SET CHARACTER SET utf8");

$titre = $_GET["opt"];
$contenu = $_POST["contenu"];



modifActu($co, $titre, $contenu);

echo "<div class = 'box'> <p> L'actualité a été modifiée avec succès. Vous allez être redirigé vers le menu d'administration dans quelques secondes. </p> </div>";
header('refresh:2;url=../admin/admin.php?page=modifActus' );

?>

</body>
</html>