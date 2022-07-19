$(document).ready(function(){
	$("tr:odd").css("background-color", "#EFF1F1");
	$("#navBack").click(function() { location.href = 'registrationPage.php' });
	$("#payFees").click(function() {location.href = 'retrieveUserId.php'});
}); 
