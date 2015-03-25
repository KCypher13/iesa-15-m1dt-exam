<?php
	$planetes = fopen('planete.json', 'r');
			$planetes = fread($planetes, filesize('planete.json'));
			$planetes = json_decode($planetes);

			$planetesName = [];
			foreach ($planetes as $key => $value) {
				array_push($planetesName, $key);
			}

	if($_POST){
		if(isset($_POST['planete'])){
			$planete = strtolower($_POST['planete']);
			if(in_array($planete, $planetesName)){
				header('location:detail.php?id='.$planete);
			}
			else{
				$error = 'Je ne connais pas cette planète';
			}

		}
		else{
			$error = "Merci d 'entrer le nom d'une planète";
		}
			
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index - Planetarium</title>
	<link rel="stylesheet" media="(min-width:960px)"href="css/desktop.css">
	<link rel="stylesheet" media="(max-width:960px)"href="css/mobile.css">
	<script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
	<script src="geoloc.js"></script>
</head>
<body>

<header>
	<h1>Planetarium</h1>
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

		$html = "";
		
		foreach ($planetes as $key => $value) {

			$html .= '<div>';
			$html .= '<h2>'.$key.'</h2>';
			$html .= '<img src="img/'.$value->image.'"/>';
			$html .= '<ul>';
			$html .= '<li>Rayon : '.$value->rayon.'</li>';
			$html .= '<li>Distance du soleil : '.$value->distance.'</li>';
			$html .= '<li>Description : '.substr($value->description, 0, 100).'</li>';
			$html .= '</ul>';
			$html .= '<a href=detail.php?id="'.$key.'">plus de details</a>';
			$html .= '</div>';

		}
		echo $html;

	?>

	<div>
		<h2>Rechercher une planete</h2>
		<?php
			if(isset($error)){
				echo '<p class="error">'.$error.'</p>';
			}
		?>
		<form action="index.php" method="post">
			<input type="text" name="planete" id="" placeholder="(ex : Terre)">
			<input type="submit" value="rechercher">
		</form>
	</div>

</section>
<footer><p>All right reserved Maxime Vaullerin Planétarium</p></footer>

	
</body>
</html>