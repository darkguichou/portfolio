<?php 

function connexionSql(){

	try {
		$connexion = new PDO('mysql:host=localhost;dbname=naig_coiffure','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //Les paramétres de connexion sont à adapter à l'hébergeur
	} catch (Exception $e) {

		echo "Impossible de se connecter à la base de donnée, Erreur:". $e->getMessage() . "</br>";
	}


	return $connexion;
}


function requeteExe($connexion, $requete){


	$resultat = $connexion->query($requete);

	return $resultat;
}

function  selectArticles ($co){
	
	
	$requete = "SELECT * FROM actus ORDER BY id desc";
	$res = requeteExe($co, $requete);
	return $res;
}

function countActus ($co){
	
	$requete = "SELECT count(*) FROM actus";
	$res = requeteExe($co, $requete);
	return $res;
}


function creerArticle ($co, $titre, $contenu){
	
	$requete = "INSERT INTO actus VALUES (NULL, '".$titre."', '".$contenu."', CURDATE())";
	requeteExe($co, $requete);
}

function modifActu ($co, $titre, $contenu){
	
	$requete = "UPDATE actus SET contenu ='".$contenu."' WHERE titre = '".$titre."'";
	requeteExe($co, $requete);
	
}

function supprActu ($co, $titre){
	
	$requete = "DELETE FROM actus WHERE titre ='".$titre."'";
	requeteExe($co, $requete);
}

function selectActu ($co){
	
	$requete = "SELECT * FROM actus WHERE afficher = 'true'";
	$res = requeteExe($co, $requete);
	return $res;
}

function selectUtil ($co, $id){
	
	
	$requete = "SELECT identifiant, mdp FROM util WHERE identifiant = '".$id."'";
	$res = requeteExe($co, $requete);
	return $res;
	
}

function selectContenu ($co, $titre){
	
	$requete = "SElECT * FROM actus WHERE titre = '".$titre."'";
	$res = requeteExe($co, $requete);
	return $res;
	
}

function ajoutImage ($co, $path, $nom){
	
	$requete = "INSERT INTO images VALUES ('".$path."', NULL,  '".$nom."', 0)";
	$res = requeteExe($co, $requete);
	
	
	
}

function selectImages ($co , $etat){
	
	$requete = " SELECT * FROM images WHERE etat =".$etat;
	$res = requeteExe($co, $requete);
	return $res;
}

function modifEtatImg ($co, $nom, $etat){
	
	
	$requete = "UPDATE images SET etat =".$etat." WHERE nom ='".$nom."'";
	$res = requeteExe ($co, $requete);
}

function selectTarifs ($co){
	
	$requete = "SELECT * FROM tarifs";
	$res = requeteExe ($co, $requete);
	return $res;
}


function modifTarif ($co, $oId, $id, $nom, $prix){
	
	$requete = "UPDATE tarifs SET nom ='".$nom."', id='".$id."', prix=".$prix." WHERE id ='".$oId."'";
	$res = requeteExe ($co, $requete);
}

function creerTarif ($co, $nom, $id, $prix){
	
	$requete = "INSERT INTO tarifs VALUES ('".$id."', '".$nom."', ".$prix.")";
	$res = requeteExe ($co, $requete);
}

function selectTarif ($co, $id){
	
	$requete = "SELECT * FROM tarifs WHERE id='".$id."'";
	$res = requeteExe ($co, $requete);
	return $res;
}

function supprTarif ($co, $id){
	
	$requete = "DELETE FROM tarifs WHERE id='".$id."'";
	$res = requeteExe ($co, $requete);
}

function setActuF ($co){
	
	$requete = "UPDATE actus SET afficher = 'false' WHERE afficher = 'true'";
	$res = requeteExe ($co, $requete);
}

function  setActuT ($co, $titre){
	
	$requete = "UPDATE actus SET afficher = 'true' WHERE titre = '".$titre."'";
	$res = requeteExe ($co, $requete);
	
}

function cryptMdp ($mdp){
	
	$hash = crypt ($mdp, '$6$rounds=5000$usesomesillystringforsalt$');
	return ($hash);
}

function updateMdp ($co, $mdp){
	
	$requete = "UPDATE util SET mdp = '".$mdp."'";
	$res = requeteExe ($co, $requete);
}

?>