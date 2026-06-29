<?php
session_start();

$id = $_GET['id'];
$books = $_SESSION['library'];
foreach ($books as $book) {
    if ($book['ID'] == $id):
        echo 
        "ID: " .  $book['ID'] . "<br>"
        . "Title: " .  $book['title'] . "<br>"
        . "Author: " . $book['author'] . "<br>"
        . "Year: " . $book['year'] . "<br>"
        . "Genre: " . $book['genre'] . "<br>"
        . "Price: " . $book['price'] . "<br>"
        . "In stock? " . $book['in_stock'];
    endif;
    }
?>