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
    altField: "#dob"
    });

    $("#getDetailsForm").validate({
        rules: {
          firstName: "required",
          lastName: "required",
          dob: {required: true}
        }, 
          messages: {
            firstName:"Required",
            lastName: "Required",
            dob: "Required"
        }     
      });



});


