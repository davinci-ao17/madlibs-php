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
		<main id="onkunde_index">
			<h2>Onkunde</h2>
			<form action="onkunde_index.php" method="post">
				Wat zou je graag willen kunnen?<input name="first" type="text">
				Met welke persoon kun je goed opschieten?<input name="second" type="text">
				Wat is je favoriete getal?<input name="third" type="text">
				Wat heb je altijd bij je als je op vakantie gaat?<input name="four" type="text">
				Wat is je beste persoonlijke eigenschap?<input name="five" type="text">
				Wat is je slechtste persoonlijke eigenschap?<input name="six" type="text">
				Wat is het ergste dat je kan overkomen?<input name="seven" type="text">
				<br>
				<input id="submit" type="submit">
			</form>
		</main>
		<footer>
			<h3>Deze website is gemaakt door Brandon</h3>
		</footer>
	</body>
</html>