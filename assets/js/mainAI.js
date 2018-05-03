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