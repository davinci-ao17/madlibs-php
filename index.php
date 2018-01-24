<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>MadLibs-PHP</title>
	</head>
	<body>
		<header>
			<h1>Mad Libs</h1>
		</header>
		<nav>
			<h3><a href="index.php">Er heerst paniek...</a></h3>
			<h3><a href="onkunde.php">Onkunde</a></h3>
		</nav>
		<main>
			<h2>Er heerst paniek...</h2>
			<form action="paniek_index.php" method="post">
				Welk dier zou je nooit als huisdier willen<br>hebben?<input name="first" type="text">
				Wie is de belangrijkste persoon in je leven?<input name="second" type="text">
				In welk land zou je graag willen wonen?<input name="third" type="text">
				Wat doe je als je je verveelt?<input name="four" type="text">
				Met welk speelgoed speelde je als kind het<br>meest?<input name="five" type="text">
				Bij welke docent spijbel je het liefst?<input name="six" type="text">
				Als je €100.000,- had, wat zou je dan kopen?<input name="seven" type="text">
				Wat is je favoriete bezigheid?<input name="eight" type="text">
				<br>
				<input id="submit" type="submit">
			</form>
		</main>
		<footer>
			<h3>Deze website is gemaakt door Brandon</h3>
		</footer>
	</body>
</html>