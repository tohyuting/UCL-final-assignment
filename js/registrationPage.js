$(document).ready(function(){

    
    $(".navBack").click(function() { location.href = 'index.php' });
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
            email: "Required",
            newdate: "Required"
        }, 
          submitHandler: function(form) {
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
                      alert(output);
                    }
            });
            alert("stop");
            window.location.href="registrationPage.php";
        }        
      });

    if (localStorage.getItem("clicked") == "true") {
        $('#addressForm').show();
        $('#userForm').hide();
    } else {
        $('#addressForm').hide();
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
          submitHandler: function(form) {
            localStorage.setItem("clicked", "false");
            $(form).submit();
            alert("stop");
        }        
      });
});


