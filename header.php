<?php
require_once("load.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit">
<link href="" rel="shortcut icon">
<title>DIPS</title>

<!-- core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- optinal theme-->
<!-- 	<link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>
<!-- core JS -->
<script src="js/bootstrap.min.js"></script>

<!-- kyshel's define-->
<link rel="stylesheet" href="css/dips.css">


</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="."> DIPS </a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<?php
				echo "<li ";
				if (php_self() == 'index.php'){
					echo 'class="active" '; 
				} 
				echo '><a href="index.php">Server Side</a></li>';

				echo "<li ";
				if (php_self() == 'pb.php'){
					echo 'class="active" '; 
				} 
				echo '><a href="pb.php">Client Side</a></li>';

				?>

			</ul>
			<ul class="nav navbar-nav navbar-right">
 				<?php
				echo "<li ";
				if (php_self() == 'about.php'){
					echo 'class="active" '; 
				} 
				echo '><a href="about.php">About</a></li>';

				?>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<!-- Begin page content -->
<div class="container">