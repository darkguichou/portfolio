<?php 



echo "<h2> Galerie principale: </h2>";



affImages ($co, 1);

affListeImages($co, 1);



echo "<h2> Galerie Femmes: </h2>";

affImages ($co, 2);

affListeImages ($co, 2);


echo "<h2> Galerie Hommes: </h2>";

affImages ($co, 3);

affListeImages ($co, 3);

echo "<h2> Galerie Juniors: </h2>";

affImages ($co, 4);

affListeImages ($co, 4);


echo "<h2> Upload d'images:</h2>";
include ("imagesUpload.html");


?>