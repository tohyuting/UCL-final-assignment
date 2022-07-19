$(document).ready(function(){
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
});


