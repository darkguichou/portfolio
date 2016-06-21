<?php 

if (isset($_POST['img'])){
	
	modifEtatImg( $co, $_POST['img'], $_GET['opt']);
	
	echo "Image ajoutée à la galerie avec succès. Vous allez être redirigé vers le menu d'administration dans quelques secondes.";
	header('refresh:2;url=../admin/admin.php?page=menu' );
	
}else{
	
	echo "Aucune image de séléctionnée.";
}



?>