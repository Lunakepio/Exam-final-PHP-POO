<?php
 class FreshItem extends Item {
    private $expirationDate;
    public function __construct($name, $price, $weight, $expirationDate){
        parent::__construct($name, $price, $weight);
        $this->expirationDate = $expirationDate;
    }
    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function getTax(){
      $price = $this->getPrice();
      $weight = $this->getWeight();
      if($this->getExpirationDate() == null){
        $price = $price * 1.1;
      } else{
      if($weight > 1000){
        $howManyKilo = $weight / 1000;
        $tax = 1.1 - (0.01 * $howManyKilo);
        $price = $price * $tax;
      }
    }
  }
    public function showExpirationDate(){
        $date = $this->expirationDate;
        $date = substr_replace($date, '-', 4, 0);
        $date = substr_replace($date, '-', 7, 0);
        echo 'best before date :'. $date;
    }
    public function setExpirationDate($expirationDate){
        $this->expirationDate = $expirationDate;
    }
    public function showItem(){
        parent::showItem();
        echo " : " . $this->expirationDate;
    }
}

?>