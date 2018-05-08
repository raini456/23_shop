<?php
require_once './config.php';
require_once './classes/DbClass.php';
require_once './classes/DbClassExt.php';
require_once './classes/Customer.php';
require_once './classes/Address.php';

try {
  $db = new DbClassExt('mysql:host=' . HOST . ';dbname=' . DB, USER, PASSWORD);
} catch (PDOException $exc) {
  echo $exc->getTraceAsString();
}
if (!$db) {
  echo "Connection failed!<br>";
}
//var_dump($adrC);
//echo "Der Kunde " . $c->firstName() . " " . $c->lastName() . " wohnt in:<br>" . $adrC->street();
//echo "<br>" . $adrC->zip();
//echo " " . $adrC->city();
//echo "<br>" . $adrC->addressLine();
//$completeAdr = nl2br($c->formatedAddress());
//
//echo "<br>" . $completeAdr;
