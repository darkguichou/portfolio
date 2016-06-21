<?php 

session_start();

include ("sql.php");

$co = connexionSql();
$co->exec("SET CHARACTER SET utf8");

$id = $_POST['id'];
$pwd = $_POST['mdp'];
$r = selectUtil ($co, $id);
$res = $r->fetch();

if ($res['identifiant'] != NULL){
	
	$utilExist = true;
	
	if ($res['mdp'] == cryptMdp($pwd)){
		
		$correspond = true;
	}
	
	else{
		
		$correspond = false;
	}
	
	
}

else {
	
	$utilExist = false;
}


if (($utilExist == false) || ($correspond == false)){
	
	$_SESSION['connect'] = false;
	
	echo "Mauvais Identifiant ou/et mot de passe, veuillez réessailler.";
	
	include ("../pages/fConnexion.php");
	
	
}else if (($utilExist == true) && ($correspond == true)){
	
	$_SESSION['connect'] = true;
	header('Location: ../admin/admin.php?page=menu');
}


?>