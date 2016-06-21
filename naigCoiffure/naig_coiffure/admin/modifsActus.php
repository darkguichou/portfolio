<?php 

$r = selectArticles($co);
affActusAdmin($co, $r);

include '../outils/selectActu.php';

?>