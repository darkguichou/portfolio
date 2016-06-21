<form method="post" action = "admin.php?page=selectActu">
<label>Sélection de l'actualité à publier:</label>
<select name = "actu">

<?php
$r = selectArticles ($co);

while ($a = $r->fetch()){

	echo "<option value = '".$a['titre']."'>".$a['titre']."</option>";

	
}
?>



</select>


<input type="submit" value = "Sélectionner">



</form>