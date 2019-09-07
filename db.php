<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<meta charset="utf-8">
	<meta name="description" content="practice">
	<title>db.php</title>
</head>
<body>
<?php
$handle = fopen('db.csv', "r");

// read the 1st row as headings
$header = fgetcsv($handle, 2500, ",");
$db = array();	    
while (($data = fgetcsv($handle, 2500, ",")) !== FALSE) {
	$db[] = $data;
}
?>
</body>
</html> 