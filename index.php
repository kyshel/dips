<?php
require_once("header.php");
?>


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





<?php
require_once("footer.php");
?>