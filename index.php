<?php
require_once("header.php");
?>

<!-- Begin page content -->
<div class="container">

	<div class="page-header">
		<h1>Upload Picture First:</h1>
	</div>

	<div>
		<form id="foo" enctype="multipart/form-data">
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file" /> 
		<br />
		<input type="submit" name="submit" value="Submit" class="btn"/>
		</form>
	</div>






	<hr>

	<div class="col-sm-5 show_left" style="background-color: red; " id="origin_img">    
	</div>

	<div class="col-sm-2 show_mid" style="background-color: orange; ">    
	</div>

	<div class="col-sm-5 show_right" style="background-color: yellow; ;">   
	</div>	


</div>



<?php
require_once("ajax_js.php");
?>
<?php
require_once("footer.php");
?>