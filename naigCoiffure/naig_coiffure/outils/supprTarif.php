<?php 

supprTarif ($co, $_GET['opt']);
echo "Tarif bien supprimé. Vous allez être redirigé vers le menu d'administration dans quelques secondes.";
header('refresh:2;url=../admin/admin.php?page=menu' );


?>