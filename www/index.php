<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index - Planetarium</title>
	<link rel="stylesheet" media="min-width=960px"href="css/desktop.css">
	<link rel="stylesheet" media="max-width=960px"href="css/mobile.css">
</head>
<body>

<header>
	<h1>Planetarium</h1>
</header>
<nav></nav>
<section>
	<?php

		$planetes = fopen('planete.json', 'r');
		$planetes = fread($planetes, filesize('planete.json'));
		$planetes = json_decode($planetes);
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


</section>
<footer></footer>

	
</body>
</html>