$(document).ready(function(){
	$("#startAdventure").click(function(){
		location.href= 'registrationPage.php';
	});
	$("#moreInfo").click(function(){
		location.href= 'about.php';
	});

	// links to check user, by checking if there is any current user ID
	// in the session variable that could be used
	$("#payAdventure").click(function(){
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
	});
}); 
