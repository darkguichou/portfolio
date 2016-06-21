<?php session_start();
?>
<!doctype html>
<html lang='fr'>
<!-- partie php qui appel les pages demandé -->

<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../Pages/style.css">
   <link rel="icon" type="image/png" href="../img/favicon.png" />
	<title>Envoyer la commande</title>
</head>

<body>

<?php 

include 'requetes_SQL.php';


$co = coBdd(); //On réalise la connexion avec la base de donée

$co->exec("SET CHARACTER SET utf8"); //On fixe l'encodage en ut8 pour les données provenant de la base de donnée


$id = $_POST['id'];
$mdp = $_POST['mdp'];
$valide = false;
$r = select_client($co, $id);
$res = $r->fetch();
$tabRef = $_SESSION['tabRef'];
$tabQte = $_SESSION['tabQte'];



if( $res['clt_code'] == $id && $id != NULL){
	
	if ($res['clt_motPasse'] == $mdp && $mdp != NULL){
		
		$valide = true;
	}
}else{
	
	$valide = false;


}

$_SESSION["val"] = $valide;



if ($valide == true){
	
	echo "bonjour";
	

	
	$i = 0;
	
	$MAX = count($tabRef);
	
	$t =time();
	
	$d = date("Y-m-d");
	
	$j = $MAX;
	
	$h = 0;
	
	ajout_commande($co, $t, $id, $d);
	

	
	while ($i != $MAX){
		
		ajout_l_contenir($co, $t, $id, $tabRef[$i], $tabQte[$i]);
		
		$i++;
	}
	
	$_SESSION['tabRef'] = NULL;
	$_SESSION['tabQte'] = NULL;
	echo "<h2>Votre commande a bien étée prise en compte ".$id."/".$t."</h2> ";
	echo "Vous allez être redirigé vers la page d'acceuil dans quelques instants.";
	header ("Refresh: 20;URL=../Pages/index.php");
	
}

else if ($valide == false){
	
	echo "Mauvais identifiant ou/et Mot de passe, veuillez retenter";
	include '../Pages/connexion.html';
	
}



die();
?>

</body>
<html>