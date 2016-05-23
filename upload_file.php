
<?php
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    $newfilename = time().'_'.$_FILES["file"]["name"];

      // if (file_exists("upload/" . $newfilename))
      // {
      // 	$i=1;
      // 	while(file_exists("upload/" . $newfilename.$i)){
      // 		$i++;
      // 	}
      // 	$newfilename = $newfilename.$i;
      // }

      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $newfilename);
      echo "Stored in: " . "upload/" . $newfilename;

    }


echo '
<form action="smooth.php" method="post"
enctype="multipart/form-data">

<input name="uploaded_name"  value="'. $newfilename.'"  style="display: none;"/>

<input type="submit" name="submit" value="smooth" />
</form>
';

echo '<img src="upload/'.$newfilename.'" style="width:150px;">';

?>

