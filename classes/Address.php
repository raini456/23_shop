<?php
class Address {

  private $street;
  private $zip;
  private $city;
  private $aid;
  private static $amount = 0;

  public function __construct($street, $zip, $city) {
    $this->street = filter_var($street, FILTER_SANITIZE_STRING);
    $this->zip = filter_var($zip, FILTER_SANITIZE_NUMBER_INT);
    $this->city = filter_var($city, FILTER_SANITIZE_STRING);
    self::$amount++;
  }

  public static function getAmount() {
    return self::$amount;
  }

  public function street($param = NULL) {
    if ($param === NULL) {
      return $this->street;
    }
    $street = filter_var($param, FILTER_SANITIZE_STRING);
    if (is_string($street)) {
      $this->street = $street;
    }
  }

  public function zip($param = NULL) {
    if ($param === NULL) {
      return $this->zip;
    }
    $zip = filter_var($param, FILTER_SANITIZE_NUMBER_INT);
    if (is_numeric($zip)) {
      $this->zip = $zip;
    }
  }

  public function city($param = NULL) {
    if ($param === NULL) {
      return $this->city;
    }
    $city = filter_var($param, FILTER_SANITIZE_STRING);
    if (is_string($city)) {
      $this->city = $city;
    }
  }

}
