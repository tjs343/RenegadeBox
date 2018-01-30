<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Renegade Box - Home Page</title>
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
		function sendEmail(){
			var name = document.getElementById("txtInputName").value;
			var sendersEmail = document.getElementById("txtInputEmail").value;
			var message = document.getElementById("txtInputMessage").value;

	  		if(name.length < 1 || sendersEmail.length < 1 || message.length < 1){
				alert("Please enter a value for each field!");
				return;
			}
			
			$.ajax({
				type: "POST",
				url: "<?php echo $www; ?>/scripts/sendMail.php",
				data: { name: name, sendersEmail: sendersEmail, message: message }
			}).done(function( msg ) {
				alert( "Data Saved: " + msg );
			});   

		}

	</script>



	<!-- PHP relative link variable -->
	<?php $www = get_bloginfo('template_directory') ?>

	<!-- Custom styles for this template -->
	<link href="<?php echo $www; ?>/styles/cssRenegade.css" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>

  	<body>
  		<div class="container">
  			<!-- Header Start -->
			<div class="row" style="height:140px;">
				<div class="col-md-6 height100">
					<img src="<?php echo $www; ?>/images/logo.png" class="renegadeLogo" />
				</div>

				<div class="col-md-6 height100 ">


					<div class="height50" style="padding-top:25px">
						<ul class="navbar">
							<li class="floatLeft"><a class="navbarText black" href="#">ABOUT</a></li>
							<li class="floatLeft"><a class="navbarText black" href="#">SHOP</a></li>
							<li class="floatLeft"><a class="navbarText black" href="#">RANGE</a></li>
							<li class="floatLeft"><a class="navbarText black" href="#">DESIGNS</a></li>
							<li class="floatLeft"><a class="navbarText black" href="#">CASE STUDIES</a></li>
							<li class="floatLeft"><a class="navbarText black" href="#">CONTACT</a></li>
						</ul>					
					</div>

					<div class="height50">	
						<table style="position:absolute;bottom:0">
							<tbody>
								<tr>
									<td style="padding:10px"><span class="glyphicon glyphicon-envelope"></span></td>
									<td class="blackBackground" style="padding:10px 40px 10px 40px"><p class="normalText white noMargin">INFO@COMPANYNAME.COM</p></td>
									<td style="padding:10px"><span class="glyphicon glyphicon-earphone"></td>
									<td class="redBackground" style="padding:10px 40px 10px 40px"><p class="normalText white noMargin">01244 000 000</p></td>
								</tr>
							</tbody>
						</table>					
					</div>
					
				</div>
			</div>
			<!-- Header End -->

			<!-- Slide Show Start -->

			<!-- Slide Show End -->

			<!-- Second Row Start-->
			<div class="row">
				<div style="height:350px">
					<div id="divShopNow" class="col-md-6 center height100Percent imgCenterResize" style="height:100%">
						<a class="whiteBoxLinkLarge" href="#">SHOP NOW</a>
					</div>
					<div id="divInstructorRanges" class="col-md-6 center height100Percent imgCenterResize">
						<a class="whiteBoxLinkLarge" href="#">INSTRUCTOR RANGES</a>
					</div>
				</div>
			</div>
			<!-- Second Row End -->

			<!-- Third Row Start -->
			<div class="row">
				<div style="height:250px">
					<div id="divMens" class="col-md-3 center height100Percent imgCenterResize">
						<a class="whiteBoxLinkMedium" href="#">MENS</a>
					</div>
					<div id="divWomens" class="col-md-3 center height100Percent imgCenterResize">
						<a class="whiteBoxLinkMedium" href="#">WOMENS</a>
					</div>
					<div id="divCoachAndAthlete" class="col-md-3 center height100Percent imgCenterResize">
						<a class="whiteBoxLinkMedium" href="#">COACH & ATHLETES</a>
					</div>
					<div id="divAccessories" class="col-md-3 center height100Percent imgCenterResize">
						<a class="whiteBoxLinkMedium" href="#">ACCESSORIES</a>
					</div>
				</div>
			</div>
			<!-- Third Row End -->

			<!-- Fourth Row Start -->
			<div class="row">
				<p class="title black center">YOU MAY ALSO LIKE</p>					
			</div>
			<div class="row">				
				<div class="col-md-3 height100 centerMiddle">
					<img src="<?php echo $www; ?>/images/shopping/diamondmesh.jpg" />
					<p class="shoppingTitle black center noMargin">DIAMOND MESH GRAPHIC TANK</p>
					<p class="shoppingSubTitle red noMargin">WOMEN STUDIO</p>
					<p class="shoppingPrice black">£20</P>
				</div>
				<div class="col-md-3 height100 centerMiddle">
					<img src="<?php echo $www; ?>/images/shopping/lesmillscycletee.jpg" />
					<p class="shoppingTitle black center noMargin">LES MILLS CYCLE TEE</p>
					<p class="shoppingSubTitle red noMargin">MENS STUDIO</p>
					<p class="shoppingPrice black">£30</P>
				</div>
				<div class="col-md-3 height100 centerMiddle">
					<img src="<?php echo $www; ?>/images/shopping/lesmillspolycotton.jpg" />
					<p class="shoppingTitle black center noMargin">LES MILLS POLY TANK</p>
					<p class="shoppingSubTitle red noMargin">MENS STUDIO</p>
					<p class="shoppingPrice black">£25</P>
				</div>
				<div class="col-md-3 height100 centerMiddle">
					<img src="<?php echo $www; ?>/images/shopping/lesmillsgrittee.jpg" />
					<p class="shoppingTitle black center noMargin">LES MILLS GRIT TEE</p>
					<p class="shoppingSubTitle red noMargin">MENS STUDIO</p>
					<p class="shoppingPrice black">£30</P>
				</div>									
			</div>
			<!-- Fourth Row End -->

			<!-- Fifth Row Start -->
			<div id="divRow5Container" class="row imgCenterResize">
				<div>
					<div class="row">
						<p class="title white center">CONTACT US</p>
						<div class="input-group" style="width:450px;margin:auto">
							<input id="txtInputName" type="text" class="form-control" placeholder="NAME"/>
							<span class="input-group-addon"></span>
							<input id="txtInputEmail" type="text" class="form-control" placeholder="EMAIL"/>
						</div>

						<div class="input-group" style="width:450px;margin:auto;margin-top:30px">
							<textarea id="txtInputMessage" class="form-control" rows="6" id="comment" placeholder="MESSAGE"></textarea>
						</div>

						<div style="width:100%;text-align: center;margin-top:20px;margin-bottom:20px">
							<button type="button" class="redButton" onclick="sendEmail()">SEND</button>
						</div>
					</div>
				</div>
			</div>


			<!-- Fifth Row End -->

			<!-- Sixth Row Start -->
			<div class="row">

				<p class="title black center noMargin">SOCIAL</p>
			</div>
			<div class="row">				
				<div style="height:250px">
					<div id="divRow5Cell1" class="col-md-3 height100Percent imgCenterResize">

					</div>
					<div id="divRow5Cell2" class="col-md-3 height100Percent imgCenterResize">

					</div>
					<div id="divRow5Cell3" class="col-md-3 height100Percent imgCenterResize">

					</div>
					<div id="divRow5Cell4" class="col-md-3 height100Percent imgCenterResize">

					</div>		
				</div>			
			</div>
			<!-- Sixth Row End -->

			<!-- Seventh Row Start -->
			<div id="divRow7Container" class="row imgCenterResize">
				
				<div style="height:200px">
					<div class="col-md-2 height100Percent centerMiddle">
						<div class="alignLeft">
							<p class="footerTitle red noMargin">ADDRESS</p>
							<p class="footText white noMargin">Line 1,</p>
							<p class="footText white noMargin">Line 2,</p>
							<p class="footText white noMargin">London</p>
							<p class="footText white noMargin">POSTCODE</p>
						</div>						
					</div>
					<div class="col-md-2 height100Percent centerMiddle">
						<div class="alignLeft">
							<p class="footerTitle red noMargin">CONTACT</p>
							<p class="footText white noMargin">T: +44 (0) 0000 000000</p>
							<p class="footText white noMargin">E: info@companyname.com</p>
						</div>	
					</div>
					<div class="col-md-2 height100Percent centerMiddle">
						<div class="alignLeft">
							<p class="footerTitle red noMargin">LINKS</p>
							<p class="footText white noMargin">Shop</p>
							<p class="footText white noMargin">Range</p>
							<p class="footText white noMargin">Brands</p>
							<p class="footText white noMargin">Case Studies</p>
						</div>	
					</div>
					<div class="col-md-2 height100Percent centerMiddle">
						<div class="alignLeft">
							<p class="footerTitle red noMargin">MEDIA</p>
							<p class="footText white noMargin">Brochure Download</p>
							<p class="footText white noMargin">Watch our Videos</p>
						</div>	
					</div>		
					<div class="col-md-2 height100Percent centerMiddle">
						<div class="alignLeft">
							<p class="footerTitle red noMargin">LEGAL</p>
							<p class="footText white noMargin">Legal Notice</p>
							<p class="footText white noMargin">Privacy Policy</p>
						</div>	
					</div>	
					<div class="col-md-2 height100Percent centerMiddle">
						<div class="alignLeft">
							<p class="footerTitle red noMargin">TRANSLATOR</p>
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Language
									<span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="#">English</a></li>
										<li><a href="#">Cymraeg</a></li>
										<li><a href="#">French</a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>
				<div class="legalPadding">
					<p class="footText white noMargin alignRight">© Copyright 2016 Armstrong Partnerships</p>
				</div>			
			</div>


			<!-- Seventh Row End -->
		</div>
		

	</body>
</html>
