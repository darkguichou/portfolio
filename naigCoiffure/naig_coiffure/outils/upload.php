


<?php 



if(isset($_FILES['img']))
{
	$dossier = '../images/';
	$fichier = basename($_FILES['img']['name']);
	if(move_uploaded_file($_FILES['img']['tmp_name'], $dossier . $fichier)) 
	{
		echo 'Upload effectué avec succès ! Vous allez être redirigé vers le menu d\'administration dans quelques secondes.';
		header('refresh:2;url=../admin/admin.php?page=menu' );
		$path = "images/".$fichier;
		ajoutImage($co, $path, $fichier);
		
	}
	else 
	{
		echo 'Echec de l\'upload ! Vous allez être redirigé vers le menu d\'administration dans quelques secondes. ';
	}
}


?>