<h2>Modification des tarifs</h2>

<?php 
$r = selectTarifs ($co);

affTarifs ($r);

?>

<h3> Créer un tarif</h3>
<div class="box">
<form method="POST" action="admin.php?page=creerTarif" > 
<p>
Nom du tarif: <input type="text" name="nom" value="Entrez un nom...">
&nbsp; &nbsp; Prix du tarif: <input type = "text" name = "prix" value = "Entrez un prix...">
 &nbsp; &nbsp;<input type="submit" value="Créer">
</p>
</form>

</div>