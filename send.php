/* require the user as the parameter */
if(isset($_GET['id']) && intval($_GET['id'])) {

	/* soak in the passed variable or set our own */
	var url = "http://login.regnantsms.com/api/web2sms.php?workingkey=A5c19213e75f432b82755d98595f85310&sender=RBUTLR&to="+number+"&message=Greetings from the Samsung Business Rewards Team! Please click on the link to confirm your reward and update changes http://businessrewards.rewardbutler.com/u/i/"+response.data_value[0]['verify_code'];
			$.ajax({
				url: url,
				type: 'GET',
				async: false,
				dataType: 'jsonp',
				crossDomain : true,
				success: function(result){
					echo 'success';			
				},
				error: function(result){
					echo 'failed';
				},
			});

	  
}