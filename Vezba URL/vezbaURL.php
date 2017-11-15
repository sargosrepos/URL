<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vezba URL</title>
</head>
<body>

<nav>
	<ul>
		<li>
			<a href="?option=Opcija1">Opcija1</a>
		</li>
		<li>
			<a href="?option=Opcija2">Opcija2</a>
		</li>
		<li>
			<a href="?option=Opcija3">Opcija3</a>
		</li>
	</ul>
</nav>


<?php

if (!empty($_GET) && array_key_exists('option', $_GET)) {

	switch ($_GET['option']) {
		case 'Opcija1':
			echo '<img src="https://vignette.wikia.nocookie.net/mrmen/images/5/52/Small.gif/revision/latest?cb=20100731114437" alt="">';
			break;
		case 'Opcija2':
			echo '<img src="https://vignette.wikia.nocookie.net/mrmen/images/5/52/Small.gif/revision/latest?cb=20100731114437" alt="">';
			break;
		case 'Opcija3':
			echo '<img src="https://vignette.wikia.nocookie.net/mrmen/images/5/52/Small.gif/revision/latest?cb=20100731114437" alt="">';
			break;
		default:
			echo '<p>Sorry bruh, your input is not valid.</p>';
	} 
}









 ?>


</body>
</html>