<?php

session_start();

include("../outils/requetes_SQL.php"); //On inclus le script php contenant les fonctions concernant la communication avec la base de donnée

$connexion = coBdd(); //On réalise la connexion avec la base de donée 

$connexion->exec("SET CHARACTER SET utf8"); //On fixe l'encodage en ut8 pour les données provenant de la base de donnée


//initialisation  des variables liées à la navigation entre les pages

$chaine_onglet = ""; 
$chemin_page = "";
$page = "";


//initialisation de variables de sessions 

if (($_SESSION['tabRef'] == NULL && $_SESSION['tabQte'] == NULL)|| $_SESSION['tabRef'] == NULL || $_SESSION['tabQte'] == NULL){
$tabRef = array();
$tabQte = array();
$_SESSION['tabRef']= $tabRef;
$_SESSION['tabQte']= $tabQte;
}
// Je vérifie si il y a un nom de page passé en paramètre

if(isset($_GET['page']))
{
	$page = $_GET['page'];
	// Je renseigne les valeurs en fonction de la page choisie
	switch($_GET['page'])
	{
		case 'Plante_a_massif' :
			$chaine_onglet = "LaFleur - Plante_a_massif";
			$chemin_page = "Plante_a_massif.php";
		break;
		case 'Rosiers' :
			$chaine_onglet = "LaFleur - Rosiers";
			$chemin_page = "Rosiers.php";
		break;
		case 'Bulbes' :
			$chaine_onglet = "LaFleur - Bulbes";
			$chemin_page = "Bulbes.php";
		break;
		case 'commande' :
			$chaine_onglet = "LaLfeur - Récapitulatif de commande";
			$chemin_page = "../outils/commande.php";
		break;
		case 'panier' :
			$chaine_onglet ="LaFleur - Panier";
			$chemin_page = "panier.php";
		break;
		case 'vider_le_panier' :
			$chaine_onglet ="LaFleur - Panier vidé!";
			$chemin_page = "../outils/viderPanier.php";
		break;
		
	}
}
// SINON affichage de la page d'acceuil de base
else
{
	$chaine_onglet = "LaFleur - Accueil";
}
?>

<!doctype html>
<html lang='fr'>
<!-- partie php qui appel les pages demandé -->

<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
   <link rel="icon" type="image/png" href="../img/favicon.png" />
	<title><?php echo $chaine_onglet ; ?></title>
</head>

<body>

<aside>
		<h3><img alt="" src="../img/logo2LaFleur.png" width = "13%" height = "13%"> Ste LaFleur <img alt="" src="../img/logo2LaFleur.png" width = "13%" height = "13%"></h3>											<!--Sous titre-->
		
		<div class="bande_verticale"></div>
		<a href="index.php" >											<!--lien vers l'acceuil -->
			Accueil											<!--nom du lien-->
		</a>	
		</br>	
		<a href ="mailto:info@lafleur.com">
		
			Nous écrire		
		
		
		</a>													<!--fin du lien-->
		<div class="bande_verticale"></div>
		
		<h3>Nos produits</h3>

			<a href="index.php?page=Bulbes"><!--deuxième lien vers le catalogue des Bulbes-->
				Bulbes										<!--nom du deuxième lien-->
			<a/>
			<br/>														<!--fin du lien-->
	
	
			
			<a href="index.php?page=Rosiers"><!--deuxième lien vers le catalogue des Bulbes-->
				Rosiers										<!--nom du deuxième lien-->
			<a/><br/>
																		<!--fin du lien-->
			
		
			<a href="index.php?page=Plante_a_massif">	<!--troisième lien vers le catalogue plante a massif-->
				Plante à massif										<!--nom du troisième lien-->
			</a>
			
			<div class="bande_verticale"></div>
			
			<h3>Votre panier</h3>
			
			<a href="index.php?page=commande">	<!--troisième lien vers le catalogue plante a massif-->
				Commander										<!--nom du troisième lien-->
			
			</a><br/>
			
			<a href= "index.php?page=vider_le_panier">
			
				Vider le panier 
			
			</a>
	</aside>
				

	
	<!-- Fin de la section du bandeau -->
	<?php
if($chemin_page != "" && $chemin_page != NULL) //Si le chemin de page sélectionné est rempli la page php correspondante est incluse dans l'index
{
	include($chemin_page);
}
// PAGE D'ACCEUIL DE BASE
	else
	{

	?>

		<div class = 'corps'> <!-- Début de la section "CadreCentrale" qui englobe tout le cadre centrale -->
		<div class="titre_page">
		<h1>" Dites-le avec Lafleur "</h1>
		</div>
		<div class="degrade"></div>
		<p class = "imgCorps"> 


		<img src="../img/Fleure.jpg" height ="50%" width = "50%" class = "cadreImgCorps"/>


		</p>
		<p class ="texteCorps"> 

Constituez votre panier en naviguant, 
puis cliquez sur «
Commander
».
</br>
</br>
Vous devez être enregistré comme client pour pouvoir
commander. Envoyez un mail en laissant vos coordonnées
pour pouvoir être contacté par notre service commercial.



		</p>

		</div> <!-- fin de la section centrale -->
<?php
	}
	?>

<footer>
	<div class="titre_footer">
		<h1 ><img alt="" src="../img/logoLaFleur.png" height = "23%" width = "23%" ></h1>
	</div>
	<div class="texte_footer">
		<p>Société anonyme au capital de 1 000 000 €<br/>18, rue des Changes, 75010 PARIS<br/>01.02.03.04.05 www.lafleur.com info@lafleur.com</p>
	</div>
	</footer>

	
<?php die(); //on ferme la connexion avec la base de donnée ?> 
</body>
<html>