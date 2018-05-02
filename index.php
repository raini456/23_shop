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
                    <div id="output">MyOutput</div>
                    <hr>
                    <label for="firstName">Vorname
                        <input type="text" name="firstName" id="firstName">
                    </label>
                    <label for="lastName">Nachname
                        <input type="text" name="lastName" id="lastName">
                    </label>
                    <label for="streetName">Straße und Hausnummer
                        <input type="text" name="steetName" id="streetName">
                    </label>
                    <label for="cityName">Ort
                        <input type="text" name="cityName" id="cityName">
                    </label>
                    <label for="email">Email
                        <input type="text" name="email" id="email">
                    </label>
                    <label for="phone">Telefon
                        <input type="text" name="phone" id="phone">
                    </label>
                    <label for="socMed1">Social Media
                        <input type="text" name="socMed1" id="socMed1">
                    </label>
                    <label for="socMed2">Social Media 2
                        <input type="text" name="socMed2" id="socMed2">
                    </label>
                    <label for="cityName">Ort
                        <input type="text" name="cityName" id="cityName">
                    </label>
                    <!--button class="btn btn-outline-dark">getData</button>
                    <button class="btn btn-outline-dark bg-warning" value="Berlin">Berlin/Germany</button>
                    <button class="btn btn-outline-dark bg-primary" value="Phuket">Phuket/Thailand</button>
                    <button class="btn btn-outline-dark bg-warning" value="Palma">Palma/Mallorca</button>
                    <button class="btn btn-outline-dark bg-primary" value="Santorini">Santorini/Greece</button-->
                </div>                
            </div>
        </div>
        <script>
          (function () {
//              var btns = [];
//              btns = document.querySelectorAll('button');
//              var output = document.querySelector('#output');
//              for (var i = 0; i < btns.length; i++) {
//                  //var btn[i] = document.querySelector('button'); //ermöglicht die Verwendung von CSS-Selektoren wie # und .
//
//                  btns[i].addEventListener('click', ajaxPost);
//              }              
          })();
        </script>
    </body>
</html>
