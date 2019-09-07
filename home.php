 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<link rel="stylesheet" type="text/css" href="stylesheet.css">
 	<meta charset="utf-8">
 	<meta name="description" content="practice">
 	<title>home.php</title>
 </head>
 <body style="background-color: lightgreen">
 	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	require 'db.php'; //preia db.php
	require 'functions.php';
	$title = "Barthélemy Aneau's Picta poesis, Lyons, Macé Bonhomme, 1552";
	//$title = $db[5][1];
	//echo $title."<br>";
	//echo $a = getSlug($title);

	//require 'stylesheet.css'; 
	//echo "<hr><br>";
	// echo '$db is: <br>';

	//echo "<pre>".print_r($db,true); //afiseaza echo si nu print
	//echo "<br><hr><br>";

	//-----------------------------------------------------------------------
	
	$size_db=count($db);
	echo $size_db;
	echo "<br>Books from 2018 are:<br>";
	for($i=0;$i<$size_db;$i++){
		$book = book_from_2018($db[$i][1],$db[$i][4]);
		echo $book."<br>";
	}
	//-----------------------------------------------------------------------

	echo "<hr><br>";
	$short_title = substr($title,0,30)."...";
	Echo "The title with 30 characters is : '$short_title'<br>";
	//-----------------------------------------------------------------------

	echo "<br><hr><br>";
	$slug = book();
	for($i=0;$i<$size_db;$i++){
		if($db[$i][2]==$slug)
			for($j=0;$j<=5;$j++)
				if($j==0) echo "Id: ".$db[$i][$j]."<br>";
			elseif($j==1) echo "Title: ".$db[$i][$j]."<br>";
			elseif($j==2) echo "Slug: ".$db[$i][$j]."<br>";
			elseif($j==3){
				//$des=strtolower(strip_tags($db[$i][$j]));
				$pos=strpos($db[$i][$j],'[read_more]');
				if($pos==''){
					$description=substr($db[$i][$j],0,70);
					echo "Description: ".strip_tags($description)."[...]<br>";
				} else {
					$description=substr($db[$i][$j],0,$pos-1);
					echo "Description: ".$description."<br>";
				}
			} 
			elseif($j==4) echo "Cod: ".$db[$i][$j]."<br>";
			elseif($j==5) {
				$nr=(float)$db[$i][$j];
				echo "Price: ".number_format($nr,2,",","")."<br>";
			}
	}
	?>
</body>
</html> 