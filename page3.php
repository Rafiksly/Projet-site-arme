<?php
session_start();

$products = [
    1 => ["name" => "Produit A", "price" => 10.99],
    2 => ["name" => "Produit B", "price" => 15.99],
    3 => ["name" => "Produit C", "price" => 7.99],
    3 => ["name" => "Produit D", "price" => 7.99],
    3 => ["name" => "Produit E", "price" => 7.99],
];

$cart = $_SESSION["cart"] ?? [];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Panier</title>
</head>
<body>
    <h1>Votre Panier</h1>
    <table produit="1">
        <tr>
            <th>Pack pistolet arbalète Man Kung MK-50A1 - 50 Livres</th>
            <th>39€</th>
            <th>Quantité</th>
            <th>39€</th>
        </tr>
        <?php foreach ($cart as $item): ?>
        <?php
            $product = $products[$item["id"]];
            $total = $product["price"] * $item["quantity"];
        ?>
        <tr>
            <td><?php echo htmlspecialchars($product["Pack pistolet arbalète Man Kung MK-50A1 - 50 Livres"]); ?></td>
            <td><?php echo htmlspecialchars($product["39,99 €"]); ?> €</td>
            <td><?php echo htmlspecialchars($item["quantity"]); ?></td>
            <td><?php echo htmlspecialchars($total); ?> €</td>
        </tr>
        <?php endforeach; ?>
    </table>


    <table produit="2">
        <tr>
            <th>Fusil à pompe Fabarm STF12 Pistolgrip Tan 12/76	</th>
            <th>2 199</th>
            <th>Quantité</th>
            <th>2 199</th>
        </tr>
        <?php foreach ($cart as $item): ?>
        <?php
            $product = $products[$item["id"]];
            $total = $product["price"] * $item["quantity"];
        ?>
        <tr>
            <td><?php echo htmlspecialchars($product["Fusil à pompe Fabarm STF12 Pistolgrip Tan 12/76"]); ?></td>
            <td><?php echo htmlspecialchars($product["21 122"]); ?> €</td>
            <td><?php echo htmlspecialchars($item["quantity"]); ?></td>
            <td><?php echo htmlspecialchars($total); ?> €</td>
        </tr>
        <?php endforeach; ?>
    </table>


    <table produit="3">
        <tr>
            <th>Poing américain en métal - or blanc 21carats</th>
            <th>21 122€</th>
            <th>Quantité</th>
            <th>21 122€</th>
        </tr>
        <?php foreach ($cart as $item): ?>
        <?php
            $product = $products[$item["id"]];
            $total = $product["price"] * $item["quantity"];
        ?>
        <tr>
            <td><?php echo htmlspecialchars($product["name"]); ?></td>
            <td><?php echo htmlspecialchars($product["price"]); ?> €</td>
            <td><?php echo htmlspecialchars($item["quantity"]); ?></td>
            <td><?php echo htmlspecialchars($total); ?> €</td>
        </tr>
        <?php endforeach; ?>
    </table>


    <table produit="4">
        <tr>
            <th>Carabine UMAREX Hammer PCP .50 (1000 joules)</th>
            <th>1 299€</th>
            <th>Quantité</th>
            <th>1 299€</th>
        </tr>
        <?php foreach ($cart as $item): ?>
        <?php
            $product = $products[$item["id"]];
            $total = $product["price"] * $item["quantity"];
        ?>
        <tr>
            <td><?php echo htmlspecialchars($product["name"]); ?></td>
            <td><?php echo htmlspecialchars($product["price"]); ?> €</td>
            <td><?php echo htmlspecialchars($item["quantity"]); ?></td>
            <td><?php echo htmlspecialchars($total); ?> €</td>
        </tr>
        <?php endforeach; ?>
    </table>


    <table produit="5">
        <tr>
            <th>Munitions</th>
            <th>150€</th>
            <th>Quantité</th>
            <th>150€</th>
        </tr>
        <?php foreach ($cart as $item): ?>
        <?php
            $product = $products[$item["id"]];
            $total = $product["price"] * $item["quantity"];
        ?>
        <tr>
            <td><?php echo htmlspecialchars($product["name"]); ?></td>
            <td><?php echo htmlspecialchars($product["price"]); ?> €</td>
            <td><?php echo htmlspecialchars($item["quantity"]); ?></td>
            <td><?php echo htmlspecialchars($total); ?> €</td>
        </tr>
        <?php endforeach; ?>
    </table>


</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nik</title>
    <link rel="stylesheet" href="armetire.html">
</head>
<body>
    
</body>
</html>