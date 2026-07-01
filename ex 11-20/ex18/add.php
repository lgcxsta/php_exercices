<?php 
require_once 'db.php'; // inclusion du fichier de connexion
?>

<?php
$titre = htmlspecialchars($_POST["titre"]);
$auteur = htmlspecialchars($_POST["auteur"]);
$year = htmlspecialchars($_POST["year"]);
$genre = htmlspecialchars($_POST["genre"]);
$price = htmlspecialchars($_POST["price"]);
$in_stock = htmlspecialchars($_POST["in_stock"]);

if ($_POST["in_stock"] === "Oui"){
    $stock_boolean = 1;
} else {
    $stock_boolean = 0;
}


$newbook = [
        "title" => $titre,
        "author" => $auteur,
        "year" => $year,
        "genre" => $genre,
        "price" => $price,
        "in_stock" => $stock_boolean,
    ];

$requetADD = "INSERT INTO books (title, author, year, genre, price, in_stock) VALUES (:title, :author, :year, :genre, :price, :in_stock)";
$stmt = $pdo->prepare($requetADD); //prépare la requête
$stmt->execute($newbook); //exécute la requete en lui donnant le tableau

header("Location: ex18.php");
exit;
?>
