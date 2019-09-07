 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<link rel="stylesheet" type="text/css" href="stylesheet.css">
 	<meta charset="utf-8">
 	<meta name="description" content="practice">
 	<title>book.php</title>
 </head>
 <body style="background-color: lightgreen">
 	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL /*& ~E_NOTICE*/);

	require 'db.php';

	$size_db=count($db);
	//var_dump($size_db);
	echo "<br>Books from $db are:<br>";
	for($i=0;$i<$size_db;$i++){
		echo $tit = "Title: ".ucfirst(strtolower($db[$i][1]))."<br>";

		echo $ds = "Description: ".$db[$i][3]."<br>";

		echo $pr= "Price: ".number_format((float)$db[$i][5],2,",","")."<br>";

		$cod=str_split($db[$i][4]);
		//echo "<pre>".print_r($cod,true);
		$year=$cod[0].'0'.$cod[1].$cod[2];
		$month=$cod[3].$cod[4];
		echo "Date: $month-$year<br>";

		$code=(int)($cod[5].$cod[6].$cod[7]);
		echo "Code of book: $code<br>";
	}
	?> 	
</body>
</html> 