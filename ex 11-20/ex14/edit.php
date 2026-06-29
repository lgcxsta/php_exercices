<?php
session_start();

$id = $_GET['id'];
$books = $_SESSION['library'];
foreach ($books as $key => $book) {
    if ($book['ID'] == $id):
        $bookEdit = $book;
        $keyEdit = $key;        
    endif;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<body>
    <form action="" method="POST">
        <b> Titre: </b> <input type="text" name="title" value="<?php echo $bookEdit['title']; ?>" required><br>
        <b> Auteur: </b> <input type="text" name="author" value="<?php echo $bookEdit['author']; ?>" required> <br>
        <b> Année: </b> <input type="number" name="year" value="<?php echo $bookEdit['year']; ?>" required><br>
        <b> Genre: </b> <input type="text" name="genre" value="<?php echo $bookEdit['genre']; ?>" required><br>
        <b> Prix: </b> <input type="number" name="price" value="<?php echo $bookEdit['price']; ?>" required ><br>
        <b> Stock: </b> 
            <input type="radio" name="radioBTN" value="Yes" <?php if($bookEdit['in_stock'] == 'Yes') { echo 'checked'; } ?> required> Yes  
            <input type="radio" name="radioBTN" value="No" <?php if($bookEdit['in_stock'] == 'No') { echo 'checked'; } ?> required> No<br>
        <input type="submit">
    </form>

</body>
<footer>
</footer>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['library'][$keyEdit]['title'] = $_POST['title'];
    $_SESSION['library'][$keyEdit]['author'] = $_POST['author'];
    $_SESSION['library'][$keyEdit]['year'] = $_POST['year'];
    $_SESSION['library'][$keyEdit]['genre'] = $_POST['genre'];
    $_SESSION['library'][$keyEdit]['price'] = $_POST['price'];
    $_SESSION['library'][$keyEdit]['in_stock'] = $_POST['radioBTN'];

    header("Location: ex14.php");
    exit;
    }
?>
