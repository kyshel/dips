<?php
require_once("header.php");
?>

<!-- Begin page content -->
<div class="container">

	<div id="upload_container">
		<div class="page-header">
			<h1>Upload Picture First:</h1>
		</div>

		<div>
			<form id="foo" enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file" /> 
			<br />
			<input type="submit" name="submit" value="Submit" class="btn" onclick="hide_upload()" />
			</form>
		</div>
	</div>






	<div id="process_container">

	</div>


</div>



<?php
// for ajax
require_once("ajax_js.php");
// normal js functions
require_once("js.php");

require_once("footer.php");
?>