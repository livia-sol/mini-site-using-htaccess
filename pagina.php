<!DOCTYPE html>
<html lang="en">
<head>
	<title>pagina.php</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="practice">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div class="header">
		<h2>Books descriptions</h2>
	</div>
	<nav>
		<a href="index.html">Home</a>
		<a href="pagina.php">News</a>
		<a href="pagina.html">Pagina</a>
		<a href="book/Barth-lemy-aneau-s-picta-poesis-lyons-mac-bonhomme-1552.html">Book</a>

		<a href="descriere_tema.html" target="_blank">Description</a>
	</nav>
	<div>
		<?php
		require "db.php";
		//echo "<pre>".print_r($db,true);
			for($i=0;$i<sizeof($db);$i++){?>
				<div class="box">
					<?php echo "<u>".($i+1)."</u>. ".$db[$i][3]; ?>
				</div>
			<?php
			}
		?>
	</div>
	<!--<div class="footer">
		<p>Down section</p>
	</div>-->
</body>
</html>			