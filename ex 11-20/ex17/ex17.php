<?php 
require_once 'db.php'; // inclusion du fichier de connexion
$requet = "SELECT * FROM books ORDER BY created_at DESC";
$stmt = $pdo->query($requet); // execute éa requête sql
$books = $stmt->fetchAll(); // recup les données en format de tableau associatif
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex17</title>
</head>
<body>
    <a href="../../index.php">Index</a>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Price</th>
            <th>In stock?</th>
            <th>Created at</th>
        </tr>

        <?php foreach($books as $book):?>
                <td><?php echo $book['id']; ?></td>
                <td><?php echo $book['title']; ?></td>
                <td><?php echo $book['author']; ?></td>
                <td><?php echo $book['year']; ?></td>
                <td><?php echo $book['genre']; ?></td>
                <td><?php echo $book['price']; ?></td>
                <td><?php echo $book['in_stock'] ? 'Yes' : 'No'; ?></td>
                <td><?php echo $book['created_at']; ?></td>
            </tr>
    <?php endforeach; ?>   
    </table>

</body>
</html>

<style>
body {
    margin: 40px;
}

table {
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
}

th {
    padding: 12px;
    text-align: left;
}

td {
    padding: 10px 12px;
    border-bottom: 1px solid #ddd;
}

td:last-child,
th:last-child {
    white-space: nowrap;
}
</style>