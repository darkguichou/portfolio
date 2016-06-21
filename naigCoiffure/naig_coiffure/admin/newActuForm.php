
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
	<script language="javascript" type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
<script language="javascript" type="text/javascript">
tinymce.init({
    selector: "textarea.tinymce",
    toolbar: [
              "undo redo | styleselect | bold italic underline | link image | emoticons",
              "alignleft aligncenter alignright"
          ],
    plugins: "advlist autolink link image lists charmap print preview emoticons"
 
      	
 });



</script>

	






<form action="../outils/creerActu.php" method ="post">

<p>Titre: <input name  = "titre" ></input></p>


<textarea class = "tinymce" name="contenu"></textarea>

<br/>

<button type = "submit"> créer</button>

</form>
