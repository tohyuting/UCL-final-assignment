$(document).ready(function(){

    
    $("tr:odd").css("background-color", "#EFF1F1");
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
});


