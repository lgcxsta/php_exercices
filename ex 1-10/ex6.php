<style>
    th, td {
        border: 1px solid black;
        width: 120px;
        padding: 10px;
    }
    table {
        text-align: center;
    }

    .outOfStock {
        background-color: #ffe3e3;
    }
</style>
<?php

$textTable = "";

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

$class = "";

function test($library, $textTable){
    foreach ($library as $book) {
        $class = $book['in_stock'] ? "" : "class='outOfStock'";
        $textTable .= "<tr $class>";
        $textTable .= "<td>" . $book['title'] . "</td>";
        $textTable .= "<td>" . $book['author'] . "</td>";
        $textTable .= "<td>" . $book['year'] . "</td>";
        $textTable .= "<td>" . $book['genre'] . "</td>";
        $textTable .= "<td>" . $book['price'] . "</td>";
        $textTable .= "<td>" . ($book['in_stock'] ? "Yes" : "No") . "</td>";
        $textTable .= "</tr>";
    }
    return $textTable;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex6</title>
</head>
<body>
    <a href="../index.php">Index</a>

<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Year</th>
        <th>Genre</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>

    <?php echo test($library, $textTable) ?>
</table>
</body>

<footer>
</footer>