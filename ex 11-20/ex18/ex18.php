<?php 
require_once 'db.php'; // inclusion du fichier de connexion
$requet = "SELECT * FROM books ORDER BY created_at DESC";
$stmt = $pdo->query($requet); // execute éa requête sql
$books = $stmt->fetchAll(); // recup les données en format de tableau associatif
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex18</title>
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
                <option value="ScienceFiction">Science-Fiction</option>
                <option value="Fantastique">Fantastique</option>
</select><br>

<b> Prix: </b> <input type="number" name="price"required ><br>
<b> Stock: </b> <input type="radio" name="in_stock" value="Oui" required>Oui  <input type="radio" name="in_stock" value="Non" required> Non<br>
<input type="submit">
</form>
</p>

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
            <tr>
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
<footer>
</footer>
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
}</style>