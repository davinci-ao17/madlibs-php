<?php
if (isset($_POST['submited'])) {
  $can = $_POST['can'];
  $person = $_POST['person'];
  $number = $_POST['number'];
  $got = $_POST['got'];
  $best = $_POST['best'];
  $worst = $_POST['worst'];
  $overcome = $_POST['overcome'];
  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>submit2</title>
      <link rel="stylesheet" href="css/onkunde.css">
    </head>
    <body>
      <h1>Onkunde</h1>
      <div class="mad">
      <p>Er zijn veel mensen die niet kunnen <?php echo $can; ?>. Neem nou <?php echo $person; ?>. Zelfs met de hulp van een <?php echo $got; ?> of zelfs <?php echo $number; ?> kan <?php echo $person; ?> niet <?php echo $can; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $best; ?>, maar met een te veel aan <?php echo $worst; ?>. Te veel
        <?php echo $worst; ?> leidt tot <?php echo $overcome; ?> en dat is niet goed als je wilt <?php echo $can; ?>. Helaas voor <?php echo $person ?>. </p>
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
    <title>onkunde</title>
    <link rel="stylesheet" href="css/onkunde.css">
  </head>
  <body>
    <h1>Onkunde</h1>
    <div class="mad">
    <a href="madlips.php">Er heerst paniek</a>
    <a href="onkunde.php">onkunde</a>
    <form action="onkunde.php" method="post">
      <p>Wat zou je graag willen kunnen?
      <input type="text" name="can"></p>
      <p>Met welke persoon kun je goed opschieten?
      <input type="text" name="person"></p>
      <p>Wat is je favoriete getal?
      <input type="text" name="number"></p>
      <p>Wat heb je altijd bij je als je op vakantie ga?
      <input type="text" name="got"></p>
      <p>Wat is je beste persoonlijke eigenschap?
      <input type="text" name="best"></p>
      <p>Wat is je slechtste persoonlijke eigenschap?
      <input type="text" name="worst"></p>
      <p>Wat is het ergste dat je kan overkomen?
      <input type="text" name="overcome"></p>
      <button name="submited" type="submited">Verstuur</button>
    </form>
  </div>
  </body>
</html>

<?php
}
?>
