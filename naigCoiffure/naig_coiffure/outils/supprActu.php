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



$titre = $_GET["opt"];




supprActu($co, $titre);

echo " <p> L'actualité a été supprimée avec succès. Vous allez être redirigé vers le menu d'administration dans quelques secondes. </p>";
header('refresh:2;url=../admin/admin.php?page=menu' );

?>

</body>
</html>