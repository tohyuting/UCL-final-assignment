$(document).ready(function(){

    // to load the text containing first and last name of users
    $("#paymentText").load("php_files/getPreviousDetails.php");

    // to validate the payment form
    $("#paymentForm").validate({
        rules: {
          cardNumber: "required",
          expire: "required",
          cvv: "required"
        }, 
          messages: {
            cardNumber:"Required",
            expire: "Required",
            cvv: "Required"
        }     
    });

    // to reset the current user by calling clear session storage php
    $("#resetUser").click(function(){
      $.ajax({
        url: 'https://localhost/final_assignment/php_files/clearSessionStorage.php',
        type: 'POST',
        crossDomain:true, 
        success: function(output){
          window.location.href="retrieveUserId.php";
        }
      });
    });
});


