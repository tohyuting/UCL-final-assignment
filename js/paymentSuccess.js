$(document).ready(function(){
	// clear all session variables when returning to home after payment
	$('#home').click(function(){
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