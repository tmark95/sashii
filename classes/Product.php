<?php 

CLASS Product{

    private $name;
    private $description;
    private $category;
    private $price;


    public function __construct($name, $description, $category, $price){
        $this->name =$name;
        $this->description = $description;
        $this->cant = $cant;
        $this->totalPrice = $price;
    }

    public function setName($name)
    {
    $this->name = $name;
    return $this;
    }
}

?>