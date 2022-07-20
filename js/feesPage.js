$(document).ready(function(){
    $("#paymentText").load("php_files/getPreviousDetails.php");

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


