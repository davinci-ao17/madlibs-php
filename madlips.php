<?php
if (isset($_POST['submit'])) {
  $animal = $_POST['animal'];
  $person = $_POST['person'];
  $place = $_POST['place'];
  $bored = $_POST['bored'];
  $toy = $_POST['toy'];
  $teach = $_POST['teach'];
  $money = $_POST['money'];
  $act = $_POST['act'];
  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>submit</title>
      <link rel="stylesheet" href="css/onkunde.css">
    </head>
    <body>
      <h1>Er heerst paniek</h1>
      <div class="mad">
      <p>Er heerst paniek in het koningrijk <?php echo $place; ?>. Koning <?php echo $teach; ?> is ten einde raad en als koning <?php echo $teach; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $person; ?>.</p>
      <p>"<?php echo $person; ?>! Het is een ramp! Het is een schande!"</p>
      <p>"Sire, majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
      <p>"Mijn <?php echo $animal; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $toy; ?> voor hem gekocht!"</p>
      <p>"Majesteit, uw <?php echo $animal; ?> komt vast vanzelf weer terug?"</p>
      <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $act; ?> leren?"</p>
      <p>"Maar Sire, daar kunt u toch uw <?php echo $money; ?> voor gebruiken"</p>
      <p>"<?php echo $person; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
      <p>"<?php echo $bored; ?>, Sire."</p>
    </div>
    </body>
  </html>
  <?php
}else {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Er heerst paniek</title>
    <link rel="stylesheet" href="css/onkunde.css">
  </head>
  <body>
    <h1>Er heerst paniek</h1>
    <div class="mad">
    <a href="madlips.php">Er heerst paniek</a>
    <a href="onkunde.php">onkunde</a>
    <form action="madlips.php" method="post">
      <p>Welk dier zou je nooit als huisdier willen hebben?
      <input type="text" name="animal"></p>
      <p>Wie is de belangrijkste persoon in je leven?
      <input type="text" name="person"></p>
      <p>In welk land zou je graag willen wonen?
      <input type="text" name="place"></p>
      <p>Wat doe je als je je verveeld?
      <input type="text" name="bored"></p>
      <p>Met welk speelgoed speelde je als kind het meest?
      <input type="text" name="toy"></p>
      <p>Bij welke docent spijbel je het liefst?
      <input type="text" name="teach"></p>
      <p>Als je € 100.00,- had, wat zou je dan kopen?
      <input type="text" name="money"></p>
      <p>Wat is je favoriete bezigheid?
      <input type="text" name="act"></p>
      <button name="submit" type="submit">Verstuur</button>
    </form>
  </div>
  </body>
</html>

<?php
}
?>
