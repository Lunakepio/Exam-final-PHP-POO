<?php

class ShoppingCart{
  
      private $items = array();
      private $id;

      public function __construct(){
          $this->id = uniqid();
      }


      public function addItem($item){
        $weight = $item->getWeight();
        if ($weight < 10000 ){
          $this->items[] = $item;
        } else {
          echo '<br>';
          echo "Item must weight less than 10kg";
          echo '<br>';
        }
      }

      public function removeItem($item){
          $index = array_search($item, $this->items);
          if($index !== false){
              unset($this->items[$index]);
              return true;
          } else {
            return false;
          }
      }
  
      public function getItems(){
          return $this->items;
      }
  
      public function getId(){
          return $this->id;
      }

      public function itemCount(){
          return count($this->items);
      }

      public function getFormattedTotalPrice(){
          $total = 0;
          foreach($this->items as $item){
              $total += $item->getPrice();
          }
          $total = substr_replace($total, '.', -2, 0);
          $total = $total . ' €';
          return $total;
      }

      public function TotalPrice(){
          $totalPrice = 0;
          foreach($this->items as $item){
              $totalPrice += $item->getPrice();
          }
          return $totalPrice;
      }
  
      public function toString(){
        
          $string = "ShoppingCart: " . $this->id . " contains " . $this->itemCount() . " items. Total price: " . $this->getFormattedTotalPrice();
          $string .= "<br>";
          $string .= "Items: <br>";
          foreach($this->items as $item){
              $string .= $item->getName() . " : " . $item->getFormattedPrice() . " : " . $item->getWeight() . " g <br>";
          }
          echo $string;
      }

      public function showCart(){
        echo '<br> Cart ID: ' . $this->id . '<br>';
        echo 'Total items in your shopping cart: ' . $this->itemCount() . '<br>';
          foreach($this->items as $item){
              $item->showItem();
              echo ', ';
          }
      }
  
}