<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<meta charset="utf-8">
	<meta name="description" content="practice">
	<title>functions.php</title>
</head>
<body>
<?php
//Barthélemy Aneau's Picta poesis, Lyons, Macé Bonhomme, 1552


function getSlug($title="Barthélemy Aneau's Picta poesis, Lyons, Macé Bonhomme, 1552"){
	echo '<pre>';
	$title   = strtolower($title);
	$allowed = str_split('abcdefghijklmnopqrstuvwxyz0123456789-+_', 1);
	//print_r($allowed);
	$length = strlen($title);
	$slug='';
	for($i=0;$i<$length;$i++){
		$exist = false;
		foreach($allowed as $value){
			if($title[$i] == $value){
				$exist = true;
			}
		}
		if($exist == true){
			$slug .= $title[$i];
		} else {
			$slug .= '-';
		}		
	}
	$slug = str_replace(array('----','---','--'),'-',$slug);//incepe de la cele mai mari spre cele mai mici
	$slug=ucfirst(strtolower($slug));
	return $slug;
}

//---------------------------------------------------------------------------

function book_from_2018($book,$cod){
	$first3=substr($cod,0,3);
	if($first3=='218'){
		$title = ucfirst(strtolower($book));//????
		return $title;
	}	
}

//---------------------------------------------------------------------------

function book(){	
	if(isset($_GET['slug'])) 
		$slug = $_GET['slug'];
	else 
		$slug = "";
	return $slug;	
}

//---------------------------------------------------------------------------

function books_from_2018(){
	require 'db.php';
	$length=count($db);
	for($i=0;$i<$length;$i++){
		$first3=substr($db[$i][4],0,3);
		if($first3=='218'){
			for($j=0;$j<6;$j++)
				echo $db[$i][$j]."<br>";
			echo "<br>";
		}	
	}	
}
books_from_2018();
//o functie care sa returneze toate cartile din anul 2018 (anul din cod)

//---------------------------------------------------------------------------
echo "<hr><br>";
function booksl($slug){	
	require 'db.php';
	for($i=0;$i<count($db);$i++)
	if($db[$i][2]==$slug){
		for($j=0;$j<6;$j++)
			echo $db[$i][$j]."<br>";
	}
}
$slug=getSlug();
//echo $slug;
//booksl($slug);

//$url=$_SERVER['REQUEST_URI'];
//var_dump($url);
//$url_arr = explode('/',$url);

//o functie care sa returneze cartea (toate datele ei) care are slugul din url
//in URL of the page where is called the function  //?slug=Barth-lemy-aneau-s-picta-poesis-lyons-mac-bonhomme-1552

//---------------------------------------------------------------------------

//o functie care sa adauge la un text toate tagurile html care nu au fost inchise (de ex: </a></p>...)
?>
</body>
</html> 