
<?php

$year = 1981;
$price = 25;
$yearType = "";
$stock = True;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ex2</title>
</head>
<body>
    <a href="../index.php">Index</a>

    <?php 
    if ($year <= 1980) {
            $yearType = "Classique";
        }
    elseif ($year <= 2010){
            $yearType = "Moderne";
        }
    else {
            $yearType = "Récent";
        };


        
    if ($price <= 10) {
            $priceText = "Bon marché";
        }
    elseif ($price > 10 && $price <= 25){
            $priceText = "Standard";
        }
    else {
            $priceText = "Premium";
        };


        $promotion = ($stock && $price < 12);
//     if ($stock && $price < 12){
// $promotion = "En promo";
//     }; 
    echo "C'est un livre " . $yearType . " et le livre est " . $priceText . ". Il " . ($promotion ? "est en promotion" : "n'est pas en promotion");
    ?>

</body>
<footer>
</footer>





