<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adressliste</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/css/styles.css">    
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/ajax.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
        <script src="assets/js/mainAI.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">                
                <div class="col-12 col-lg-10 col-md-10 col-sm-10 col-xl-10 bg-light pt-5 pb-5">
                    <h4>Eintrag Adressliste AI-Türkeigruppe Berlin</h4>
                    <hr>
                    <div id="remark"></div>
                    <hr>
                    <label for="firstName">Vorname<br>
                        <input type="text" name="firstName" id="firstName" required="">
                    </label>
                    <label for="lastName">Nachname<br>
                        <input type="text" name="lastName" id="lastName" required="">
                    </label>
                    <label for="lastName">Geburtsdatum<br>
                        <input type="text" name="birthday" id="birthday">
                    </label>
                    <label for="streetName">Straße und Hausnummer<br>
                        <input type="text" name="steetName" id="streetName" required="">
                    </label>
                    <label for="cityName">Ort<br>
                        <input type="text" name="cityName" id="cityName" required="">
                    </label>
                    <label for="email">Email<br>
                        <input type="text" name="email" id="email" required="">
                    </label>
                    <label for="phone">Telefon<br>
                        <input type="text" name="phone" id="phone" required="">
                    </label>
                    <label for="socMed1">Social Media 1<br>
                        <input type="text" name="socMed1" id="socMedia1">
                    </label>
                    <label for="socMed2">Social Media 2<br>
                        <input type="text" name="socMed2" id="socMedia2">
                    </label><br>
                    <label for="notice">Anmerkungen<br>
                        <textarea name="notice" id="notice"></textarea>
                    </label><br>
                    <button class="btn btn-outline-info" id="btnInsert">Eintragen</button>                    
                </div>                
            </div>
        </div>
        <script>
          (function () {
              var firstName, lastName, birthday, streetName, cityName, email, phone, socMedia1, socMedia2, notice, btnInsert;
              firstName = document.querySelector('#firstName');
              lastName = document.querySelector('#lastName');
              birthday = document.querySelector('#birthday');
              streetName = document.querySelector('#streetName');
              cityName = document.querySelector('#cityName');
              email = document.querySelector('#email');
              phone = document.querySelector('#phone');
              socMedia1 = document.querySelector('#socMedia1');
              socMedia2 = document.querySelector('#socMedia2');
              notice = document.querySelector('#notice');
              btnInsert = document.querySelector('#btnInsert');
              btnInsert.addEventListener('click', getData);
              function getData(evt) {
                  var params = {
                      'firstName': firstName.value,
                      'lastName': lastName.value,
                      'birthday': birthday.value, 
                      'streetName': streetName.value, 
                      'cityName': cityName.value, 
                      'email': email.value, 
                      'phone': phone.value, 
                      'socMedial': socMedia1.value, 
                      'socMedia2': socMedia2.value, 
                      'notice': notice.value
                  };
                  console.log(params);
//                  ajax('get', 'checkCity.php', params, evalCity);
//                  console.log(this.value);
              }
//              for (var i = 0; i < btns.length; i++) {
//                  //var btn[i] = document.querySelector('button'); //ermöglicht die Verwendung von CSS-Selektoren wie # und .
//
//                  btns[i].addEventListener('click', ajaxPost);
//              }              
          })();
        </script>
    </body>
</html>
