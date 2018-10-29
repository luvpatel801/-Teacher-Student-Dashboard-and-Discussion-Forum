  function validateForm() {
            
            var x = document.forms["fname"]["mobile"].value;
            var y=document.forms["fname"]["pass"].value;
            var z=document.forms["fname"]["cpass"].value;
            
            if (x.length!=10 ) {
              alert("number should be of 10 digits");
              return false;
            }
            
            else if(isNaN(x)) {
              alert("It is not a number");
              return false;
            }
            
            else if(y!=z) {
              alert("password do not match");
              return false;
            }
          
            return true;
          }
          
          $(function() {
          
            $('#login-form-link').click(function(e) {
              $("#login-form").delay(100).fadeIn(100);
              $("#register-form").fadeOut(100);
              $('#register-form-link').removeClass('active');
              $(this).addClass('active');
              e.preventDefault();
            });

            $('#register-form-link').click(function(e) {
              $("#register-form").delay(100).fadeIn(100);
              $("#login-form").fadeOut(100);
              $('#login-form-link').removeClass('active');
              $(this).addClass('active');
              e.preventDefault();
            });
            
          });
