<?php 

$id = str_replace(' ', '', $_POST['nom']);

if (isset($_POST['nom']) && isset($_POST['prix'])){
	
	creerTarif($co, $_POST['nom'], $id, $_POST['prix']);
	echo "Tarif bien créé. Vous allez être redirigé vers le menu d'administration dans quelques secondes.";
	header('refresh:2;url=../admin/admin.php?page=menu' );
	
	
}else {
	
	echo "Echec de la création de tarif.";
}


?>