<?php
class Label {
  protected $labelName;
  private static $amount = 0;

  public function __construct(string $labelName) {
    $this->label($labelName);
    self::$amount++;
  }

  public static function getAmount() {
    return self::$amount;
  }

  public function label($param = NULL) {
    if ($param === NULL) {
      return $this->labelName;
    }
    $labelName = filter_var($param, FILTER_SANITIZE_STRING);
    if (is_string($labelName)) {
      $this->labelName = $labelName;
    }
  }  
}
