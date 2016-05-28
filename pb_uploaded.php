<?php
require_once("header.php");
?>

<?php
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    // echo "Type: " . $_FILES["file"]["type"] . "<br />";
    // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    $newfilename = time().'_'.$_FILES["file"]["name"];

      // if (file_exists("upload/" . $newfilename))
      // {
      // 	$i=1;
      // 	while(file_exists("upload/" . $newfilename.$i)){
      // 		$i++;
      // 	}
      // 	$newfilename = $newfilename.$i;
      // }

     move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $newfilename);
      //echo "Stored in: " . "upload/" . $newfilename;
     echo '<h1>'.$newfilename.'</h1>';

    }
?>



		<script type="text/javascript" src="pb/script/common.js"></script>
		<script type="text/javascript" src="pb/script/paintbrush.js"></script>
		<script type="text/javascript" src="pb/script/playground.js"></script>
		<link rel="stylesheet" type="text/css" href="css/_playground.css" />

		<script type="text/javascript" src="pb/script/bootstrap-slider.min.js"></script>
		<link rel="stylesheet" type="text/css" href="pb/css/bootstrap-slider.min.css" />

		
		<form action="#" method="post" id="interaction-form">
		<div id="interaction">

			<img id="filter-target" 
			<?php 

			echo 'src="upload/'.$newfilename.'"';

			?> 
			width="300"  alt="">


			<br>

			<label class="selector">
				Filter:
				<select class="form-control" id="filter-selector"></select>
			</label>

			

			<div class="controls" id="controls-blur">
				<label>
					Amount:
					<input type="range" name="data-pb-blur-amount" min="0" max="10" step="0.05" value="0">
				</label>
			</div>

			<div class="controls" id="controls-edges">
				<label>
					Amount:
					<input type="range" name="data-pb-edges-amount" min="0" max="1" step="0.01" value="1">
				</label>
			</div>

			<div class="controls" id="controls-emboss">
				<label>
					Amount:
					<input type="range" name="data-pb-emboss-amount" min="0" max="1" step="0.01" value="0.2">
				</label>
			</div>

			<div class="controls" id="controls-greyscale">
				<label>
					Opacity:
					<input type="range" name="data-pb-greyscale-opacity" min="0" max="1" step="0.01" value="1">
				</label>
			</div>

			<div class="controls" id="controls-matrix">
				<label>
					Amount:
					<input type="range" name="data-pb-matrix-amount" min="0" max="1" step="0.01" value="0.2">
				</label>
			</div>

			<div class="controls" id="controls-mosaic">
				<label>
					Opacity:
					<input type="range" name="data-pb-mosaic-opacity" min="0" max="1" step="0.01" value="1">
				</label>
				<label>
					Size:
					<input type="range" name="data-pb-mosaic-size" min="1" max="40" step="1" value="5">
				</label>
			</div>

			<div class="controls" id="controls-noise">
				<label>
					Amount:
					<input type="range" name="data-pb-noise-amount" min="0" max="100" step="1" value="30">
				</label>
				<label>
					Type:
					<input type="radio" name="data-pb-noise-type" value="mono"> Mono
					<input type="radio" name="data-pb-noise-type" value="colour"> Colour
				</label>
			</div>

			<div class="controls" id="controls-posterize">
				<label>
					Amount:
					<input type="range" name="data-pb-posterize-amount" min="2" max="100" step="1" value="5">
				</label>
				<label>
					Opacity:
					<input type="range" name="data-pb-posterize-opacity" min="0" max="1" step="0.01" value="1">
				</label>
			</div>

			<div class="controls" id="controls-sepia">
				<label>
					Opacity:
					<input type="range" name="data-pb-sepia-opacity" min="0" max="1" step="0.01" value="0.5">
				</label>
			</div>

			<div class="controls" id="controls-sharpen">
				<label>
					Amount:
					<input type="range" name="data-pb-sharpen-amount" min="0" max="1" step="0.01" value="0.2">
				</label>
			</div>

			<div class="controls" id="controls-tint">
				<label>
					Colour:
					<input type="text" name="data-pb-tint-color" value="#FF0000">
				</label>
				<label>
					Opacity:
					<input type="range" name="data-pb-tint-opacity" min="0" max="1" step="0.01" value="0.5">
				</label>
			</div>
			
			<button class="apply" type="submit" style="display: none;">Apply</button>

		</div>		
		</form>		





		
		<!--div>
			<p id="copyright">&copy; Copyright 2010, Dave Shea. <a href="http://github.com/mezzoblue/PaintbrushJS">PaintbrushJS lives on GitHub</a>. <a href="http://www.opensource.org/licenses/mit-license.php">MIT Licensed</a>.</p>
		</div-->




<?php
require_once("slider_js.php");
require_once("footer.php");
?>