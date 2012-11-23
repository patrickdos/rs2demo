$(document).ready(function(){
	$("#login_form").submit(function(){
		$("#spnmsg").removeClass().addClass('checking').html("Please wait...<br /><br />").fadeIn(1000);

			$.post("server/php/login.post.php",{ un:$('#txtUsername').val(),pa:$('#txtPassword').val(),bucket:$('#txtBucket').val(),rand:Math.random() } ,function(response){
				if(response=="success")
				{
					$("#spnmsg").fadeTo(200,0.1,function(){
						$(this).html("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Authentication successful<br /><br />").addClass('logging').fadeTo(900,1,function(){
							document.location='./index.php';
						});
					});
				}
				else 
				{
					$("#spnmsg").fadeTo(200,0.1,function(){
						$(this).html("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+response+".<br /><br />").removeClass().addClass('error2').fadeTo(900,1);
						$("#txtUsername").focus();
					});
				}
	
			});		
 		return false; //not to post the  form physically
	});

	$("#btnLogin").click(function()
	{
		$("#login_form").trigger('submit');
	});
});
