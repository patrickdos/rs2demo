<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />		
		<title>Scality Accounting</title>

		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
		<link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />		
		<!-- Internet Explorer Fixes Stylesheet -->		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->	  
		<!-- jQuery -->
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <!-- Login Session -->
    <script type="text/javascript" src="js/jquery.login.js"></script>
		<!-- jQuery Configuration -->
		<!-- Internet Explorer .png-fix -->		
		<!--[if IE 6]>
			<script type="text/javascript" src="js/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">		
				<h1>Er</h1>
				<!-- Logo (221px width) -->
				<img src="./resources/images/logo.png">
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				
				<form method="post" action="" id="login_form">
					 <center><span id="spnmsg" style="display:none"></span></center>
					  <br />
					<p>
						<label>Login</label>
						<input class="text-input" type="text" name="txtUsername" id="txtUsername"/>
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="txtPassword" id="txtPassword"/>
					</p>

					<div class="clear"></div>
				        <p>
                                                <label>Bucket</label>
                                                <input class="text-input" type="text" name="txtBucket" id="txtBucket"/>
                                        </p>

					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Connection" style="text-decoration:none"/>
					</p>
					
				</form>

			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		
  </body>
  
</html>

<script type="text/javascript">
document.getElementById('txtUsername').focus();
document.getElementById('txtUsername').select();

