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
		<title>Endicott Top Ten</title>
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
				background:url(TorreyPinesCourse2.jpg)no-repeat center ;
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
				<div class="col" >
					<p style="display: inline-block; font-weight: bolder">Hat Size</p>	
					<select id="apparel" required name="hat">
						<option value="">Select Size</option>
						<option value="smallMed">S/M</option>
						<option value="largeXlarge">L/XL</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col" style="border-bottom:thin solid black; border-top: medium double black;">
					<h4 style="margin-top: 25px;margin-bottom: 25px;">Choose an activity for each day.</h4>
				</div>
			</div>

			<div class="row " style="border-bottom:solid thin black;">
				
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
				
				<div class="col">
				<div class="row"style="text-align: center; ">
						<div class="col" style="padding-top: 5px;">
							<p style="display: inline-block; font-weight: bolder">Banquet Entr&#233;e (choose 1) </p>
								<select id="meal" required name="meal">
									<option value="" selected>Select</option>
									<option value="vegetable">Roasted Vegetable Stack</option>
									<option value="bass">Miso Marinated Sea Bass</option>
									<option value="mignon">Grilled Filet Mignon</option>
								</select>
						</div>
					</div>
				</div>
					


				
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
					<p>&bull;<span class="tabIn">Golfing - <a href="https://www.lodgetorreypines.com/golf-course-information" target="_blank">Torrey Pines Golf Course</a> </span><br>
					<span class="tabIn">&nbsp;&nbsp;Wednesday, April 24, 2024  - Torrey Pines Golf Course - North Course</span><br>
					<span class="tabIn">&nbsp;&nbsp;Thursday, April 25, 2024 – Torrey Pines Golf Course - South Course</span><br>	
					</p>
					
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p>&bull;<span class="tabIn"> Fishing -  Guided Fishing provided by <a href="https://fishingbooker.com/charters/view/5602?booking_days=1&booking_persons=2&booking_children=0" target="_blank">San Diego Charters.</a> <br></span>
					<span class="tabIn">&nbsp;&nbsp;Deep Sea Fishing/Full Day – Wednesday, April 24, 2024.<br></span>
						<span class="tabIn">&nbsp;&nbsp;Bay Fishing/4 Hours – Thursday, April 25, 2024.<br></span>
						
						</p>
						
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p><span style="margin-right: 10px">&bull;</span><span >Spa - <a href="https://www.lodgetorreypines.com/spa" target="_blank">The Spa at Torrey Pines</a> </span>
					<div style="padding-left: 15px;margin-top: -15px;"><span  >The Spa at Torrey Pines is a world-class, full service facility specializing in marine, anti-aging and restorative treatments utilizing products from EmerginC Organics, SkinCeuticals, Voya, and Farmhouse Fresh. Our service offerings include therapeutic massage, anti-aging facials, soothing body wraps, hydrotherapy and luxurious manicures and pedicures. Each and every service incorporates a personalized touch to meet the individual needs and expectations of our guests.</span></div><br>
					<span class="tabIn">The guest is responsible for booking their own spa appointment, Endicott will provide a spa credit of up to $175 per day. Note, guests will not be allowed to use the spa credit if golfing or fishing on that day. </span><br>	
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
					$("#day1Img").attr('src','TorreyPinesCourse.jpg');
				}else if(day1Selection=='fishing'){
					$("#day1Img").attr('src','bronson.jpg');
				}else if(day1Selection=='spa'){
					$("#day1Img").attr('src','spa.jpg');
				}
			};
			
			
			if(day2Selection==''){
				$("#selDay2").css({"color":"rgba(200,200,200,1)"});
				$("#day2Img").attr('src','choose.jpg');
			}else{
				$("#selDay2").css({"color":"black"});
				if(day2Selection=='golf'){
					$("#day2Img").attr('src','TorreyPinesCourse.jpg');
				}else if(day2Selection=='fishing'){
					$("#day2Img").attr('src','bronson.jpg');
				}else if(day2Selection=='spa'){
					$("#day2Img").attr('src','spa.jpg');
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