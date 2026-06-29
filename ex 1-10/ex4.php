
<?php
$books = ["Crime et Châtiment", "L'étranger", "La peste", "Le mythe de Sisyphe", "Les carnets du sous-sol"];
$printUl = "";


foreach ($books as $book) {
    $printUl .= "<li>" . $book . "</li>";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex4</title>
</head>
<body>
    <a href="../index.php">Index</a>

<ul> <?= $printUl; ?> </ul>   


<ul> <?php foreach ($books as $i => $book): ?> 
    <li>
#<?= $i; ?> - <?= $book; ?>
<?php endforeach ?> 
</ul>   


</body>
<footer>
</footer>