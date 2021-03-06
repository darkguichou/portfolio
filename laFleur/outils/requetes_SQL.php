<?php

//fonction de connexion à la base de donnée
function coBdd(){
	try {
	$connexion = new PDO('mysql:host=localhost;dbname=lafleur' ,'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

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

	$sql = " SELECT pdt_ref, pdt_designation, pdt_prix, pdt_image FROM PRODUIT WHERE cat_code = 'blb'";
	
	
	$resultat = $connexion->query($sql);
	
	return $resultat;
}

function select_rosiers($connexion) // pour les rosiers
{

	$sql = " SELECT pdt_ref, pdt_designation, pdt_prix, pdt_image FROM PRODUIT WHERE cat_code = 'ros'";


	$resultat = $connexion->query($sql);

	return $resultat;
}

function select_plante_a_massif($connexion) //pour les palntes à massif
{

	$sql = " SELECT pdt_ref, pdt_designation, pdt_prix, pdt_image FROM PRODUIT WHERE cat_code = 'pam'";


	$resultat = $connexion->query($sql);

	return $resultat;
}

function select_infos_produit($connexion, $ref){
	
	
	$sql = "SELECT p.pdt_designation, p.pdt_prix FROM (SELECT pdt_designation, pdt_prix, pdt_ref FROM PRODUIT GROUP BY pdt_ref) AS p WHERE pdt_ref ='".$ref."'";
	
	$resultat = $connexion->query($sql);

	return $resultat;
}


function select_client($connexion, $cli){
	
	$sql = "SELECT clt_code, clt_motPasse FROM clientconnu WHERE clt_code ='".$cli."'";
	
	$resultat = $connexion->query($sql);
	
	return $resultat;
	
	
}


function ajout_commande($connexion, $moment, $cli, $date){
	
	$sql = "INSERT INTO commande VALUES ('".$moment."', '".$cli."', '".$date."')";
	
	$resultat = $connexion->query($sql);
	
}

function ajout_l_contenir($connexion, $moment, $cli, $prod, $qte){
	
	$sql = "INSERT INTO contenir VALUES('".$moment."', '".$cli."', '".$prod."', '".$qte."')";
	
	$resultat = $connexion->query($sql);
	
	
	
}

function r_doublon_t($tab){
	
	
	
	
	
}

//fonction de selection des produits catégorie bulbes pour le panier
function select_produits_blb($connexion)
{
	$sql = "";
	$sql .= " SELECT pdt_ref, pdt_designation";
	$sql .= " FROM PRODUIT";
	$sql .= " WHERE cat_code = 'blb'";
	$sql .= ";";
	
	$resultat = $connexion->query($sql);
	return $resultat;
}

//fonction de selection des produits catégorie rosiers pour le panier
function select_produits_ros($connexion)
{
	$sql = "";
	$sql .= " SELECT pdt_ref, pdt_designation";
	$sql .= " FROM PRODUIT";
	$sql .= " WHERE cat_code = 'ros'";
	$sql .= ";";
	
	$resultat = $connexion->query($sql);
	return $resultat;
}

//fonction de selection des produits catégorie plantes à massif pour le panier
function select_produits_pam($connexion)
{
	$sql = "";
	$sql .= " SELECT pdt_ref, pdt_designation";
	$sql .= " FROM PRODUIT";
	$sql .= " WHERE cat_code = 'pam'";
	$sql .= ";";
	
	$resultat = $connexion->query($sql);
	return $resultat;

}
?>


