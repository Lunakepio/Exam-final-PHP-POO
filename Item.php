<?php
class Item {

    private $name;
    private $price;
    private $weight;

    public function __construct($name, $price, $weight){
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getName(){
        return $this->name;
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
    public function getWeight(){
        return $this->weight;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function showItem(){
        echo $this->name;
        $price = $this->price;
        $price = substr_replace($price, '.', -2, 0);
        $price = " : ". $price . ' €';
        echo $price;
        echo " : " . $this->weight . "g";
}

}
?>

