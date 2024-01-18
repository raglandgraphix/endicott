<?php
//session_start();
//The below variables are for the Local server.....................................
	//$servername = "localhost";
	//$username = "endicot1_john";
	//$password = "Ilikerockets!";
	//$dbname = "endicot1_ceuclasses";
//	$conn = new mysqli($servername, $username, $password,$dbname);
	//$phone;
	//if($conn->connect_error) {
	//	die('connection failed:' . $conn->connect_error);
	//}
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KTTHHV8');</script>
	<!-- End Google Tag Manager -->
		<meta charset="utf-8" />
		<meta name="google" content="notranslate">
		<meta http-equiv="Content-Language" content="en">
		<meta name="author" content="John Ragland - Ragland Graphix" />
		<meta property="og:title" content="Endicott's New INVISI-LUG Paver" />
		<meta property="og:image" content="http://www.endicott.com/assets/faceBrick/yale.jpg" />
		<meta property="og:image:width" content="200" />
		<meta property="og:image:height" content="100" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="Endicott Clay Products Company is a  manufacturer of Face Brick, Thin Brick, Pavers, and Tile. " />
		<meta property="og:site_name" content="Endicott Clay Products Company/Endicott Thin Brick & Tile, LLC" />
		<meta property="og:url" content="http://www.endicott.com" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<title>INVISI-LUG&trade; Endicott</title>
		<meta name="description" content="Face brick, thin brick, Pavers, and tile,Colors,Endicott Clay Products, Proudly Made in the U.S.A. since 1920." />
		<meta name="google-site-verification" content="PemXSIP_8nXP8tbIgt8LYTXIDJlbQtAhdT-FEWh2zJ8" />
		<meta name="keywords" content="Brick,Colors, Face  Brick,facebrick,face, Endicott, architect, Thin Brick,thinbrick,thin,precast, Pavers, Tile, precast prestressed, concrete institute.  " />
		<meta name="robots" content="index, follow" />
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link type="text/css" rel="stylesheet" href="css/endicottFonts.css" />
		<!-- <link type="text/css" rel="stylesheet" href="css/menu.v1.css" /> -->
		<link rel="canonical" href="http://endicott.com">
		<link type="text/css" rel="stylesheet" href="css/endicottHomePage.css" />
		<!-- <script type="text/javascript" src="js/menu.v2.js"></script> -->
		<link rel="stylesheet" href="css/bootstrap/bootstrap.css" />
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

		
		<style>
			#invisi-lug_main{
				width: 100%;

/*				height: 1000px;*/
/*				background-color: tan;*/
				
			}
			#invisi-lug_stationary{
				width: 100%;
				
/*				height: 1000px;*/
/*				display: inline-block;*/
				

			}
			#invisi-lug_scroller{
				width: 100%;
				min-width: 300px;
				border: none;
			}
			#invisi-lug_CTA{
				margin-top: 25px;
				margin-bottom: 25px;
				box-shadow: 3px 3px 5px grey;
			}
			
			#invisi-lug_logoHolder{
				width: 100%;
				background-color: white;
				text-align: center;
				position: fixed;
				border-bottom: thin solid grey;
				box-shadow: 0px 3px 5px grey;
				cursor: pointer;


			}
			#invisi-lug_logo{
				height: 50px;
			}
			#invisi-lug_hero{
				padding-top: 125px;
				width: 100%;
				text-align: center;
				
				
				
			}
			#invisi-lug_hero h3{
				margin-bottom: 50px;
				font-size: 1.3em;
			}
			#invisi-lug_photo{
				width: 100%;
				margin-bottom:15px;
			}

				.invisi-lug_image{
					width: 98%;
					border: black medium solid;

				}

				#invisi-lug_slider{
					/*overflow: scroll;
					overflow-x: hidden;
					height: 1500px;*/
				}

				
				.invisi-lug_mt{
					margin-top: 15px;
					padding: 5px;
					text-align: center;
					
					
				}
				.invisi-lug_caption{
					padding-left:5px;
					padding-right: 5px;
					text-align: left;
					margin-left: 5px;
				}
				.invisi-lug_sleeve{
					text-align: center;
				}
				.invisi-lug_sleeve ul{
					text-align: left;
				}
				.invisi-lug_sleeve h4{
					font-size: 1.5em;
				}
				#copyrightBar{
					height: 55px;
					width: 100%;
					background-color: grey;
					text-align: center;
					
				}
				#invisi-lug_buttonHolder{
					width: 100%;
					text-align: center;
				}
				figure{
					background-color: #efefef;
					padding-bottom: 15px;
					border: thin solid #d3d3d3;
					margin-top: 35px;
				}
				figcaption{
					padding-top: 25px;
				}

				#invisi-lug_form{
					position: fixed;
					font-family: endicottUnivers45Light;

					width: 100vh;

					height:100vh;
					top: 85px;
					z-index: -1;
					background-color: grey;
					background-color:rgba(0, 0, 0, 0);
					opacity: 0;
				}
				#invisi-lug_ty{
					position: fixed;
					font-family: endicottUnivers45Light;
					width: 100vh;
					height:100vh;
					top: 85px;
					z-index: -1;
					background-color: grey;
					background-color:rgba(0, 0, 0, 0);
					
				}
				#invisi-lug_formNav{
					width: 100%;
					height: 40px;
					background-color: #c7c8e6;
					border-radius: 15px 15px 0px 0px ;
					padding-left: 5px;
					padding-right:15px;
					padding-top: 5px;
					
				}
				#invisi-lug_formNav p{
					display: inline;


				}
				#invisi-lug_formClose{
					float: right;
					border: thin solid black;
					padding: 1px;
					padding-left: 2px;
					padding-right: 2px;
					cursor: pointer;
				}

				#invisi-lug_fsheet{					
					position: sticky;
					width: 95vw;
					max-width: 600px;
