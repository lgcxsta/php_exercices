
<?php

$library = [
    [
        "title" => "Le Mythe de Sisyphe",
        "author" => "Albert Camus",
        "year" => 1942,
        "genre" => "Philosophique",
        "price" => 14,
        "in_stock" => true
    ],
    [
        "title" => "L'Étranger",
        "author" => "Albert Camus",
        "year" => 1942,
        "genre" => "Roman",
        "price" => 20,
        "in_stock" => false
    ],
    [
        "title" => "L'Homme révolté",
        "author" => "Albert Camus",
        "year" => 1951,
        "genre" => "Philosophique",
        "price" => 18,
        "in_stock" => true
    ],
    [
        "title" => "La Peste",
        "author" => "Albert Camus",
        "year" => 1947,
        "genre" => "Roman",
        "price" => 22,
        "in_stock" => true
    ],
    [
        "title" => "La Chute",
        "author" => "Albert Camus",
        "year" => 1956,
        "genre" => "Roman",
        "price" => 17,
        "in_stock" => true
    ],
    [
        "title" => "Carnets du sous-sol",
        "author" => "Fyodor Dostoevsky",
        "year" => 1864,
        "genre" => "Roman philosophique",
        "price" => 19,
        "in_stock" => false
    ],];

function printBook($library) {
    echo "<p><b>Titre :</b> " . (isset($library["title"]) ? $library["title"] : "Information manquante") . "</p>";
    echo "<p><b>Auteur :</b> " . (isset($library["author"]) ? $library["author"] : "Information manquante") . "</p>";
    echo "<p><b>Année :</b> " . (isset($library["year"]) ? $library["year"] : "Information manquante") . "</p>";
    echo "<p><b>Genre :</b> " . (isset($library["genre"]) ? $library["genre"] : "Information manquante") . "</p>";
    echo "<p><b>Prix :</b> " . (isset($library["price"]) ? $library["price"] . "€" : "Information manquante") . "</p>";
    echo "<p><b>En stock :</b> " . (isset($library["in_stock"]) ? ($library["in_stock"] ? "Oui" : "Non") : "Information manquante") . "</p>";
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex5</title>
</head>
<body>
    <a href="../index.php">Index</a>
<p><b>Book 1</b></p>
    <?php  printBook($library[0]); ?>
<br>

<p><b>Book 2</b></p>
    <?php  printBook($library[1]); ?>
<br>

<p><b>Book 3</b></p>
    <?php  printBook($library[2]); ?>
<br>

</body>
<footer>
</footer>