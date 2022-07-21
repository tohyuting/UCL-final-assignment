$(document).ready(function(){
	$('#payment').click(function(){ location.href = 'feesPage.php' });
	
	// clear session variables once user decides not to pay for day tour
	// immediately after registration
	$('#return').click(function(){ 
		$.ajax({
			url: 'https://localhost/final_assignment/php_files/clearSessionStorage.php',
			type: 'POST',
			crossDomain:true,
			success: function(output){
			  location.href = 'index.php';
			}
		});
		
		
	});

});

