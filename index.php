
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<meta charset="utf-8">
	<meta name="description" content="practice">
	<title>index.php</title>
</head>
<body style="background-color: lightgreen">
	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	require 'db.php'; //preia db.php
	require 'functions.php';
	//$title = "Barthélemy Aneau's Picta poesis, Lyons, Macé Bonhomme, 1552";
	$title = $db[5][1];
	echo $title."<br>";

	echo "The slug is: ".$a = getSlug($title)."<br>";

	echo "<br><hr><br>";
	$arr = booksl($a);
	var_dump($arr);
	// echo "<pre>".print_r($arr,true);

	//require 'stylesheet.css'; 
	echo "<br><hr><br>";
	echo '<b>$db is: </b><br><br>';

	echo "<pre>".print_r($db,true); //afiseaza echo si nu print

	// echo "<hr><br>";
	// echo $db[0][4];
	// echo "<hr><br>";

	//echo "<br><br>";
	//$url=substr($_SERVER['REQUEST_URI'],10,-5); //prelucr
	//var_dump($url);

	//requiure 'home.php';

	// echo "<br><hr><br>";
	// echo 'The split with function explode() of "book/the-php" is: <br>';

	// $url = "book/the-php";
	// $url = explode('/',$url);

	// //var_dump($url);
	// echo "<pre>".print_r($url,true);

	// echo "<br><hr><br>";
	// echo 'The split with function str_split() of "abc" is: <br><br>';

	// print_r(str_split("abc",1));

	// echo "<br><hr><br>";
	// echo 'The $url[0] is:'.$url[0].'.<br>';
	// echo 'So $url[0] require:';

	// echo "<br><hr>";
	// switch ($url[0]) {
	// 	case 'book':{
	// 		echo "Page /book.php<br>";
	// 		require 'book.php';
	// 	}
	// 	break;
	// 	case 'index':{
	// 		echo "Page /home.php<br>";
	// 		require 'home.php';
	// 	}
	// 	break;	
	// 	default:{
	// 		echo "Page /default.php<br>";
	// 		require "default.php";
	// 	}		
	// 	break;
	// }
	?>
</body>
</html> 

