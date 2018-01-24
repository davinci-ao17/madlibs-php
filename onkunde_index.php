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
		<main id="onkunde">
			<h2>Onkunde</h2>
			<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["first"]; ?>. Neem nou <?php echo $_POST["second"]; ?>. Zelfs met de hulp van een <?php echo $_POST["four"]; ?> of zelfs <?php echo $_POST["third"]; ?> kan <?php echo $_POST["second"]; ?> niet <?php echo $_POST["first"]; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST["five"]; ?>, maar met een teveel aan <?php echo $_POST["six"]; ?>. Te veel <?php echo $_POST["six"]; ?> leidt tot <?php echo $_POST["seven"]; ?> en dat is niet goed als je wilt <?php echo $_POST["first"]; ?>. Helaas voor <?php echo $_POST["second"]; ?>.</p>
		</main>
		<footer>
			<h3>Deze website is gemaakt door Brandon</h3>
		</footer>
	</body>
</html>