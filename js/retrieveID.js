$(document).ready(function(){
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

    //validate form
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


