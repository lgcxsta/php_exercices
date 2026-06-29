
<?php
$title = "Crime et Châtiment";
$author = "Fiodor Dostoïevski";
$year = 2006;
$stock = True;
$currency = "CHF";
$price = 3.99;

function formatPrice(float $price): string {
    $priceFormat = number_format($price, 1, ",", " ");
return $priceFormat;
};

function formatStock(bool $stock): string{
if ($stock == True) {
    return "in stock";
}
else {
    return "out of stock";
}
};

function getBookLabel(int $year, float $price): string{

    if ($price <= 10) {
            $priceText = "cheap.";
        }
    elseif ($price > 10 && $price <= 25){
            $priceText = "standard.";
        }
    else {
            $priceText = "premium.";
        };


    if ($year <= 1980) {
            $yearType = "classic";
            return $yearType . " and " . $priceText;
        }
    elseif ($year <= 2010){
            $yearType = "modern";
            return $yearType . " and " . $priceText;
        }
    else {
            $yearType = "recent";
            return $yearType . " and " . $priceText;
        };
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex3</title>
</head>
<body>
    <a href="../index.php">Index</a>
    <p><?= "The price is of " . formatPrice($price) . $currency ?> </p>
    <p><?= "The book is " . formatStock($stock) ?> </p>
    <p><?= "The book is " . getBookLabel($year, $price) ?> </p>
</body>
<footer>
</footer>





