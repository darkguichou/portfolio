<?php
function affPage($co, $r, $start, $stop) {
	
	
	while ($ligne = $r->fetch()){
		
		
		//if ($ligne['id'] <= $start && $ligne['id'] >= $stop){
		echo "<div class = 'box3'><h1>".$ligne['titre']."</h1>";
		echo $ligne['date'];
		echo "<h2>".$ligne['contenu']."</h2></div>";
		echo "</br>";
		
		//}
	}
	
	echo "<br/>";
	
	

	
}
 function affNbPages($nb){
 	
 	$j = 1;
 	$i = $nb;
 	
 	
 	while ( $i >= 1){
 		
 		
 		echo "<a href = 'actus.php?page=".$j."'>".$j."</a>, ";
 		$i--;
 		$j++;
 	}
 	
 	echo "<a href = 'actus.php?page=".$nb."'>Dernières actus</a>";
 }

 
 function affActu($co, $r){
 	
 	$ligne = $r->fetch();
 	
 	echo"<h1>".$ligne['titre']."</h1>"; 
 	echo $ligne['contenu'];
 	echo "</br>";
 }
 
 function affActusAdmin($co, $r){
 
 	
 	echo "<ul>";
 	
 	while ($ligne = $r->fetch()){

 	
 			$titre = $ligne['titre'];
 			echo "<li>".$titre." ";
 			echo " ".$ligne['date']." :  <a href = 'admin.php?page=modifActu&amp;opt=".$titre."'>Modifier</a> <a href = 'admin.php?page=supprActu&amp;opt=".$titre."'>Supprimer</a>  </li>";
 			
 	
 		}
 		
 	echo "</ul>";
 	}

 	
 function affListeImages($co, $etat) {
 	
 	$r = selectImages ($co, 0);
 	
 	echo "<form method='POST' action='admin.php?page=addImg&amp;opt=".$etat."'>";
 	
 	echo "<SELECT name = 'img'>";
 	
 	echo "<option> Sélectionnez une image... </option>";
 	
 	while ($ligne = $r->fetch()){
 		
 		echo "<option value = '".$ligne['nom']."'>".$ligne['nom']."</option>";
 	}
 	
 	echo "</SELECT>";
 	
 	echo "<button type = 'submit'> Ajouter </button>";
 	
 	echo "</form>";
 	
 	echo "<br/> <br>";
 	
 	echo "</div>";
 	
 }
 
 function affImages ($co, $etat){
 	
 	$i = 1;
 	
 	$r = selectImages ($co, $etat);
 	
 	echo "<div class ='box'>";
 	
 	echo "<p> Veuillez cochez les cases des images que vous souhaitez retirer de la gallerie. </p>";
 	
 	echo '<form method="POST" action="admin.php?page=supprImg&amp;opt='.$etat.'">';
 

 	while ($l = $r->fetch()){
 		
 		if ($i % 9 == 0){
 				
 			echo "<br/>";
 		}
 			
 			echo " <INPUT type='checkbox' name='nom[]' value ='".$l['nom']."'> <img src = '../".$l['path']."'>";
 			

 		
 		$i++;
 	}		
 	
 	echo "<br/> <br/>";
 	
 	echo "<input type = 'submit' value = 'Supprimer' name = 'supprimer'>";
 	
 	
 	echo "</form>";
 	
 	echo "<br/>";
 	
 	
 	
 }
 
 function affTarifs($r){
 	
 	
 	
 	echo "<ul>";
 	
 	while ($t = $r->fetch()){
 		
 		
 			
 			
 		
 		echo "<li>".$t['nom']."  :  ".$t['prix']."€ <a href = 'admin.php?page=modifTarifF&amp;opt=".$t['id']."'>Modifier le tarif</a> <a href = 'admin.php?page=supprTarif&amp;opt=".$t['id']."'>Supprimer le tarif</a>  </li>";
 		
 	}
 		
 		
 		echo "</ul>";
 		
 		
 	}
 	
 function affTarifsA($r){
 	
 	echo "<ul>";
 	
 	while ($t = $r->fetch()){
 			
 			
 	
 	
 			
 		echo "<li>".$t['nom']."  :  ".$t['prix']."€   </li>";
 			
 	}
 		
 	echo "<li><a href='pdf/tarifs.pdf' style = 'color: red; text-decoration: none;'> Plus de tarifs...</a></li>";
 	
 	echo "</ul>";
 	
 	
 	
 }
 
 function tabGal($co, $e, $tab){
 	
 	$r = selectImages ($co, $e);
 	$i = 0;
 	
 	 echo "var ".$tab."= [];";
 	
 	
 	while ($img = $r->fetch()){
 		
 		echo $tab."[".$i."] = '".$img['path']."';"; 
 		
 		$i = $i+1;
 	}
 	
 	
 }
 
 
 
 
?>