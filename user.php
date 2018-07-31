<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
<?php
if(isset($_GET['lastName']) && isset($_GET['firstName'])){
  echo $_GET['lastName'] . ' ' . $_GET['firstName'];
}
?>
    </p>
  </body>
</html>
