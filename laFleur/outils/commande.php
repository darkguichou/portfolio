
	<div class="corps">	
	<h1>Récapitulatif de commande</h1>											<!--Titre-->
	<div class="degrade"></div>

<?php 


//include ("requetes_SQL.php");


$co = coBdd(); //On réalise la connexion avec la base de donée

$co->exec("SET CHARACTER SET utf8"); //On fixe l'encodage en ut8 pour les données provenant de la base de donnée
//tableaux de session
$tabRef = $_SESSION['tabRef'];
$tabQte = $_SESSION['tabQte'];

if ($tabRef != NULL && $tabQte != NULL){
echo "<table class ='tableau'>";
echo " <tr> <th> référence </th> <th> désignation </th> <th> prix unitaire </th>  <th> quantité </th> <th> Montant </th> </tr>";

$MAX = count($tabRef);
$i = 0;
$tot =0;


	

while ($i != $MAX){
	
	$r = select_infos_produit($co, $tabRef[$i]);
	$res = $r->fetch();
	$montant = $res['pdt_prix']*$tabQte[$i];
	echo " <tr> <td>".$tabRef[$i]."</td> <td>".$res['pdt_designation']."</td> <td>".$res['pdt_prix']." € </td>  <td>".$tabQte[$i]."x</td> <td>".$montant." € </td></tr>";
	$tot = $tot + $montant;
	$i++;
	
	
	
	
}

echo  " <tr> <th> Total: </th> <th></th> <th>  </th>  <th></th> <th>".$tot." € </th> </tr>";
echo "</table>";
		
	
	

include '../Pages/connexion.html';
 
}else{


echo "<h1> Votre panier est vide!<h1/>";




}

die();
?>
</div>

