$(document).ready(function(){
	// the Payment tab in navigation bar checks if there are any user ID in
	// session storage to be used
	$("#toPayment").click(function(){
		$.ajax({
			url: 'https://localhost/final_assignment/php_files/checkUser.php',
			type: 'POST',
			crossDomain:true, 
			success: function(output){
			  if (output == true) {
				location.href = 'feesPage.php';
			  } else {
				location.href= 'retrieveUserId.php';
			  }
			}
		  });
	})
}); 
