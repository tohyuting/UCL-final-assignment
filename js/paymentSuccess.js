$(document).ready(function(){
	$('#home').click(function(){
        $.ajax({
			url: 'https://localhost/final_assignment/php_files/clearSessionStorage.php',
			type: 'POST',
			crossDomain:true,
			success: function(output){
			  alert(output);
			  location.href = 'index.php';
			}
		});
    });
});