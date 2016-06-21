<?php

//fonction de connexion à la base de donnée
function coBdd(){
	try {
	$connexion = new PDO('mysql:host=localhost;dbname=lafleur' ,'root','');

}catch (Exception $e) {
	
	echo "Impossible de se connecter à la base de donnée, Erreur:". $e->getMessage() . "</br>";
	
}
	
return $connexion;
}


//requete de connexion à la base de données.

$adresse_de_serveur_sql = "localhost";
$nom_utilisateur_sql = "root";
$mot_de_passe_sql = "";

//requete affichage produit par catégorie

function select_bulbes($connexion) //pour les bulbes 
{

	$sql = " SELECT pdt_ref, pdt_designation, pdt_prix, pdt_image FROM produit WHERE cat_code = 'blb'";
	
	
	$resultat = $connexion->query($sql);
	
	return $resultat;
}

function select_rosiers($connexion) // pour les rosiers
{

	$sql = " SELECT pdt_ref, pdt_designation, pdt_prix, pdt_image FROM produit WHERE cat_code = 'ros'";


	$resultat = $connexion->query($sql);

	return $resultat;
}

function select_plante_a_massif($connexion) //pour les palntes à massif
{

	$sql = " SELECT pdt_ref, pdt_designation, pdt_prix, pdt_image FROM produit WHERE cat_code = 'pam'";


	$resultat = $connexion->query($sql);

	return $resultat;
}

?>