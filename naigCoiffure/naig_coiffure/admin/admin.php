<?php
session_start ();
include ("../outils/sql.php");
include ("../outils/affLib.php");

$co = connexionSql();
$co->exec("SET CHARACTER SET utf8");

if ($_SESSION ['connect'] == true) {
	
	$acces = true;
} 

else {
	
	header ( 'Location: ../admin/index.php' );
}

?>

<!DOCTYPE html>
<html>
<head>
<meta content="text/html" ; charset="utf-8" />
<link rel="stylesheet" href="../styles/admin.css" />
<link rel="stylesheet" type="text/css"
	href="http://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" type="text/css"
	href="http://fonts.googleapis.com/css?family=Indie+Flower">
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript"> 
function verifMdp(){

	mdp1 = document.modifMdp.newMdp.value;
	mdp2 = document.modifMdp.newMdp2.value;
	val = false;

	if (mdp1 != "" && mdp2 != ""){

		if (mdp1 == mdp2){

			val = true;
		}else{

			val = false;
			alert("Les deux mot de passe ne sont pas identiques!");
			
		}

	}
		
else{

	val = false;
	alert("Les champs ne sont pas correctement remplis!");
	
}

if (val == true ){

	document.modifMdp.submit();
}

return val;
}
</script>

<title>administration</title>
</head>

<body>

<?php include "header.html";?>


	<div class="corps">
	
	<?php 
	
		switch ($_GET['page']){


			case "menu":
				
				include ("menuAdmin.html");
				include "descriptif.html";
				
			break;
			
			case "ajoutActu":
				
				include ("newActuForm.php");
				
				
			break;
			
			case "modifActus":
				
				include ("modifsActus.php");
				
			break;
			
			case "modifActu":
				
				include ("modifActuForm.php");
				
			break;
			
			case "supprActu":
				
				include ("../outils/supprActu.php");
				
			break;
			
			case "images":
				
				include ("adminImages.php");
				
			break;
			
			case "upload":
				
				include ("../outils/upload.php");
				
			break;
			
			case "supprImg":
				
				include ("../outils/supprimerImg.php");
				
			break;
			
			case "addImg":
				
				include ("../outils/addImg.php");
				
			break;
			
			case "tarifs":
				
				include ("modifTarifs.php");
				
			break;
			
			case "creerTarif":
				
				include ("../outils/creerTarif.php");
				
			break;
			
			case "modifTarifF":
				
				include ("modifTarifForm.php");
				
			break;
			
			case "modifTarif":
				
				include ("../outils/modifTarif.php");
				
			break;
			
			case "supprTarif":
				
				include ("../outils/supprTarif.php");
				
			break;
			
			case "selectActu":
				
				include "../outils/defActu.php";
				
			break;
			
			case "modifMdp":
				
				include "modifMdp.html";
				
			break;
			
			case "setMdp":
				
				include '../outils/modifMdp.php';
				
			break;
			
			default:
				
				include 'menuAdmin.html';
				include 'descriptif.html';
				
			break;
			

			
			}
			
			
	
	
	
	
	?>
	
	
	
	
	</div>

</body>

</html>


