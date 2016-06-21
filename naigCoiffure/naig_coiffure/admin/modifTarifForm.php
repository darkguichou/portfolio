<?php 
$r = selectTarif ($co, $_GET['opt']);
$t = $r->fetch();
?>

<form method ="POST" action="admin.php?page=modifTarif&amp;opt=<?php  echo $_GET['opt']; ?>">

	Nom:<input type="text" name ="nom" value = "<?php echo $t['nom'];  ?>">
	Prix: <input type="text" name = "prix" value = " <?php  echo $t['prix'];?>">
	<input type ="submit" value = "Modifier">

</form>