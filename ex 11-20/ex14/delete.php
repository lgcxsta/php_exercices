<?php
session_start();

$id = $_GET['id'];
$books = $_SESSION['library'];
foreach ($books as $key => $book) {
    if ($book['ID'] == $id):
        unset($_SESSION['library'][$key]);
    endif;
    }
    header("Location: ex14.php");
    exit;
?>