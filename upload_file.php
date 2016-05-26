<div class="page-header">
	<h1>Select Process Second:</h1>
</div>

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

    }



echo '<div class="col-sm-5 show_left" style="background-color: red; " id="origin_img">';
echo '<p>Original:</p>';
echo '<img src="upload/'.$newfilename.'" style="width:300px;">';
echo '</div>';

echo '<div class="col-sm-2 show_mid" style="background-color: orange; " id="process_buttons">';
echo '
<form id="process_form" enctype="multipart/form-data">
<input name="uploaded_name"  value="'. $newfilename.'"  style="display: none;" id="uploaded_name"/>
<button type="submit" onclick="name_to_result()">Smooth1</button>
</form>

<button onclick="process(this.value)"  value="smooth">Smooth</button>
<button onclick="process(this.value)"  value="shift">shift</button>
<button onclick="process(this.value)"  value="rot">rot</button>
<button onclick="process(this.value)"  value="sobelx">sobelx</button>
<button onclick="process(this.value)"  value="sobely">sobely</button>
<button onclick="process(this.value)"  value="edge">edge</button>
<button onclick="process(this.value)"  value="fft">fft</button>

';
echo '</div>';

echo '<div class="col-sm-5 show_right" style="background-color: yellow; " id="processed_img"></div>	';

?>

<!-- <button onclick="process()">process</button> -->