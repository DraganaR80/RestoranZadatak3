<?php

class Meni{

public $id;
public $type;
public $name;
public $quantity;
public $price;

public function __construct($id,$type,$name,$quantity,$price)
{
$this ->id=$id;
$this ->type=$type;
$this ->name=$name;
$this ->quantity=$quantity;
$this ->price=$price;

}

public function getid() {
    return $this->id;
}

public function  setid($id) {
    $this->id = $id;
    return $this;
}

public function getType() {
    return $this->type;
}

public function  setType($type) {
    $this->id = $type;
    return $this;
}

public function geName() {
    return $this->id;
}

public function  setName($name) {
    $this->name = $name;
    return $this;
}

public function getQuantity() {
    return $this->quantity;
}

public function  setQuantity($quantity) {
    $this->quantity = $quantity;
    return $this;
}

public function getPrice() {
    return $this->price;
}

public function  setPrice($price) {
    $this->price = $price;
    return $this;
}

public static function getAll(mysqli $conn){

    $q= " SELECT * FROM meni";
    return $conn->query($q);


}




}





?>