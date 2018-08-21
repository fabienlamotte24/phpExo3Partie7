<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 3</title>
</head>
<body>
  <p><!--Utilisation d'une condition avec ISSET pour vérifier l'existence des données enregistrée par la page précédentes
    Puis affichage de la phrase avec les données voulues-->
    <?php
      if(isset($_GET['lastName']) && isset($_GET['firstName'])){
        echo 'Mon prénom est <b>' . $_GET['firstName'] . '</b> et mon nom de famille <b> ' . $_GET['lastName'] . '</b>';
      }
    ?>
  </p>
</body>
</html>
