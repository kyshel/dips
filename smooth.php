<p>
<a href="index.php">step1_choosefile</a>
>
step2_operate
>
<strong style="color: orange">step3_done</strong>
</p>


<?php
if(isset($_POST["uploaded_name"])){

	$uploaded_name=$_POST["uploaded_name"];


	$command = escapeshellcmd('./t.py '.$uploaded_name);
	$output = shell_exec($command);
	// echo $output;
	// echo '<br>reach<br>';

	$path_parts = pathinfo($uploaded_name);

	$file_name0=$path_parts['filename']; 
	$file_name1='.'.$path_parts['extension'];
	$effect='_smoothed';
	$file_name_effect=$file_name0.$effect.$file_name1;
	echo $file_name_effect;	
	echo '<p>Below is preview, You can  ';
	echo '<a href="processed/'.$file_name_effect.'">Download Here</a></p>';
	echo '<img src="processed/'.$file_name_effect.'" style="width:300px;">';

}

// $path_parts = pathinfo('/www/htdocs/index.html');
// echo $path_parts['dirname'], "\n";
// echo $path_parts['basename'], "\n";
// echo $path_parts['extension'], "\n";
// echo $path_parts['filename'], "\n"; 




?>

