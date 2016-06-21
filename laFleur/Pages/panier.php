<?php 
$tabRef = $_SESSION['tabRef'];
array_push($tabRef, $_POST['pdt_ref']);


$tabQte = $_SESSION['tabQte'];
array_push($tabQte, $_POST['quantite']);
$MAX = count($tabQte);
$i = 0;

	
	?>	



<div class="corps">	
<h1>Votre panier</h1>											<!--Titre-->
<div class="degrade"></div>

 
<table class="tableau">
	<tr>
		<th>Produits<th>
		<th>Prix unitaire<th>
		<th>Quantité<th>
		<th>Total<th>
	</tr>
	<?php 
	
	while ($i != $MAX){
	
	echo "	
	<tr>
		<td>". $tabRef[$i]."<td>
		<td></td>
		<td>". $tabQte[$i]."<td>
		<td></td>
	</tr>";
	
	$i++;
	}
	
$_SESSION['tabRef'] = $tabRef;
$_SESSION['tabQte'] = $tabQte;
?>
</table>
</div>