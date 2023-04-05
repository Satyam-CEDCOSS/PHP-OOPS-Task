<?php
class item{
    public $key;
    public $quantity;
    function __construct($key,$quantity)
    {
        $this->key = $key;
        $this->quantity = 0;
    }
    public function setQuantityByOne()
    {
        $this->quantity++;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
}
?>