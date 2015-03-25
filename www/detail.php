<?php
	$planetes = fopen('planete.json', 'r');
	$planetes = fread($planetes, filesize('planete.json'));
	$planetes = json_decode($planetes);

	$planetesName = [];
	foreach ($planetes as $key => $value) {
		array_push($planetesName, $key);
	}

	if(isset($_GET['id']) && in_array($_GET['id'], $planetesName)){
		$planete = $_GET['id'];
	}
	else{
		header('location:index.php');
	}

	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index - <?php echo $planete; ?></title>
	<link rel="stylesheet" href="css/desktop.css">
	<link rel="stylesheet" media="(max-width:960px)" href="css/mobile.css">
	<script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
	<script src="geoloc.js"></script>
</head>
<body id="detail">

<header>
	<h1><a href="index.php">Planetarium</a></h1>
	<div id="map"></div>
</header>
<nav>
	<ul>
		<?php
			$html ='';
			foreach ($planetesName as $key => $value) {

				$html.='<li><a href=detail.php?id="'.$value.'">'.$value.'</a></li>';
			}
			echo $html;
		?>
	</ul>
</nav>
<section>
	<?php

		$html = '<div>';
		$html .= '<h2>'.$planete.'</h2>';
		$html .= '<img src="img/'.$planetes->$planete->image.'"/>';
		$html .= '<ul>';
		$html .= '<li><span>Rayon :</span> '.$planetes->$planete->rayon.' Km</li>';
		$html .= '<li><span>Distance du soleil :</span> '.$planetes->$planete->distance.' UA</li>';
		$html .= '<li><span>Description :</span> <br/>'.$planetes->$planete->description.'</li>';
		$html .= '</ul>';
		$html .= '</div>';

		
		echo $html;

	?>

</section>
<footer><p>All right reserved Maxime Vaullerin Planétarium</p></footer>

	
</body>
</html>