/*					height: 87vh;*/
					margin-left: 2vw;
					margin-top: 15px;
					background-color: rgba(255, 255, 255, 1.0);
					border:thin solid black;
					box-shadow: 3px 3px 7px black;
					border-radius: 15px;
					


				}
				#invisi-lug_tySheet{
					position: sticky;
					width: 95vw;
					height: 50vh;
					margin-left: 2vw;
					margin-top: 15px;
					background-color: rgba(255, 255, 255, 1.0);
					border:thin solid black;
					box-shadow: 3px 3px 7px black;
					border-radius: 15px;
					padding: 15px;
				}

				#invisi-lug_fsheet p{
					margin-bottom:3px;
					margin-left: 10px;

				}

				#invisi-lug_fsheet input{
					margin-top:0px;
					margin-bottom: 15px;
					margin-left: 10px ;
					max-width: 500px;
				}
				.thirty2{
					width:75vw;
				}
				/*#invisi-lug_submit{
					
					margin-left: 15px;
					margin-bottom: 30px;

				}*/
				#invisi-lug_wc{
					margin-top: 50px;
					float: right;
					text-decoration: underline;
					cursor: pointer;
				}


			@media screen and (min-width:1000px){

				#invisi-lug_main{
					height: 100vh;
					overflow: scroll;
					
				}
				#invisi-lug_stationary{
					position: fixed;
					width:70%;

				}
				
				#invisi-lug_scroller{
					width:28%;
					float: right;
					margin-top: 75px;
					padding-top:20px;
					overflow-y: scroll;
					height: auto;
					border: thin solid grey;
					box-shadow: -3px 0px 5px grey;
					




				}
				/*#invisi-lug_hero{
					width: auto;
					border:thin solid blue;
					height:100px%;
					
				}*/
				#invisi-lug_hero h3{
					font-size: 2em;
				}
				#invisi-lug_photo{
					
				width: auto;
				
				height: 60vh;
				
				
				}
				

				

				#copyrightBar{
				position: absolute;
				bottom: 0px;
			}
			

			}

			@media screen and (max-height:900px)and (min-width:1000px){
				#invisi-lug_photo{
					height: 50vh;
					width: auto;
				}
			}

			.invisi-lug_smallTM{
				font-family: endicottUnivers47ConObl;
				font-size: .95em;
			}
			#copyrightBar img{
				height: 30px;
				margin: 10px;
			}
			
			.inline{
				display: inline-block;
			}
			
		</style>
	</head>
	<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTTHHV8"
	 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	 <!-- End Google Tag Manager (noscript) -->
		


		
		<div id="invisi-lug_main">
			<div id="invisi-lug_stationary">
			
			<div id="invisi-lug_logoHolder">
				<img id="invisi-lug_logo" src="assets/LogoE.png">
				<h4>INVISI-LUG<span class="invisi-lug_smallTM">&#8482;</span> CLAY PAVERS</h4>
			</div>
			<div id="invisi-lug_hero">
				<h3 class="color_endicott h3-2 ">BUILDING LEGACIES FROM THE GROUND UP</h3>
				<video width="100%" muted loop autoplay playsinline>
					<source src="assets/video/invisilug_home1080.mp4" type="video/mp4">
				</video>
				<!-- <img id="invisi-lug_photo" src="invisi-lug_assets/invisi-lug_nobackground.png"> -->
				<div id="invisi-lug_buttonHolder"><button type="button" class="btn btn-secondary" id="invisi-lug_CTA">CONTACT US</button></div>
				
			</div>


		</div>
		<div id="invisi-lug_scroller">
			
			<div id="invisi-lug_slider">
				
