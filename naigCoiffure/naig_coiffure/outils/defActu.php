<?php 

try {
	

setActuF ($co);
setActuT ($co, $_POST['actu']);

} catch (Exception $e) {
	
	echo "Une erreur s'est produite";
}

echo "L'actualité a été sélectionnée pour être affichée. Vous allez être redirigé vers le menu d'administration dans quelques secondes.";

header('refresh:2;url=admin.php?page=modifActus' );

?>