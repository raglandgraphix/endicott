<?php
    session_start();
	$firstname = $_POST["firstName"];
	$lastname = $_POST["lastName"];
	$apparel = $_POST["apparel"];
	$wednesday = $_POST["wednesday"];
	$thursday = $_POST["thursday"];
	$meal = $_POST["meal"];
	switch ($apparel) {
		case 'small':$apparel = 'Small';			
		break;
		case 'medium':$apparel = 'Medium';			
		break;
		case 'large':$apparel = 'Large';			
		break;
		case 'extralarge':$apparel = 'Extra Large';			
		break;
		case 'extra2large':$apparel = '2XL';			
		break;
		case 'extra3large':$apparel = '3XL';			
		break;
	}
	switch ($wednesday) {
		case 'golf':$wednesday = 'Golfing';			
		break;
		case 'fishing':$wednesday = 'Fishing';			
		break;
		case 'spa':$wednesday = ' Using the Spa';			
		break;
		
	}
	switch ($thursday) {
		case 'golf':$thursday = 'Golfing';			
		break;
		case 'fishing':$thursday = 'Fishing';			
		break;
		case 'spa':$thursday = ' Using the Spa';			
		break;
		
	}
	switch ($meal) {
		case 'seaBass':$meal = 'Grilled Sea Bass with Madiera Reduction and Morel Mushrooms';			
		break;
		case 'mignon':$meal = 'Grilled Prime Center Cut Filet Mignon with Truffle Demi-Glace';			
		break;
		case 'Prawns':$meal = 'Linguini with Jumbo Prawns, Lobster Cognac Sauce';			
		break;
		
	}
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="robots" content="noindex,nofollow" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>HTML</title>
		<meta name="description" content="">
		<meta name="author" content="jragland">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<h4>Thank you for registering <?php echo $firstname ?> !</h4>
		<p>You have chosen the following activities and meal for the Endicott Top Ten:</p>
		<p>Wednesday you will be <?php echo $wednesday ?>.</p>
		<p>Thursday you will be <?php echo $thursday ?>.</p>
		<p>The meal you chose was <?php echo $meal ?>.</p>
		<p>The shirt size you have chosen is <?php echo $apparel ?>.</p>
		<h4> If any of these are incorrect please contact Lisa Specht at 402-729-3315.</h4>
	</body>
	<?php 
		$emailNote = $firstname." ".$lastname." has registered for the Top Ten. \n Apparel Size: ".$apparel."\n Wednesday Activity: ".$wednesday."\n Thursday Activity: ".$thursday."\n Meal Selected: ".$meal."."
		$header = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
		mail("jragland@endicott.com",'Job Applicant',$emailNote,$header);
	?>
</html>
