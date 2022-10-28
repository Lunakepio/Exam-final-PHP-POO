<?php
require('Item.php');
require('ShoppingCart.php');
require('FreshItem.php');
$item = new Item("corn flakes", 500, 5);
echo '<br>';
echo $item->getName();
echo '<br>';

echo $item->getPrice();
echo '<br>';
$item->showItem();
echo '<br>';

$chewingGum = new Item("chewing gum",403, 2);
$chewingGum->showItem();
$coca = new Item("coca", 200, 40);
echo '<br>';echo '<br>';
$shoppingCart = new ShoppingCart();
$shoppingCart->addItem($item);
$shoppingCart->addItem($chewingGum);
$shoppingCart->showCart();
echo '<br>';
$shoppingCart->toString();
echo '<br>';
echo '<br>';

$orange = new FreshItem("orange", 100, 1, "2020-12-31");
$orange->showItem();