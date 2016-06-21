
<?php 
include ("outils/sql.php");
include ("outils/affLib.php");

$co = connexionSql();
$co->exec("SET CHARACTER SET utf8");
?>



<!DOCTYPE html>
<html>
<head>
<meta content="NAIG COIFFURE, Naïg et toute son équipe vous accueillent du Lundi au Samedi." name="description"></meta>
<meta content="NAIG COIFFURE Naïg coiffure coiffeur noyal sur vilaine brécé…fure acigne 35690 votre coiffeur conseil coiffeuse visagiste " name="keywords"></meta>
<meta content="français" name="language"></meta>
<meta content="NAIG COIFFURE" name="author"></meta>
<meta content="Lechelon Guillaume" name="designer"></meta>
<meta content="http://www.naigcoiffure.fr" name="Identifier-URL"></meta>
<meta content="all" name="robots"></meta>
<meta content="text/html"; charset="utf-8" />
<link rel="stylesheet" href="styles/style.css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Indie+Flower">
<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
<title>Naïg Coiffure</title>
</head>

<body>

	<!-- JQUERY: fonctions -->

	<script type="text/javascript">


    <?php tabGal($co, 1, "tabImg"); ?> //Tableau contenant les images de la première galerie
    <?php  tabGal($co, 2, "tabImgF");?>
    <?php tabGal($co, 3, "tabImgH");?>
    <?php tabGal($co, 4, "tabImgJ");?>
    var maxG = (tabImg.length) - 1; //position du drnier élément dans le tableau
    var maxF = (tabImgF.length) -1;
    var maxH = (tabImgH.length) -1;
    var maxJ = (tabImgJ.length) -1;
    var locG = 0; //localisation dans la gallerie
    var locF = 0;
    var locH = 0;
    var locJ = 0;
	//fonction qui permet d'afficher l'image suivante dans la gallerie
	var boucleGalerie = setInterval(affImageSuivante, 4000); //permet de réaliser un diaporama d'image toute les 2 secondes (2000ms)
	var boucleF = setInterval(nextF, 3000);
	var boucleH = setInterval(nextH, 3200);
	var boucleJ = setInterval(nextJ, 3100);



   
	
	function affImageSuivante(){



    	if (locG >= maxG){ //Si la localisation dans la gallerie atteint la position maximale dans le tableau on remet la localisation à zéro

        	locG = 0;

    	}else{  //On incrémente la localisation dans la galerie pour passer à l'image suivante
        	
			locG = locG + 1;
		
    	}

		$('.innerGalerie').empty();
		$('.innerGalerie').append("<img src ='"+tabImg[locG]+"' >").hide().fadeIn(1000);
    }

    //fonction qui permet d'afficher l'image précédente dans la gallerie
    function affImagePrecedente(){

        if (locG <= 0){ // Si on est à la première image de la gallerie alors on retourne à la dernière

            locG = maxG;
    	
        }else { //Sinon on retourne tout simplement à l'image précédente

           locG = locG - 1;

        }

		$('.innerGalerie').empty();
		$('.innerGalerie').append("<img src ='"+tabImg[locG]+"' >").hide().fadeIn(1000);
 
    }

    function stopBoucleGalerie(){ //fonction qui arrète le diaporama de la galerie

        clearInterval(boucleGalerie);

    }

    function restartBoucleGalerie(){//fonction qui redémarre le diaporama de la galerie

        window.boucleGalerie = setInterval(affImageSuivante, 4000);

    }

    function nextF(){
        
    	if (locF >= maxF){ //Si la localisation dans la gallerie atteint la position maximale dans le tableau on remet la localisation à zéro

        	locF = 0;

    	}else{  //On incrémente la localisation dans la galerie pour passer à l'image suivante
        	
			locF = locF + 1;
		
    	}
    	
    	$('.innerGalerieF');
		$('.innerGalerieF').empty();
		$('.innerGalerieF').append("<img src ='"+tabImgF[locF]+"' >").hide().fadeIn(1000);
		
    }

    function stopBoucleF(){ //fonction qui arrète le diaporama de la galerie

        clearInterval(boucleF);

    }
    
    function restartBoucleF(){//fonction qui redémarre le diaporama de la galerie

        window.boucleF = setInterval(nextF, 3000);

    }

function nextH(){
        
    	if (locH >= maxH){ //Si la localisation dans la gallerie atteint la position maximale dans le tableau on remet la localisation à zéro

        	locH = 0;

    	}else{  //On incrémente la localisation dans la galerie pour passer à l'image suivante
        	
			locH = locH + 1;
		
    	}
    	
    	$('.innerGalerieH');
		$('.innerGalerieH').empty();
		$('.innerGalerieH').append("<img src ='"+tabImgH[locH]+"' >").hide().fadeIn(1000);
		
    }

    function stopBoucleH(){ //fonction qui arrète le diaporama de la galerie

        clearInterval(boucleH);

    }
    
    function restartBoucleH(){//fonction qui redémarre le diaporama de la galerie

        window.boucleH = setInterval(nextH, 3000);

    }
    
function nextJ(){
        
    	if (locJ >= maxJ){ //Si la localisation dans la gallerie atteint la position maximale dans le tableau on remet la localisation à zéro

        	locJ = 0;

    	}else{  //On incrémente la localisation dans la galerie pour passer à l'image suivante
        	
			locJ = locJ + 1;
		
    	}
    	
    	$('.innerGalerieJ');
		$('.innerGalerieJ').empty();
		$('.innerGalerieJ').append("<img src ='"+tabImgJ[locJ]+"' >").hide().fadeIn(1000);
		
    }

    function stopBoucleJ(){ //fonction qui arrète le diaporama de la galerie

        clearInterval(boucleJ);

    }
    
    function restartBoucleJ(){//fonction qui redémarre le diaporama de la galerie

        window.boucleJ = setInterval(nextJ, 3100);

    }
    
    

    </script>
 <!-- API facebook -->   
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 
 <!-- fin API facebook -->
    
<div class = "corps">


<?php 
include ("pages/header.html");

?>
<div class ="gauche">
<?php include ("pages/galerie.html"); ?>  

<?php include ("pages/contenu.php"); ?>

</div>

<div class = "droite">



<?php include ("pages/horaires.html");?>
<?php include ("pages/salon.html");?>

<?php include ("pages/actu.php"); ?>  

<?php include ("pages/tarifs.php");?> 




</div>




</div>
 
 <?php 
 
 include ("pages/footer.html");
 ?>

</body>
</html>