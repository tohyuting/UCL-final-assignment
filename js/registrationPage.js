$(document).ready(function(){
    // get previous details of first and last name entered
    $("#addressText").load("php_files/getPreviousDetails.php");
    
    $("#date").hide();	
    $("#date").datepicker({
    showOn: "button",
    buttonImage: "images/calendar_link.png",
    buttonImageOnly: false,
    dateFormat: "dd-mm-yy",
    changeDay: true,
    changeMonth: true,
    changeYear: true,
    yearRange: "-80:+00",
    altField: "#newdate"
    });

    //validate user form to ensure fields are not empty
    $("#userForm").validate({
        rules: {
          firstName: "required",
          lastName: "required",
          phone: "required",
          email: "required",
          newdate: {required: true}
        }, 
          messages: {
            firstName:"Required",
            lastName: "Required",
            phone: "Required",
            email: "Invalid Email",
            newdate: "Required"
        }, 
          submitHandler: function(form) {
            // successful submission sends the data on the form to be stored
            // as session variables. Set the local storage clicked to be true
            // so that address form will be showed.
            localStorage.setItem("clicked", "true");
            var firstName = $('#firstName').val();

            var lastName = $('#lastName').val();
            var dob = $('#newdate').val();
            var age = $('#age').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
    
            $.ajax({
                    url: 'https://localhost/final_assignment/php_files/sessionStorage.php',
                    type: 'POST',
                    crossDomain:true, 
                    data: { firstNameVal : firstName, lastNameVal : lastName, dobVal : dob, ageVal : age, phoneVal: phone, emailVal: email},
                    success: function(output){
                      window.location.href="registrationPage.php";
                    }
            });

        }        
      });

    if (localStorage.getItem("clicked") == "true") {
        $('#addressForm').show();
        $('#addressText').show();
        $('#userForm').hide();
    } else {
        $('#addressForm').hide();
        $('#addressText').hide();
    }
        
    $("#date").change(function(){
        var getBirth = $(this).val();

        $.ajax({
          url: 'https://localhost/final_assignment/php_files/getAge.php',
          type: 'POST',
          crossDomain:true, 
          data: { dateIn : getBirth},
          success: function(output){
            $("#age").val(output);
          }
        });
    });

    // this allows users to manually type in their date of birth or to 
    // change the date after selecting in the calender while updating the age
    // field automatically
    $("#newdate").change(function(){
      var getBirth = $(this).val();

      $.ajax({
        url: 'https://localhost/final_assignment/php_files/getAge.php',
        type: 'POST',
        crossDomain:true, 
        data: { dateIn : getBirth},
        success: function(output){
          $("#age").val(output);
        }
      });
  });

  // clears all session variable stored, set clicked to false so that
  // the address form would be hidden
  $("#reset").click(function(){
    localStorage.setItem("clicked", "false");
    $.ajax({
      url: 'https://localhost/final_assignment/php_files/clearSessionStorage.php',
      type: 'POST',
      crossDomain:true,
      success: function(output){
        window.location.href="registrationPage.php";
      }
    });

  });
    // validating address form
    $("#addressForm").validate({
        rules: {
          house_numberName: "required",
          street_name: "required",
          city: "required",
          postCode: "required"
        }, 
          messages: {
            house_numberName:"Required",
            street_name: "Required",
            city: "Required",
            postCode: "Required"
        }, 
          success: function() {
            localStorage.setItem("clicked", "false");
          }        
      });
});


