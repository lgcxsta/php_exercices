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

$genreSelec = "Philosophique";
$nb = 0;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ex7</title>
</head>

<body>

<a href="../index.php">Index</a>

<ul>
<?php foreach ($library as $book): ?>

    <?php if ($book["in_stock"] === true && $book["genre"] === $genreSelec): ?>
        <li>
            <?= $book["title"]; ?> - <?= $book["year"]; ?>
        </li>
        <?php $nb++; ?>
    <?php endif; ?>

<?php endforeach; ?>
</ul>

<p>Total de livres en stock (<?= $genreSelec; ?>) : <?= $nb; ?></p>

</body>
</html>