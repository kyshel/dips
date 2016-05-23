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
		<input type="submit" name="submit" value="Submit" />
		</form>
	</div>

	<hr>

	<div class="col-sm-5 show_left" style="background-color: red; " id="origin_img">		
	</div>

	<div class="col-sm-2 show_mid" style="background-color: orange; ">		
	</div>

	<div class="col-sm-5 show_right" style="background-color: yellow; ;">		
	</div>



	
<!-- 	<div class="page-header">
		<h1>Sticky footer with fixed navbar</h1>
	</div>
	<p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
	<p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p> -->

</div>












<?php
require_once("ajax_js.php");
?>



<?php
require_once("footer.php");
?>