<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex11</title>
</head>

<body>
    <a href="../../index.php">Index</a>
<p>
    <form action="add.php" method="POST">
<b> Titre: </b> <input type="text" name="titre" required><br>
<b> Auteur: </b> <input type="text" name="auteur" required> <br>
<b> Année: </b> <input type="number" name="year" required><br>
<b> Prix: </b> <input type="number" name="price"required ><br>
<b> Stock: </b> <input type="radio" name="radioBTN" value="Oui" required>Oui  <input type="radio" name="radioBTN" value="Non" required> Non<br>
<input type="submit">
</form>
</p>

</body>
<footer>
</footer>