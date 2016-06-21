
	<div class="corps">	
	<h1>Les Plantes à Massif</h1>											<!--Titre-->
	<div class="degrade"></div>

	<form class="form_panier"   method="POST" action="index.php?page=panier">
		<table>
			<tr>
				<td>
				<select name="pdt_ref">
				<option value=""></option>
					<?php
					$les_produits = select_produits_pam($connexion);
					while($produit = $les_produits->fetch())
						{
							?><option value="<?php echo $produit['pdt_ref']?>"><?php echo $produit['pdt_designation'] ?></option><?php
						}
						?>
				</select>
				</td>
				<td><label>Quantité :<label></td>
				<td><input type="text" name="quantite"/></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Ajouter au panier"/></td>
			</tr>
		</table>
	</form>
	
	<table class="tableau">
	<tr> 
	 <th>Photo</th>													<th>Réference</th>                 <th> Désignation</th>                			<th>Prix</th>
	</tr>
	<?php
		$ensemble_plante_a_massif = select_plante_a_massif($connexion);
	
		while($plante_a_massif =$ensemble_plante_a_massif->fetch()) //boucle qui remplit le tableau 
		{
			?>
			<tr>
				<td><img src="../img/<?php echo $plante_a_massif['pdt_image']; ?>"></td>
				<td class = "refPol"><i><?php echo $plante_a_massif['pdt_ref']; ?></i></td>
				<td><?php echo $plante_a_massif['pdt_designation']; ?></td>
				<td><?php echo $plante_a_massif['pdt_prix']." €"; ?></td>
			</tr>
			<?php
		}
	
		?>

	<!--<tr>
	<td><img src="img/massif_marguerite.jpg"></td>				<td>massif marguerite </td>    	   <td>Lot de 3 marguerites</td>                 	<td>5.00 €</td>
	</tr>
	<tr>
	<td><img src="img/massif_melange.jpg"></td> 					<td>massif melange</td>  		   <td>Mélangé varié de 10 plantes à massif</td>    <td>15.00 €</td>
	</tr>
	<tr>
	<td><img src="img/massif_pensee.jpg"></td> 					<td>massif pensee</td>        	   <td>Pour un bouquet de 6 pensées</td>            <td>6.00 €</td>
	</tr>-->
	</table>
	</div>	
	