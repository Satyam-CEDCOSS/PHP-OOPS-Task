<?php
session_start();

// Class Function 
class sports
{
    public $id;
    public $name;
    public $price;
    public $qty;
    public $img;
    function __construct($id, $name, $img, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
        $this->price = $price;
        $this->qty = 0;
    }

    public function setQuantityByOne($val)
    {
        $val->qty++;
    }
    public function getQuantity()
    {
        return $this->qty;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getImg()
    {
        return $this->img;
    }
}
// Required Data 
if (!isset($_SESSION['sports'])) {
    $_SESSION['sports'] = array();
    $football = new sports(101, "football", "images/football.png", 150);
    $tennis = new sports(102, "tennis", "images/tennis.png", 120);
    $basketball = new sports(103, "basketball", "images/basketball.png", 90);
    $table_tennis = new sports(104, "table-tennis", "images/table-tennis.png", 110);
    $soccer = new sports(105, "soccer", "images/soccer.png", 80);
    array_push($_SESSION['sports'], $football, $tennis, $basketball, $table_tennis, $soccer);
}
?>
