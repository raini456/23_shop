<?php
class Product {
  private $productname;
  private $productnr;
  private $productprice;
  private $label;
  private static $amount;
  private $db;

 public function __construct(string $productname, string $productnr, float $productprice, Label $label) {
  $this->productname($productname);
  $this->productnr($productnr);
  $this->productprice($productprice);
  $this->label=$label;
 }

 public static function find(DbClassExt $db, $param) {
  $db->setTable('tb_products');
  $param = trim($param);
  $db->setWhere("name='$param' OR productnr='$param'");
  return $db->getData();
 }

 public function insert(DbClassExt $db) {
  $this->db = $db;
  $id = $this->addLabel(); //$cid = lastid
  $this->addProduct($id);
 }

 private function addProduct($id) {
  $this->db->setTable('tb_products');
  $data = [];
  //$data[columnName] = value
  $data['labelid'] = $id;
  $data['name'] = $this->productname();
  $data['price'] = $this->productprice();
  $data['poductnr']=$this->productnr();
  return $this->db->insert($data); //return lastID
 }

 private function addLabel() {
  $this->db->setTable('tb_labels');
  $data = [];  
  $data['label'] = $this->label->label();  
  return $this->db->insert($data); //return lastID
 }

 public static function getAmount() {
  return self::$amount;
 }

 public function productname($param = NULL) {
  if ($param === NULL) {
   return $this->productname;
  }
  $productname = filter_var($param, FILTER_SANITIZE_STRING);
  if (is_string($productname)) {
   $this->productname = $productname;
  }
 }

 public function productnr($param = NULL) {
  if ($param === NULL) {
   return $this->productnr;
  }
  $productnr= filter_var($param, FILTER_SANITIZE_STRING);
  if (is_string($productnr)) {
   $this->productnr = $productnr;
  }
 }

 public function productprice($param = NULL) {
  if ($param === NULL) {
   return $this->productprice;
  }
  $productprice= filter_var($param, FILTER_SANITIZE_NUMBER_FLOAT);
  if (is_string($productprice)) {
   $this->productprice = $productprice;
  }
 } 

 public function formatedProduct() {
  return sprintf("%s %s\n%s\n%s", $this->productname(), $this->productprice(), $this->label->label(), $this->productnr());
 
  
 }

}
