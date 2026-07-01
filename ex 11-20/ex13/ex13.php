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
    ]];

$livres_afficher = $library;

if (!empty($_GET['q'])){
    $q = $_GET['q'];
    $resultats_recherche = [];

    foreach($livres_afficher as $book_aff) {
        $trouve_titre = stripos($book_aff['title'], $q);
        $trouve_author = stripos($book_aff['author'], $q);

        if ($trouve_titre !== false || $trouve_author !== false ) {
            $resultats_recherche[] = $book_aff; 
        }
    }
    $livres_afficher = $resultats_recherche;
};

if (!empty($_GET['genre'])){
    $resultats_genre = [];

    foreach($livres_afficher as $book_aff) {
        if ($book_aff['genre'] === $_GET['genre']){
            $resultats_genre[] = $book_aff; 
            $livres_afficher = $resultats_genre;
        };
    };
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex13</title>
</head>

<body>
    <a href="../index.php">Index</a>
    <br>
<form action="" method="GET"> 
<label for="site-search">Rechercher sur le site: </label><br>
<select name="genre">
    <option value="">Tout</option>    
    <option value="Philosophique">Philosophique</option>    
    <option value="Roman">Roman</option>    
</select><br>
<input type="search" id="site-search" name="q" /><br>
<button  type="submit">Rechercher</button>
</form>

    <?php foreach($livres_afficher as $book): ?>
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