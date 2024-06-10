<?php 

require_once 'Cart.php';

// Utilisation de la classe ShoppingCart
$cart = new ShoppingCart();
$cart->addItem("Apple", 2);
$cart->addItem("Banana", 3);
$cart->addItem("Orange", 1);

// Compter le nombre total d'articles dans le panier
echo "Total items in the cart: " . count($cart); // Affichera : Total items in the cart: 6

// Afficher les détails des articles
print_r($cart->getItems());