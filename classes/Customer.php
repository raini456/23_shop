<?php

/**
 * Customer-Klasse mit Vor- und Nachname, Kunden-ID und Artikel-ID sowie eine statische Zählvariable
 */
class Customer {

  private $firstName;
  private $lastName;
  private $address;
  private $cid;
  private static $amount = 0;

  public function __construct(string $firstName, string $lastName, Address $address) {
    $this->firstName($firstName);
    $this->lastName($lastName);
    $this->address($address);
    self::$amount++;
    /* bzw.     
     * Customer::$amount++;
     */
    $this->cid = $this->addCustomer($this->firstName, $this->lastName);
  }

  public static function getAmount() {
    return self::$amount;
  }

  public static function find($params) {
    
  }

  public function insert(DbClassExt $db) {
    
  }

  private function addCustomer() {
    return; //lastInsertID;
  }

  private function addAddress() {
    
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

  public function address($param = NULL) {
    if ($param === NULL) {
      return $this->address;
    }
    if (is_object($param)) {
      $this->address = $param;
    }
  }

  public function formatedAddress() {
    return sprintf("%s %s \n%s\n%s %s", $this->firstName(), $this->lastName(), $this->address->street(), $this->address->zip(), $this->address->city()
    );
  }

}
