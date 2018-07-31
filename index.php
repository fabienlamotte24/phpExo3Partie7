<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Exercice 3</title>
  </head>
  <body>
    <!--Création d'un formulaire simple avec get en méthode
  //Condition pour gérer le cas où le formulaire n'est pas bien rempli
//On accède à la requète lorsque toutes les conditions sont remplies => On passe à la page suivante
//Ou on reste sur la page du formulaire avec les messages d'erreur pour que l'utilisateur renseigne les bons caractères-->
<form class="form" action="user.php" method="get">
 <!--Création d'un formulaire simple avec get en méthode-->
  <label for="lastName">Votre nom: </label><input type="text" name="lastName" maxlength="15" size="10" placeholder="nom" /><br><br>
  <label for="firstName">Votre prénom: </label><input type="text" name="firstName" maxlength="10" size="10" placeholder="prénom" /><br><br>
  <input type="submit" name="submit" />
</form>
  </body>
</html>
