<?php 

if ( isset($_POST['nom'])){

foreach ($_POST['nom'] as $nom){
	
	modifEtatImg( $co, $nom, 0);
	
	
	
}

echo "Image(s) supprimée(s) de la galerie avec succès. Vous allez être redirigé vers le menu d'administration dans quelques secondes.";
header('refresh:2;url=../admin/admin.php?page=menu' );
}

else{
	
	echo "Aucune image selectionnée.";
}


?>