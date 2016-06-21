<div class="corps">
	
		<div class="titre_page">
			<h1>Les Bulbes</h1>											<!--titre  -->
		</div>
		<div class="degrade"></div>
	
	<form class="form_panier" method="post" action="index.php?page=panier">
		<table>
			<tr>
				<td>
				<select name="pdt_ref">
					<option value=""></option>
					<?php
					$les_produits = select_produits_blb($connexion);
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
			<th>Photo</th>
			<th>Réference</th>
			<th> Désignation</th>
			<th>Prix</th>
		</tr>
		
		<?php
		
		$ensemble_bulbes = select_bulbes($connexion); 
	

		while($bulbes =$ensemble_bulbes->fetch())  //boucle qui remplit le tableau 


		{
			?>
			<tr>
				<td><img src="../img/<?php echo $bulbes['pdt_image']; ?>"></td>
				<td class = "refPol"><i><?php echo $bulbes['pdt_ref']; ?></i></td>
				<td><?php echo $bulbes['pdt_designation']; ?></td>
				<td><?php echo $bulbes['pdt_prix']." €"; ?></td>
			</tr>
			<?php
		}
	
		?>
		

		<!--<tr> 
			<th>Photo</th>									 <th>Réference</th>            <th> Désignation</th>         		 <th>Prix</th>
		</tr>
		<tr>
			<td><img src="img/bulbes_begonia.jpg"></td> 	 <td>Bulbes de bégonias</td>   <td>3 bulbes de bégonias</td>         <td class="droite">5.00 €</td>
		</tr>
		<tr>
			<td><img src="img/bulbes_dahlia.jpg"></td>	 <td>Bulbes de dahlias</td>    <td>10 bulbes de dahlias</td>         <td class="droite">12.00 €</td>
		</tr>
		<tr>
			<td><img src="img/bulbes_glaieul.jpg"></td> 	 <td>Bulbes glaïeul</td>       <td>50 glaïeul</td>                   <td class="droite">9.00 €</td>
		</tr>-->
		</table>
	</div>