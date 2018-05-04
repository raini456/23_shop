<?php
require_once './config.php';
require_once './classes/DbClass.php';
require_once './classes/DbClassExt.php';
require_once './classes/Customer.php';
require_once './classes/Address.php';
require_once './classes/Product.php';
require_once './classes/Label.php';

try {
  $db = new DbClassExt('mysql:host=' . HOST . ';dbname=' . DB, USER, PASSWORD);
} catch (PDOException $exc) {
  echo $exc->getTraceAsString();
}
if (!$db) {
  echo "Connection failed!<br>";
}
$adr = new Address("Rapperbahn 1", '20888', "Hamburg");
$c = new Customer('Rudi', 'Ratlos', clone($adr));
$lbl = new Label("JetsetGoods");
$p = new Product("Gummilatschen", "PLAST8778783", 0.49, clone($lbl));
$c->insert($db);
$p->insert($db);
$customerData = Customer::find($db, 'Rudi');
$productData = Product::find($db, 'CAT0815');
$adrC = $c->address();
$lblP = nl2br($p->formatedProduct());
echo $lblP;
//var_dump($adrC);
//echo "Der Kunde " . $c->firstName() . " " . $c->lastName() . " wohnt in:<br>" . $adrC->street();
//echo "<br>" . $adrC->zip();
//echo " " . $adrC->city();
//echo "<br>" . $adrC->addressLine();
//$completeAdr = nl2br($c->formatedAddress());
//
//echo "<br>" . $completeAdr;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>23_Shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/css/styles.css">    
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/ajax.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <h1>Shop</h1>
            <div class="row">                
                <div class="col-12 col-lg-10 col-md-10 col-sm-10 col-xl-10 bg-light pt-5 pb-5">
                    <h2>Eintrag Kunde</h2>
                    <hr>
                    <div id="output">Kundenname</div>
                    <hr>
                    <label for="firstName">Vorname<br>
                        <input type="text" name="firstName" id="firstName">
                    </label>
                    <label for="firstName">Nachname<br>
                        <input type="text" name="nachName" id="nachName">
                    </label>
                    <label for="street">Straße/Hausnummer<br>
                        <input type="text" name="street" id="street">
                    </label> 
                    <label for="city">Ort<br>
                        <input type="text" name="city" id="city">
                    </label>                    
                    <button class="btn btn-outline-info" id="insert">Eintragen</button>                    
                </div>                
            </div>

            <div class="row">
                <div class="col-12 col-lg-10 col-md-10 col-sm-10 col-xl-10 bg-light pt-5 pb-5">
                    <h2>Eintrag Produkt</h2>                                   
                    <hr>
                    <div id="output1">Produktname</div>
                    <hr>
                    <label for="productName">Produktname<br>
                        <input type="text" name="productName" id="productName">
                    </label>
                    <label for="labelName">Label<br>
                        <input type="text" name="labelName" id="labelName">
                    </label>
                    <label for="price">Preis<br>
                        <input type="text" name="price" id="price">
                    </label> 
                    <label for="productnr">Produktnummer<br>
                        <input type="text" name="productnr" id="productnr">
                    </label>                    
                    <button class="btn btn-outline-info" id="insert">Eintragen</button>                    
                </div>                
            </div>
        </div>
        <?php
        ?>
        <script>

        </script>
    </body>
</html>