<div class="invisi-lug_sleeve">
				<!-- <h3 class="invisi-lug_mt">Why Are INVISI-LUG<span class="invisi-lug_smallTM">&#8482;</span> Pavers Better?</h3> -->
				<h4 class="invisi-lug_mt invisi-lug_caption ">New INVISI-LUG&trade; clay pavers from Endicott give you everything you have wanted in a paver:</h4>
				<ul>
					<li>A recessed lug that provides proper joint spacing to eliminate chippage</li>
					<li>Because its lugs are recessed it leaves a crisp, square edge</li>
					<li>Eliminates the need for buying plastic spacers, saving substantial cost</li>
					<li>Improved speed of installation</li>
					<li>Superior joint line appearance</li>
					<li>Full and proper joint spacing on sand-set pavers promotes interlock
				</ul>
					<h5 class="invisi-lug_mt invisi-lug_caption ">INVISI-LUG&trade; Paver benefits are in addition to the traditional benefits of using Endicott clay pavers:</h5>
					<ul>
					<li>Vibrant colors, including ironspots, that other materials cannot mimic</li>
					<li>Colorfast</li>
					<li>Durable</li>
					<li>Incredibly high compressive strength</li>
				</ul>
				<!-- <h5 class="invisi-lug_mt invisi-lug_caption ">With Endicott's INVISI-LUG&TRADE; pavers, you get everything you have wanted.</h5> -->
				<figure>
					<figcaption><h5>AVOID THIS</h5></figcaption>
					<img class="invisi-lug_image"  src="invisi-lug_assets/chipped.jpg">
				</figure>
				<figure>
					<figcaption><h5>GET THIS INSTEAD!</h5></figcaption>
					<img class="invisi-lug_image"  src="invisi-lug_assets/dublin_joint.png">
				</figure>
				
				
			</div>
			
			
			
			<div class="invisi-lug_sleeve">
				<br>
				<br>
				<br>
			</div>

			</div>
			


			
				

		</div>
		</div>
		<div id="invisi-lug_form">
			<form id="invisi-lug_fsheet" method="post" action="" >
				<div id="invisi-lug_formNav"><p>CONTACT INFORMATION<p><p id="invisi-lug_formClose">X</p></div>
				<p>First Name</p>
				<input type="text" class="thirty2" name="first_name" maxlength="32" required >
				<p>Last Name</p>
				<input type="text" class="thirty2" name="last_name" maxlength="32" required >
				<p>Company Name</p>
				<input type="text" class="thirty2" name="company_name" maxlength="32" required >
				<p>Email</p>
				<input type="email" class="thirty2" name="email" maxlength="32" >
				<p>Phone Number</p>
				<input type="phone" class="thirty2" name="phone" maxlength="32" >
				<p class="inline">By checking this box, you agree to be contacted by Endicott.</p><input type="checkbox" required name="agree" /><br>
				<input id="invisi-lug_submit" type="submit"  value="SUBMIT">
				
			</form>
			
		</div>

		<div id="invisi-lug_ty">
			<div id="invisi-lug_tySheet">
				<h3>THANK YOU!</h3>
			<p>Thank you for your interest in Endicott INVISI-LUG&trade; pavers. Someone will be reaching out to you soon.</p>
			<p id="invisi-lug_wc">CLOSE THIS BOX</p>
			</div>

			
		</div>
		<div id="copyrightBar"><img src="assets/socialMedia/twitter.png"><img src="assets/socialMedia/facebook.png"><img src="assets/socialMedia/Instagram.png"><img src="assets/socialMedia/blackLinkedIn.png"><img src="assets/socialMedia/youtube.png"><img src="assets/socialMedia/Black_Mortarr_Logo.png"></div>
		<script type="text/javascript">

			var ty = sessionStorage.getItem('val');
			if(ty=="yes"){
				$("#invisi-lug_ty").css({'opacity':1,'z-index':1});
			 }else{
			 	$("#invisi-lug_ty").css({'opacity':0,'z-index':-1});
			 }
			
			function thankyou(){
				$("#invisi-lug_form").css({'opacity':0,'z-index':-1});
				$("#invisi-lug_ty").css({'opacity':1,'z-index':1});
				
			}
			 $("#invisi-lug_CTA").on("click",function(){$("#invisi-lug_form").css({'opacity':1,'z-index':1})});
			 $("#invisi-lug_formClose").on("click",function(){$("#invisi-lug_form").css({'opacity':0,'z-index':-1})});
			 $("#invisi-lug_wc").on('click',function(){$("#invisi-lug_ty").css({'opacity':0,'z-index':-1});
				sessionStorage.setItem('val','no');
				});
			$("#invisi-lug_logoHolder").on("click",function(){window.location='https://www.endicott.com'});
			
		</script>
		<?php
			foreach($_POST as $key => $value){
				$$key = $value;
			};
			//$onArray=array('first_name','last_name','company_name','email','phone');
			// foreach ($onArray as $key => $value) {
			// 	if(isset($_POST[$value])){
			// 		$$value='Yes';
			// 	}else{
			// 		$$value='No';
			// 	};
			// };
			//$_SESSION['fullName']=$first_name." ".$last_name;
			$emailNote = "The following is a request for Invisilug paver information."."\nName:".$first_name." ".$last_name."\nCompany:".$company_name."\nEmail: ".$email."\nPhone Number".$phone;

			 if(isset($_POST['agree'])){
				
				mail("jragland@endicott.com",'INVISI-LUG Lead',$emailNote);
				$_POST['agree']=0;
				// echo "<script>sessionStorage.setItem('tyVal',1);</script>";
				echo '<script>sessionStorage.setItem("val","yes"); thankyou();</script>';

			 }
		?>
		
	</body>
	<script type="text/javascript">
			if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
		</script>
</html>
