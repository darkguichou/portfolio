<?php 

$id = str_replace(' ', '', $_POST['nom']);

modifTarif ($co, $_GET['opt'], $id, $_POST['nom'], $_POST['prix']);

echo "Modification réalisée avec succès. Vous allez être redirigé vers le menu d'administration dans quelques secondes.";
header('refresh:2;url=../admin/admin.php?page=menu' );


?>