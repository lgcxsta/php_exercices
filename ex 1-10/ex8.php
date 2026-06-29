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

$sortYdec = $library;
$sortYcroi = $library;

//BONUS
$titleAlphb = $library;
$sortGenre = $library;

// année décroissant
usort($sortYdec, function($a, $b) {
    return $b['year'] - $a['year'];
});

//prix croissant
usort($sortYcroi, function($a, $b) {
    return $a['price'] - $b['price'];
});

////BONUS

//Titre - fonct PAS
usort($titleAlphb, function($a, $b) {
    return strcmp($a['title'], $b['title']);
});

// Genre
usort($sortGenre, function($a, $b) {
    return strcmp($a['genre'], $b['genre']);
});


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex8</title>
</head>

<body>
    <a href="../index.php">Index</a>
<p>
<p>
<p> 
<p>
    <b>Trier par année décroissant</b><br>
    <?php foreach ($sortYdec as $book) {
    echo $book['title'] . " - " . $book['year'] . "<br>";
}?>
</p>
<p>
    <b>Trier par par prix croissant</b><br>
    <?php foreach ($sortYcroi as $book) {
    echo $book['title'] . " - " . $book['price'] . "<br>";
}?>
<p>
    <b>Trier par titre</b><br>
<?php foreach ($titleAlphb as $book) {
    echo $book['title'] . "<br>";
} ?>

<p>
<b>Trier par genre</b><br>
<?php foreach ($sortGenre as $book) {
    echo $book['genre'] . " - " . $book['title'] . "<br>";
    }?>

</body>
<footer>
</footer>