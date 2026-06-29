
<?php

$titre = "Crime et Châtiment";
$auteur = "Fiodor Dostoïevski";
$annee = 1866;
$prix = 49.99;
$stock = True;

$price = number_format(49.99, 1, ",", " ");
$textStock = $stock ? "Oui" : "Non";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex1</title>
</head>

<body>
    <a href="../index.php">Index</a>
<p>
<p> <b> Titre: </b> <?= $titre?> </p>
<p> <b> Auteur: </b> <?= $auteur?> </p>
<p> <b> Année: </b> <?= $annee?> </p>
<p> <b> Prix: </b> <?= $price?> </p>
<p><b> Stock: </b> <?php echo $stock ? "Oui" : "Non";
//2eme VERSION:
//   echo $textStock;

//3eme VERSION:
// if ($stock) {
//     echo "Oui";
// } else {
//     echo "Non";
// }?>
</p>

</body>
<footer>
</footer>





