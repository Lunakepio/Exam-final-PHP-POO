<?php
class Ticket {
  private $ref;
  private $price;


  public function __construct($ref, $price){
    $this->ref = $ref;
    $this->price = $price;
  }

  public function getRef(){
    return $this->ref;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getFormattedPrice(){
    $price = $this->price;
    $price = substr_replace($price, '.', -2, 0);
    $price = $price . ' €';
    return $price;
  }

  public function setPrice($price){
    $this->price = $price;
  }

  public function setRef($ref){
    $this->ref = $ref;
  }

  public function showTicket(){
    echo $this->ref;
    $price = $this->price;
    $price = substr_replace($price, '.', -2, 0);
    $price = " : ". $price . ' €';
    echo $price;
  }

  
}