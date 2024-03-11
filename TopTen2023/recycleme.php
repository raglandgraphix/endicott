<?php
     $user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$state = $geo["geoplugin_regionName"];

print $state;

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<title>Endicott contacts </title>
		<meta name="description" content="Face brick, Thin brick, Pavers, and tile from Endicott Clay Products are the choice of top architects. Choose from our Face Brick, Thin Brick, Pavers, Tile. " />
		<meta name="google-site-verification" content="PemXSIP_8nXP8tbIgt8LYTXIDJlbQtAhdT-FEWh2zJ8" />
		<meta name="keywords" content="Brick, Face Brick, Endicott, architect, Thin Brick, Pavers, Tile " />
		<meta name="robots" content="index, follow" />
		<link type="text/css" rel="stylesheet" href="css/endicottFonts.css" />
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> 
		<script type="text/javascript" src="js/headerFooter8-14-burger.js"></script>
		<style>			
			#holderWrapper{
				position:relative;
				width:100vw;
				text-align:center;
				font-family:'endicottUnivers47Con';
				overflow:hidden;
				white-space:normal;
				padding:0px;
				margin:0px;				
			}
			#centeringWrapper{
				display:inline-block;
				text-align:left;
				/*width:95%;*/
				width: 95%;
				margin:0;
				padding:0  0 0 0;
				
			}
			
			.personnel{
				position:relative;
				padding:5px;
				margin:0;
				width:300px;
				display:inline-block;
				color:white;
				vertical-align: top;
				
				
				
			}
			.personnel img{
				width:100%;
				margin:0;
				padding:0px;
				
				
			}
			.personnel h3{
				position:relative;
				margin:0;
				padding:0;
				color:#c68967;
			}
			.personnel p{
				position: relative;
				margin:0px;
				padding:0px;
			}
			.smaller{
				font-size:.9em;
				font-family:'endicottUnivers47ConObl';
				
			}
			.vcard{
				cursor:pointer;
				font-family:'endicottUnivers47ConObl';
			}
			.title{
				color:#ce993c;
			}
			
		</style>
		
	</head>
	<body>
		<div id="wrapper"><div id="fullLength"></div>
			<!-- The nav Div is where the menu is added depending on what size screen is being used -->
			<div id="nav" ></div><!--The nav div is intentionally left empty, to allow it to be populated by the "headerFooter.js" file-->
			<span class="stretch"></span><!-- The "stretch" class span tag is left open as to allow the nav to function correctly for spacing-->
			<div id="header" >
				<div id="logo">
				</div>				
			</div>
			<div><p class="pageDescriptionECP">Contacts</p></div>				
		
		<div id="holderWrapper">
			<div id="centeringWrapper">
				
			</div>
			
		</div>
		</div>
		<div id="copywrite">Copywrite Endicott Clay Products Company</div>
		
		
		
	</body>
	
</html>