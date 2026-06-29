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
    ],
    ["title" => "C", "author" => "Albert Camus", "year" => "1490", "genre" => "Philosophique", "price" => -5, "in_stock" => False], // Modifié pour tester les erreurs (titre court, année < 1500, prix négatif)
];

function validateBook(array $book): array {
    $erreurs = [];
    
    // 1. Titre
    if (strlen($book["title"]) < 2){
        $erreurs[] = "Le titre doit avoir au moins 2 caractères.";
    }

    // 2. Année
    if ($book["year"] < 1500 || $book["year"] > 2026){
        $erreurs[] = "L'année doit être entre 1500 et 2026.";
    }

    // 3. Prix
    if ($book["price"] < 0){
        $erreurs[] = "Le prix ne peut pas être négatif.";
    }
    
    // BONUS - refuser les genres non autorisés (liste blanche)
    $genresAutorises = ["Philosophique", "Roman", "Novel"]; // Liste blanche
    if (!in_array($book["genre"], $genresAutorises)) {
        $erreurs[] = "Le genre '{$book["genre"]}' n'est pas autorisé.";
    }

    // On retourne le tableau d'erreurs
    return $erreurs;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ex9 - Validation</title>
</head>
<body>
    <a href="../index.php">Index</a>
    <h1>Validation de la bibliothèque</h1>
<hr>
    <?php foreach ($library as $book): ?>
        <?php 
            // On récupère les erreurs pour le livre actuel
            $erreursLivre = validateBook($book); 
        ?>
        
        <div style="margin-bottom: 5%; margin-top: 5%">
            <p><b>Titre:</b> <?= $book['title'] ?></p>
            <p><b>Auteur:</b> <?= $book['author'] ?></p>
            <p><b>Année:</b> <?= $book['year'] ?></p>
            <p><b>Genre:</b> <?= $book['genre'] ?></p>
            <p><b>Prix:</b> <?= $book['price'] ?> CHF</p>
            <p><b>Stock:</b> <?= $book['in_stock'] ? "Oui" : "Non" ?></p>

            <?php if (!empty($erreursLivre)): ?>
                <div style="color: red;">
                    <b>Erreurs :</b>
                    <ul>
                        <?php foreach ($erreursLivre as $erreur): ?>
                            <li><?= $erreur ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php else: ?>
                <p style="color: green;"><b>Livre valide !</b></p>
            <?php endif; ?>
        </div>
        <hr>
    <?php endforeach; ?>

</body>
</html>