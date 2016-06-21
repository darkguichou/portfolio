<?php 

try {
	$mdp  = cryptMdp ($_POST['newMdp']);
	updateMdp ($co, $mdp);
	
} catch (Exception $e) {
	
	echo $e;
}

echo "Mot de passe modifié avec succès. Vous allez être redirigé vers le menu d'administration dans quelques secondes.";

header('refresh:2;url=admin.php?page=modifMdp' );




?>