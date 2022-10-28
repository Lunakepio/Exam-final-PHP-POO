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

    public function showExpirationDate(){
        //format expiration date YYYY-MM-DD
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