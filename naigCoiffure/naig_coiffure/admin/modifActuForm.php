<?php 

$contenu = selectContenu ($co, $_GET['opt']);
$c = $contenu->fetch();

?>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
	<script language="javascript" type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
<script language="javascript" type="text/javascript">
tinymce.init({
    selector: "textarea.tinymce",
    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
    toolbar: [
              "undo redo | styleselect | bold italic underline | link image | emoticons",
              "alignleft aligncenter alignright"
          ],
    plugins: "advlist autolink link image lists charmap print preview emoticons"
 
      	
 });



</script>

	






<form action="../outils/modifActu.php?opt=<?php echo $_GET['opt'].'"';?> method ="post">

<h2> <?php echo $_GET['opt'];?> : </h2>


<textarea class = "tinymce" name="contenu" ><?php echo $c['contenu'];?></textarea>

<br/>

<button type = "submit" > Modifier</button>
</form>
