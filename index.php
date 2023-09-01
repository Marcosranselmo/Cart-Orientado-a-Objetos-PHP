<?php

require 'Cart.php';
require 'Product.php';

session_start();

$products = [
  1 => ['id' => 1, 'name' => 'geladeira', 'price' => 1000, 'quantity' => 1],
  2 => ['id' => 2, 'name' => 'mouse', 'price' => 100, 'quantity' => 1],
  3 => ['id' => 3, 'name' => 'teclado', 'price' => 10, 'quantity' => 1],
  4 => ['id' => 4, 'name' => 'monitor', 'price' => 5000, 'quantity' => 1],
];


if (isset($_GET['id'])) {
  $id = strip_tags($_GET['id']);
  $productInfo = $products[$id];
  $product = new Product;
  $product->setId($productInfo['id']);
  $product->setName($productInfo['name']);
  $product->setPrice($productInfo['price']);
  $product->setQuantity($productInfo['quantity']);

  $cart = new Cart;
  $cart->add($product);
}

var_dump($_SESSION['cart'] ?? []);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="/mycart.php">Go to cart</a>
  <ul>
    <li>Geladeira <a href="?id=1">Add</a> R$ 1000</li>
    <li>Mouse <a href="?id=2">Add</a> R$ 100</li>
    <li>Teclado <a href="?id=3">Add</a> R$ 10</li>
    <li>Monitor <a href="?id=4">Add</a> R$ 5000</li>
  </ul>
</body>

</html>