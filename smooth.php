<?php
//var_dump($_POST);

if(isset($_POST["uploaded_name"])){

	$operate=$_POST["operate"];
	$uploaded_name=$_POST["uploaded_name"];
	
	$command = escapeshellcmd('./tt.py '.$operate.' '.$uploaded_name);
	$output = shell_exec($command);
	// echo $output;
	// echo '<br>reach<br>';

	$path_parts = pathinfo($uploaded_name);

	$file_name0=$path_parts['filename']; 
	$file_name1='.'.$path_parts['extension'];
	$effect='_'.$operate;
	$file_name_effect=$file_name0.$effect.$file_name1;
	//echo $file_name_effect;	
	echo '<p>Smoothed:</p>';
	echo '<img src="processed/'.$file_name_effect.'" style="width:300px;">';

}

// $path_parts = pathinfo('/www/htdocs/index.html');
// echo $path_parts['dirname'], "\n";
// echo $path_parts['basename'], "\n";
// echo $path_parts['extension'], "\n";
// echo $path_parts['filename'], "\n"; 




?>

