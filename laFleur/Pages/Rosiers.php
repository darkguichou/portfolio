
	<div class="corps">
	<h1>Les Rosiers</h1>											<!-- Titre -->
	<div class="degrade"></div>
	
	<form class="form_panier" method="post" action="index.php?page=panier">
		<table>
			<tr>
				<td>
				<select name="pdt_ref">
				<option value=""></option>
					<?php
					$les_produits = select_produits_ros($connexion);
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
	<th>Photo</th>										<th>Réference</th>                <th> Désignation</th>                           <th>Prix</th>
	</tr>
	<?php
		$ensemble_rosiers = select_rosiers($connexion);
	
		while($rosiers =$ensemble_rosiers->fetch()) //boucle qui remplit le tableau 
		{
			?>
			<tr>
				<td><img src="../img/<?php echo  $rosiers['pdt_image']; ?>"></td>
				<td class = "refPol"><i><?php echo $rosiers['pdt_ref']; ?></i></td>
				<td><?php echo $rosiers['pdt_designation']; ?></td>
				<td><?php echo $rosiers['pdt_prix']." €"; ?></td>
			</tr>
			<?php
		}
	
		?>
		

	<!--<tr>
	<td><img src="img/rosiers_gdefleur.jpg"></td> 	<td>Rosiers grande fleurs </td>   <td> 1 pied spécial grandes fleurs</td>         <td>20.00 €</td>
	</tr>
	<tr>
	<td><img src="img/rosiers_parfum.jpg"></td>		<td>Rosiers parfum</td>           <td>Variété sélectionnée pour son parfum</td>   <td>9.00 €</td>
	</tr>
	<tr>
	<td><img src="img/rosiers_arbuste.jpg"></td>		<td>Rosiers arbuste</td>          <td>Rosier arbuste</td>                      	  <td>8.00 €</td>
	</tr>-->
	</table>
	</div>
