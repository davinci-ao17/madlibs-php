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
		<main id="paniek">
			<h2>Er heerst paniek...</h2>
			<p>Er heerst paniek in het koninkrijk <?php echo $_POST["third"]; ?>. Koning <?php echo $_POST["six"]; ?> is ten einde raad en als koning<br><?php echo $_POST["six"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["second"]; ?>.</p>
			<p>"<?php echo $_POST["second"]; ?>! Het is een ramp Het is een schande!"</p>
			<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
			<p>"Mijn <?php echo $_POST["first"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["five"] ;?> voor hem gekocht!"</p>
			<p>"Majesteit, uw <?php echo $_POST["first"]; ?> komt vast vanzelf weer terug?"</p>
			<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["eight"]; ?> leren?"</p>
			<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["seven"]; ?> voor gebruiken."</p>
			<p>"<?php echo $_POST["second"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
			<p>"<?php echo $_POST["four"]; ?>, Sire".</p>
		</main>
		<footer>
			<h3>Deze website is gemaakt door Brandon</h3>
		</footer>
	</body>
</html>