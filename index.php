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
if ($db) {
  echo "Ah Ja!<br>";
}
$adr = new Address("Rapperbahn 1", '20888', "Hamburg");
$c = new Customer('Rudi', 'Ratlos', clone($adr));
$lbl = new Label("CatHaters");
$p = new Product("Katzenhaardecke", "CAT0815", "7324234.30", clone($lbl));
$c->insert($db);
$p->insert($db);
$customerData = Customer::find($db, 'Knut');
var_dump($customerData);
$productData = Product::find($db, 'Katzenhaardecke');
var_dump($productData);
$adrC = $c->address();
$lblP = $p->formatedProduct();
echo $lblP;
//var_dump($adrC);
echo "Der Kunde " . $c->firstName() . " " . $c->lastName() . " wohnt in:<br>" . $adrC->street();
echo "<br>" . $adrC->zip();
echo " " . $adrC->city();
echo "<br>" . $adrC->addressLine();
$completeAdr = nl2br($c->formatedAddress());

echo "<br>" . $completeAdr;
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
            <div class="row">                
                <div class="col-12 col-lg-10 col-md-10 col-sm-10 col-xl-10 bg-light pt-5 pb-5">
                    <h2>Shop</h2>
                    <hr>
                    <div id="output">Kundenname</div>
                    <hr>
                    <label for="firstName">Vorname<br>
                        <input type="text" name="firstName" id="firstName">
                    </label>
                    <label for="lastName">Nachname<br>
                        <input type="text" name="lastName" id="lastName">
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
