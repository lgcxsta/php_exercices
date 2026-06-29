<?php
session_start();
?>
<?php
if (!isset($_SESSION['library'])) {
$_SESSION['library'] = $library = [
    [   
        "ID" => uniqid(),
        "title" => "Le Mythe de Sisyphe",
        "author" => "Albert Camus",
        "year" => 1942,
        "genre" => "Philosophique",
        "price" => 14,
        "in_stock" => "Yes"
    ],
    [   
        "ID" => uniqid(),
        "title" => "L'Étranger",
        "author" => "Albert Camus",
        "year" => 1942,
        "genre" => "Roman",
        "price" => 20,
        "in_stock" => "No"
    ],
    [
        "ID" => uniqid(),
        "title" => "L'Homme révolté",
        "author" => "Albert Camus",
        "year" => 1951,
        "genre" => "Philosophique",
        "price" => 18,
        "in_stock" => "Yes"
    ]];}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex14</title>
</head>

<body>
    <a href="../../index.php">Index</a>
    <br>
    <form action="" method="POST">
        <b> Titre: </b> <input type="text" name="title" required><br>
        <b> Auteur: </b> <input type="text" name="author" required> <br>
        <b> Année: </b> <input type="number" name="year" required><br>
        <b> Genre: </b> <input type="text" name="genre" required><br>
        <b> Prix: </b> <input type="number" name="price"required ><br>
        <b> Stock: </b> 
            <input type="radio" name="radioBTN" value="Yes" required> Yes  
            <input type="radio" name="radioBTN" value="No" required> No<br>
        <input type="submit">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nouveauLivre = [
        "ID" => uniqid(),
        "title" => $_POST['title'],
        "author" => $_POST['author'],
        "year" => $_POST['year'],
        "genre" => $_POST['genre'],
        "price" => $_POST['price'],
        "in_stock" => $_POST['radioBTN']
    ];
    
    $_SESSION['library'][] = $nouveauLivre;
    header("Location: ex14.php");
    exit;}
    ?>
    <br>

<?php foreach ($_SESSION['library'] as $key => $value){
    echo 
    "ID: " .  $value['ID'] . "<br>"
    . "Title: " .  $value['title'] . "<br>"
    . "Author: " . $value['author'] . "<br>"
    . "Year: " . $value['year'] . "<br>"
    . "Genre: " . $value['genre'] . "<br>"
    . "Price: " . $value['price'] . "<br>"
    . "In stock? " . $value['in_stock']
    . "<br>"
    . "<a href='book.php?id=" . $value['ID'] . "'><button type='button'>Voir</button></a>"
    . "<a href='edit.php?id=" . $value['ID'] . "'><button type='button'>Modifier</button></a>"
    . "<a href='delete.php?id=" . $value['ID'] . "'><button type='button'>Supprimer</button></a>"
    . "<br>" . "<br>" ;

}?>
</body>
<footer>
</footer>

