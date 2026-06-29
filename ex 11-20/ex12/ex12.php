<?php
session_start();
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
    ]];

if (!isset($_SESSION["books"])) { // si la session est vide
    $_SESSION["books"] = $library;
}

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
<b> Genre: </b><select id="genre" name="genre" required>
                <option value="Philosophique">Philosophique</option>
                <option value="Roman">Roman</option>
                <option value="Aventure">Aventure</option>
</select><br>

<b> Prix: </b> <input type="number" name="price"required ><br>
<b> Stock: </b> <input type="radio" name="in_stock" value="Oui" required>Oui  <input type="radio" name="in_stock" value="Non" required> Non<br>
<input type="submit">
</form>
</p>

<?php foreach ($_SESSION["books"] as $book): ?>
            <p><b>Titre:</b> <?= $book['title'] ?></p>
            <p><b>Auteur:</b> <?= $book['author'] ?></p>
            <p><b>Année:</b> <?= $book['year'] ?></p>
            <p><b>Genre:</b> <?= $book['genre'] ?></p>
            <p><b>Prix:</b> <?= $book['price'] ?> CHF</p>
            <p><b>Stock:</b> <?= $book['in_stock'] ? "Oui" : "Non" ?></p>
            <hr>
<?php endforeach?>



</body>
<footer>
</footer>