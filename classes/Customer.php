<?php

/**
 * Description of Customer
 *
 * @author pr04
 */
class Customer {

  private $firstName;
  private $lastName;
  private $cid;
  private $aid;
  public static $amount = 0;

  public function __construct($firstName, $lastName) {
    $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRING);
    $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRING);
    self::$amount++;
    $this->cid=$this->addCustomer($this->firstName, $this->lastName);
  }
  
  public function addCustomer(){
    return;//$this->cid;
  }
  public function addAdress($s,$z,$c,$country){
    //$this->cid;
  }

  public function firstName($param = NULL) {
    if ($param === NULL) {
      return $this->firstName;
    }
    $name = filter_var($param, FILTER_SANITIZE_STRING);
    if (is_string($name)) {
      $this->firstName = $name;
    }
  }

  public function lastName($param = NULL) {
    if ($param === NULL) {
      return $this->lastName;
    }
    $name = filter_var($param, FILTER_SANITIZE_STRING);
    if (is_string($name)) {
      $this->lastName = $name;
    }
  }

}

$c = new Customer("Olle", "Bolle");
$c2 = new Customer("Willi", "Wonka");
$c2->addAdress('street','zip','city', 'country');
echo $c->firstName() . " " . $c->lastName()."<br>";
echo $c2->firstName() . " " . $c2->lastName()."<br>";
echo 'Anzahl angelegter Kunden: '.$c::$amount;
echo '<br>- oder aber - Anzahl angelegter Kunden: '.Customer::$amount;