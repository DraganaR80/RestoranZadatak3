<?php

class Order {

public $id;

public $name;

public $price;

public $total;


public function __construct($id,$name,$price,$total){
    $this ->id=$id;
    $this ->name=$name;
    $this ->price=$price;
    $this ->total=$total;
    

}

public function getid() {
    return $this->id;
}

public function  setid($id) {
    $this->id = $id;
    return $this;
}
public function getName() {
    return $this->id;
}

public function  setName($name) {
    $this->name = $name;
    return $this;
}
public function getPrice() {
    return $this->price;
}

public function  setPrice($price) {
    $this->price = $price;
    return $this;
}

public function getTotal() {
    return $this->total;
}

public function  setTotal($total) {
    $this->total= $total;
    return $this;
}


public static function getAll(mysqli $conn){

    $q= " SELECT * FROM jelovnik";
    return $conn->query($q);


}

public static function add($name, $price,$total, mysqli $conn){
    $q= "INSERT INTO order (name,price,total)
    VALUES('$name','$price','$total')";
    
    return $conn->query($q);
    
    }





}








?>