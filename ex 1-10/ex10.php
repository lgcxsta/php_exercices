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
    ]];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ex10 -  Lecture/écriture fichiers (JSON) </title>
</head>
<body>
    <a href="../index.php">Index</a>
    <h1>Validation de la bibliothèque</h1>
    <hr>

    <?php
$file = "library.json";
if (!file_exists($file)) {
    // Sauvegarde du tableau dans le fichier JSON
    file_put_contents($file, json_encode($library, JSON_PRETTY_PRINT));
    echo "<script>alert('Fichier libray.json créé.')</script>";
}
$jsonContent = file_get_contents($file);// Lecture du fichier
$library = json_decode($jsonContent, true); // Reconstruction du tableau PHP
?>

<?php foreach ($library as $book): ?>
            <p><b>Titre:</b> <?= $book['title'] ?></p>
            <p><b>Auteur:</b> <?= $book['author'] ?></p>
            <p><b>Année:</b> <?= $book['year'] ?></p>
            <p><b>Genre:</b> <?= $book['genre'] ?></p>
            <p><b>Prix:</b> <?= $book['price'] ?> CHF</p>
            <p><b>Stock:</b> <?= $book['in_stock'] ? "Oui" : "Non" ?></p>
            <hr>
<?php endforeach; ?>
</body>
</html>