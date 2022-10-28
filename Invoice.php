<?php
class Invoice {
  private $items = array();
  private $tickets = array();
  public function __construct($items, $tickets){
    $this->items = $items;
    $this->tickets = $tickets;
  }
  public function getItems(){
    return $this->items;
  }
  public function getTickets(){
    return $this->tickets;
  }

  public function showInvoice(){
    echo '<br>';
    echo 'Invoice';
    echo '<br>';
    echo '<br>';
    echo 'Items';
    echo '<br>';
    foreach($this->items as $item){
      $price = $item->getPrice();
      $weight = $item->getWeight();
      if($item->getExpirationDate() == null){
        $price = $price * 1.1;
      } else{
      if($weight > 1000){
        $howManyKilo = $weight / 1000;
        $tax = 1.1 - (0.01 * $howManyKilo);
        $price = $price * $tax;
      }
      echo "Name: ";
      echo $item->getName();
      $price = substr_replace($price, '.', -2, 0);
      $price = " : ". $price . ' €';
      echo '<br>';
      echo "Price: ". $price;
      echo '<br>';
      echo "Weight: ". $weight . "g";

      echo '<br>';
    }
    echo '<br>';
    echo 'Tickets';
    echo '<br>';
    foreach($this->tickets as $ticket){
      $ticket->showTicket();
      echo '<br>';
    }
    }
  }

  public function getTotalAmount(){
    $totalAmount = 0;
    foreach($this->items as $item){
      $totalAmount += $item->getTax();
    }
    foreach($this->tickets as $ticket){
      $totalAmount += $ticket->getTax();
    }
    return $totalAmount;
  }

  public function getTotalTax(){
    $totalTax = 0;
    foreach($this->items as $item){
      $totalTax += $item->getTax() - $item->getPrice();
    }

    foreach($this->tickets as $ticket){
      $totalTax += $ticket->getTax() - $ticket->getPrice();

      

    }
    return $totalTax;
  }
  public function add($item){
    $this->items[] = $item;
  }
}
