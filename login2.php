<!DOCTYPE html>
<head>
<title>Login | Pundo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Registration / Login form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS --><!--
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">-->
<link href="//fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

<!--font CSS-->
<script src="js/jquery2.0.3.min.js"></script>

		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
</head>
<body class="dashboard-page">
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- validation -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>registration and login</h2>
					</div>
					
					<div class="forms-grids">
						<div class="forms3">
						<div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation register-form">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Registration:</h3>
									</div>
									<div class="form-body form-body-info">
										<form data-toggle="validator" novalidate="" action="pay.php" method="post" target="_blank">
											<div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" name="Username" placeholder="Username" required="">
											</div>
											<div class="form-group has-feedback">
												<input type="email" class="form-control inputEmail" name="Email" placeholder="Email" data-error="That email address is invalid" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												<span class="help-block with-errors">Please enter a valid email address</span>
											</div>
											<div class="form-group">
											  <input type="password" data-toggle="validator" data-minlength="6" class="form-control inputPassword" name="Password" placeholder="Password" required="required">
											  <span class="help-block">Minimum of 6 characters</span>
											</div>
											<div class="form-group">
											  <input type="password" class="form-control" id="inputPasswordConfirm" data-match=".inputPassword" data-match-error="Passwords dont match!" name="Confirm password" placeholder="Confirm password" required="">
											  <div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
												<div class="radio">
													<label>
													  <input type="radio" name="gender" required="">
													  Female
													</label>
												</div>
												<div class="radio">
													<label>
													<input type="radio" name="gender" required="">
													Male
													</label>
												</div>
											</div>
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" data-error="Before you wreck yourself" required="">
														I have read and accept terms of use.
													</label>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group">
											<div class="pundo">
												<input type="submit" name="Submit" style="width: 450px; background-color: yellow; height: 40px; text-decoration: bold;" value="SIGN UP">												
											</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							<div class="panel panel-widget agile-validation">
								<div class="validation-grids validation-grids-right login-form">
									<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										<div class="input-info">
											<h3>Login :</h3>
										</div>
										<div class="form-body form-body-info">
											<form data-toggle="validator" novalidate="" action="pay.php" method="post" target="_blank">
												<div class="form-group has-feedback">
													<input type="email" class="form-control inputEmail" name="Email" placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												</div>
												<div class="form-group">
													<input type="password" data-toggle="validator" data-minlength="6" class="form-control inputPassword" name="Password" placeholder="Password" required="">
												</div>
												<div class="bottom">
													<div class="form-group">
														<div class="checkbox">
															<label>
																<input type="checkbox" data-error="Before you wreck yourself" required="">
																Remember me
															</label>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="form-group">
													<input type="submit" name="submit" style="width: 450px; background-color: yellow; height: 40px; text-decoration: bold;" value="LOGIN">		

													</div>
													<div class="clearfix"> </div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"> </div>
						</div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div>
		<?php
$conn = mysqli_connect('localhost','root','','users');
if ($conn){
	echo "Successfull connection";
}
else{
	echo"Connection Error";
}
if(isset($_POST['Submit'])){
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST ['Password'];
$sql = "INSERT INTO users (username,email,password) VALUES ('$Username','$Email','$Password')";
$query=mysqli_query($conn,$sql);
if($query){
	echo "Successfully registered!";
}else{
	echo "error adding record". mysqli_error($conn);
	}
	}
mysqli_close($conn);

//login
?>
		<!-- footer -->
		<div class="footer">

			<p>© 2017 All Rights Reserved . Design by <a href="index.html" target="_blank">PundoJnr</a></p>
		</div>
		<!-- //footer -->
		<!-- input-forms -->
		
		
		<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="js/validator.min.js"></script>
		<!--//validator js-->
</body>
</html>
