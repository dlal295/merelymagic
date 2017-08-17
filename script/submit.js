$(document).ready(function(){
	console.log("I'm batman");
	$('#email-form').on('submit', function(){
		console.log("submitted b");
		console.log($(this).attr('action'));
		console.log($(this).serialize());
		$.post($(this).attr('action'), $(this).serialize(), function(res){
			console.log(res);
			if (res['success']) {
				console.log("success");
			} else if (!res['validEmail']) {
				console.log("invalid email");
			} else {
				console.log("an error occurred");
			}
		}, 'json')
			.fail(function(xhr, textStatus, err){
				console.log(xhr);
				console.log(textStatus);
				console.log(err);
			});
		// $.ajax({ 
  //           url: './script/send_email.php',
  //           type: 'POST',
  //           method: 'POST',
  //           // dataType: 'json',
  //           data: {
  //               name:"bruce",
  //               email:"bruce@waynecorp.com",
  //               subject:"gotham"
  //           },
  //           success: function(res){ console.log(res); },
  //           error: function(xhr, textStatus, err) { console.log(xhr); console.log(textStatus), console.log(err); },
  //       });

		return false;
	});
});