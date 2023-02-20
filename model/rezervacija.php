<?php

class Reservation{

private $id;
private $fullName;
private $email;
private $phone;
private $noppl;
private $date;
private $time;


public function __construct($id,$fullName, $email,$phone,$noppl,$date,$time)
{
$this->id=$id;
$this->fullName=$fullName;
$this->email=$email;
$this->phone=$phone;
$this->noppl=$noppl;
$this->date=$date;
$this->time=$time;
}


public function getid() {
    return $this->id;
}

    public function setid($id) {
    $this->id = $id;
    return $this;
}

	public function getFullName() {
		return $this->fullName;
	}
	
		public function setFullName($fullName) {
		$this->fullName = $fullName;
		return $this;
	}

    

	public function getPhone() {
		return $this->phone;
	}
	
	
	public function setPhone($phone) {
		$this->phone = $phone;
		return $this;
	}

	
	public function getEmail() {
		return $this->email;
	}
	
	
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}

	public function getnoppl() {
		return $this->noppl;
	}
	
		public function setnoppl($noppl) {
		$this->noppl = $noppl;
		return $this;
	}

	public function getdate() {
		return $this->date;
	}
	
		public function setdate($date) {
		$this->date = $date;
		return $this;
	}


	public function gettime() {
		return $this->time;
	}
	
		public function settime($time) {
		$this->time = $time;
		return $this;
	}



	public static function add($fullName, $email,$phone, $noppl,$date,$time, mysqli $conn){
		$q= "INSERT INTO restoran (fullName,email,phone,noppl,date,time)
		VALUES('$fullName','$email','$phone','$noppl','$date','$time')";
		
		return $conn->query($q);
		
		}

}



?>