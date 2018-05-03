<?php
require_once './classes/Customer.php';
require_once './classes/Address.php';
$adr=new Address("Rapperbahn 1", 20888, "Hamburg");
$c=new Customer('Rudi','Ratlos', clone($adr));
$adrC=$c->address();
//var_dump($adrC);
echo "Der Kunde ".$c->firstName()." ".$c->lastName()." wohnt in:<br>".$adrC->street();
echo "<br>".$adrC->zip();
echo " ".$adrC->city();
echo "<br>".$adrC->addressLine();
$completeAdr=nl2br($c->formatedAddress());

echo "<br>".$completeAdr;
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
                    <!--label for="streetName">Straße und Hausnummer<br>
                        <input type="text" name="steetName" id="streetName">
                    </label>
                    <label for="cityName">Ort<br>
                        <input type="text" name="cityName" id="cityName">
                    </label>
                    <label for="email">Email<br>
                        <input type="text" name="email" id="email">
                    </label>
                    <label for="phone">Telefon<br>
                        <input type="text" name="phone" id="phone">
                    </label>
                    <label for="socMed1">Social Media 1<br>
                        <input type="text" name="socMed1" id="socMed1">
                    </label>
                    <label for="socMed2">Social Media 2<br>
                        <input type="text" name="socMed2" id="socMed2">
                    </label>
                    <label for="notice">Anmerkungen<br>
                        <textarea name="notice" id="notice"></textarea>
                    </label-->
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
