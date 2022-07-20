$(document).ready(function(){
	$("#toPayment").click(function(){
		$.ajax({
			url: 'https://localhost/final_assignment/php_files/checkUser.php',
			type: 'POST',
			crossDomain:true, 
			success: function(output){
			  if (output == true) {
				location.href = 'feesPage.php';
			  } else {
				alert("false");
				location.href= 'retrieveUserId.php';
			  }
			}
		  });
	})
}); 
