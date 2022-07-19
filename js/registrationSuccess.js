$(document).ready(function(){
	$("tr:odd").css({"background-color": "red", "color": "white"});
	$("#navBack").click(function() { location.href = 'registrationPage.php' });
	
	$('#truncate').click(function(){ //alert("clicked");
	$('#trucateTable').load("php_files/emptyTables.php");
	});
	$('#homeLink').click(function(){ location.href = 'index.php' });
	$('#payment').click(function(){ location.href = 'feesPage.php' });
	$('#return').click(function(){ location.href = 'index.php' });

});