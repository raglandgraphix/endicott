<?php
	session_start();
	// $firstName=$_SESSION[firstName];
	// $lastName=$_SESSION[lastName];
	// if(!$firstName){
		// $firstName ='First Name';
	// }
// 	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="John Ragland - Ragland Graphix" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<meta name="robots" CONTENT="noindex,nofollow">		
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<title>Endicott Top Ten 2023</title>
		<!-- <meta name="robots" content="index, follow" /> -->
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<link type="text/css" rel="stylesheet" href="css/endicottFonts.css" />
		<!-- <link type="text/css" rel="stylesheet" href="css/endicottHomePage.css" /> -->
		<link rel="stylesheet" href="css/bootstrap/bootstrap.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<style>
			#header{
				height:200px;
				background-color:brown;
				background:url(twinWarriors2.jpg)no-repeat center bottom ;
				-webkit-background-size: cover;
  				-moz-background-size: cover;
  				-o-background-size: cover;
  				background-size: cover;
			}
			#selDay1{
				/*color:rgba(200,200,200,1);*/
			}
			.tabIn{
				padding-left:15px;
			}

		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row" id="header">
				<div class="col">
					<img src="EndicottClayWhite.png" style="height:75px;margin-top:70px;" />
				</div>
			</div>
			<form action="thankyou.php" method="post" >
			<div class="row">
				<div class="col">
					<h4>Personal Information</h4>
				</div>
			</div>
			<div class="row" style="padding-top: 15px;">
				<div class="col" >
					<p style="display: inline-block; font-weight: bolder">First Name</p>
					<input id="firstName" type="text" style="margin-bottom: 15px" value="" required name="firstName" value="" />	
				</div>
				<div class="col" >
					<p style="display: inline-block; font-weight: bolder">Last Name</p>
					<input type="text" style="margin-bottom: 15px" value="" required name="lastName" value="" />	
				</div>
				<div class="col" >
					<p style="display: inline-block; font-weight: bolder">Apparel Size</p>	
					<select id="apparel" required name="apparel">
						<option value="">Select Size</option>
						<option value="small">S</option>
						<option value="medium">M</option>
						<option value="large">L</option>
						<option value="extralarge">XL</option>
						<option value="extra2large">XXL</option>
						<option value="extra3large">XXXL</option>
					</select>
					
				</div>
			</div>
			<div class="row">
				<div class="col" style="border-bottom:thin solid black; border-top: medium double black;">
					<h4 style="margin-top: 25px;margin-bottom: 25px;">Choose an activity for each day.</h4>
				</div>
			</div>

			<div class="row " style="border-bottom:solid thin black;">
				<div class="col-sm-2" style="border-right:thin solid black"></div>
				<div class="col-sm-4" style="border-right:thin solid black">
					<div class="row" style="text-align: center;">
						<div class="col" style="padding-top: 5px">
							<p style="display: inline-block; font-weight: bolder">Wednesday Activity</p>
								<select id="selDay1" required name="wednesday">
									<option value="" selected>Select</option>
									<option value="golf">Golf</option>
									<option value="fishing">Fishing</option>
									<option value="spa">Spa</option>
								</select>
						</div>
					</div>
					<div class="row">
						<div class="col" style="height:400px;overflow: hidden;">
							<img style="height: 100%" id="day1Img" class="img-responsive" src="choose.jpg" />
						</div>
					</div>
								
				</div>
			
				<div class="col-sm-4" style="border-right:thin solid black;">
					<div class="row"style="text-align: center; ">
						<div class="col" style="padding-top: 5px;">
							<p style="display: inline-block; font-weight: bolder">Thursday Activity</p>
								<select id="selDay2" required name="thursday">
									<option value="" selected>Select</option>
									<option value="golf">Golf</option>
									<option value="fishing">Fishing</option>
									<option value="spa">Spa</option>
								</select>
						</div>
					</div>
					<div class="row">
						<div class="col" style="height:400px;overflow: hidden;">
							<img style="height: 100%" id="day2Img" class="img-responsive" src="choose.jpg" />
						</div>
					</div>
								
				</div>
				
				<div class="col-sm-2"></div>
					


				
			</div>
			<div class="row">
				<div class="col" style="text-align: center;margin-top: 15px;">
					<button type="submit" style="margin-bottom: 15px">SUBMIT</button>
				</div>
			</div>
			</form>



			<div class="row">
				<div class="col">
					<h4>Activity Descriptions</h4>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p>&bull;<span class="tabIn">Golfing - <a href="https://mynewmexicogolf.com/twin/" target="_blank">Twin Warriors Golf Club</a></span><span class="">, <a href="https://www.sandiagolf.com/" target="_blank">Sandia Golf Club</a> </span><br>
					<span class="tabIn">&nbsp;&nbsp;Wednesday, April 26, 2023 &mdash; Twin Warriors Golf Club</span><br>
					<span class="tabIn">&nbsp;&nbsp;Thursday, April 27, 2023 &mdash; Sandia Golf Course</span><br>	
					</p>
					
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p>&bull;<span class="tabIn"> Fishing: </span><br>
					<span class="tabIn">&nbsp;&nbsp;Wednesday, April 26, 2023 &mdash; Full day fishing<br></span>
						<span class="tabIn">&nbsp;&nbsp;Thursday, April 27, 2023 &mdash; Full day fishing<br></span>
						
						</p>
						
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p><span style="margin-right: 10px">&bull;</span><span >Spa - <a href="https://www.hyatt.com/en-US/hotel/new-mexico/hyatt-regency-tamaya-resort-and-spa/tamay/photos-reviews#SPA" target="_blank">SPA SERVICES</a> </span>
					<div style="padding-left: 15px;margin-top: -15px;"><span  >From massage and body experiences to skincare and waxing, The Spa at the Hyatt Regency offers dozens of ways to put mind, body, and spirit in balance.</span></div><br>
					<span class="tabIn">The guest is responsible for booking their own spa appointment. Endicott will provide a spa credit of up to $175 per day.  Note, guests will not be allowed to use the spa credit if golfing or fishing on that day.</span><br>	
					</p>
				</div>
			</div>
		</div>
		<script>
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$("#day1Img, #day2Img").css({'height':'auto','width':'100%'});
		};
		function setvals(){
			var day1Selection = $("#selDay1").val();
			var day2Selection = $("#selDay2").val();
			
			
			if(day1Selection==''){
				$("#selDay1").css({"color":"rgba(200,200,200,1)"});
				$("#day1Img").attr('src','choose.jpg');
			}else{
				$("#selDay1").css({"color":"black"});
				if(day1Selection=='golf'){
					$("#day1Img").attr('src','twinWarriors1.jpg');
				}else if(day1Selection=='fishing'){
					$("#day1Img").attr('src','bronson.jpg');
				}else if(day1Selection=='spa'){
					$("#day1Img").attr('src','hyattspa.png');
				}
			};
			
			
			if(day2Selection==''){
				$("#selDay2").css({"color":"rgba(200,200,200,1)"});
				$("#day2Img").attr('src','choose.jpg');
			}else{
				$("#selDay2").css({"color":"black"});
				if(day2Selection=='golf'){
					$("#day2Img").attr('src','sandia.jpeg');
				}else if(day2Selection=='fishing'){
					$("#day2Img").attr('src','bronson.jpg');
				}else if(day2Selection=='spa'){
					$("#day2Img").attr('src','hyattspa.png');
				}
			};
			
			
			
		};
		setvals();
		$("#selDay1, #selDay2").on('change',function(){
			setvals();
		});
		</script>
	</body>
</html>