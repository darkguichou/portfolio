<?php 



$r = selectTarifs($co);

echo "<div class = 'boxH'><h1>Tarifs</h1>";

affTarifsA($r);

?>



<?php 

echo "</div>";

?>