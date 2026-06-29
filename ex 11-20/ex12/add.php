<?php
session_start();

$titre = htmlspecialchars($_POST["titre"]);
$auteur = htmlspecialchars($_POST["auteur"]);
$year = htmlspecialchars($_POST["year"]);
$genre = htmlspecialchars($_POST["genre"]);
$price = htmlspecialchars($_POST["price"]);
$in_stock = htmlspecialchars($_POST["in_stock"]);


$newbook = [
        "title" => $titre,
        "author" => $auteur,
        "year" => $year,
        "genre" => $genre,
        "price" => $price,
        "in_stock" => $stock_booleen,
    ];

    if ($stock_booleen){($radioBTN === "Oui") ? true : false;};
    $_SESSION["books"][] = $newbook;
    header("Location: ex12.php");
    exit;
?>
