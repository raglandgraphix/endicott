<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Endicott Employment Application</title>
		<meta name="description" content="">
		<meta name="author" content="jragland">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link type="text/css" rel="stylesheet" href="css/endicottFonts.css" />
		<link type="text/css" rel="stylesheet" href="css/menu.v1.css" />
		<script type="text/javascript" src="js/angular.min.js"></script>
		<style>
			body{
				font-family:'endicottUnivers47Con';
			}
			form{
				margin-bottom:20px;
			}
			#formWrapper{
				text-align:center;
			}
			#whitePage{
				width:80%;
				height:auto;
				background:#ffffff;
				display:inline-block;
				min-width: 400px;
			}
			#descriptionHolder{
				width:80%;

			}
			.category{
				display:inline-block;
				margin:15px;
				border:medium solid black;
				padding:15px;
				min-width: 300px;
				text-align:left;

			}
			.history{

				border: thin solid grey;
				padding:3px;
				margin-bottom:5px;

			}
			#endingHold{
				text-align:center;
				display:inline-block;
				width:100%;
			}
			.ending{

				display:inline-block;
				width:80%;
				margin:15px;
				border-top:medium dashed black;
				padding:15px;
			}
			#endNote{
				text-align:left;
			}

			.counter{
				display:inline-block;
				padding-left:5px;
				margin-top:0;
				margin-right:3px;
			}
			.inputHold{
				width:100%;

			}

			textarea{
				width:95%;
				min-height:100px;
			}
			#position{
				width:83%;
				/*max-width:500px;*/
				/*vertical-align: top;*/
			}
			.positionBox{
				/*width:200px;*/
			}
			#personalInfo{
				width:83%;
				/*max-width:700px;*/
			}
			#lastName{
				width:27%;

			}
			#lastName input{
				width:80%;
			}
			#middleName{
				width:30%;

			}
			#middleName input{
				width:75%;
			}
			#firstName{
				width:27%;

			}
			#firstName input{
				width:80%;
			}
			#streetAd{
				width:100%;
			}
			#streetAd input{
				width:80%;
			}
			#cityAd{
				width:35%;
				max-width: 400px;
			}
			#cityAd input{
				width:85%;
			}
			#stateAd{
				width:25%;
			}
			#zipAd{
				width:30%;
				max-width: 400px;
			}
			#zipAd input{
				width:70%;
			}
			#homePhone{
				width:45%;
			}
			#homePhone input{
				width:65%;
			}
			#otherPhone{
				width:45%;
			}
			#otherPhone input{
				width:65%;
			}
			.employerName{
				width:100%;
			}
			.employerName input{
				width:80%;
			}
			.employerAddress{
				width:100%;
			}
			.employerAddress input{
				width:87%;
			}
			.employerPhone{

			}
			.employerPHone input{

			}
			.employerJobTitle{

			}
			.employerJobTitle input{

			}
			.employerDuties{

			}
			.employerDuties input{

			}
			.employerStart{

			}
			.employerStar input{

			}
			.employerSalary{

			}
			.employerSalary input{

			}
			.employerReason{

			}
			.employerReason input{

			}
			.workHistory{
				border:medium grey thin;
			}
			#availability,#workHistory,#education,#references,#otherSkills{
				width:83%;
			}
			#setLang{
				cursor:pointer;
			}
			@media screen and (max-width:480px){
				#position{
					max-width:none;
				}
				#availability{
					max-width:450px;
				}
				#streetAd input{
					width:80%;
					max-width:200px;
				}
				#cityAd{
					width:100%;
					max-width: 300px;
				}
				#cityAd input{
					width:65%;
				}
				#stateAd{
					width:100%;
				}
				#zipAd{
				width:100%;
				max-width: 300px;

				}
				#zipAd input{
					width:70%;
				}
				#lastName{
					width:100%;

				}
				#lastName input{
					width:80%;
				}
				#middleName{
					width:100%;

				}
				#middleName input{
					width:75%;
				}
				#firstName{
					width:100%;

				}
				#firstName input{
					width:80%;
				}
				#homePhone{
					width:100%;
				}
				#homePhone input{
					width:65%;
				}
				#otherPhone{
					width:100%;
				}
				#otherPhone input{
					width:65%;
				}
				.employerName{
					width:100%;
				}
				.employerName input{
					width:50%;
				}
				.employerAddress{
					width:100%;
				}
				.employerAddress input{
					width:60%;
				}

			}
			@media (min-width:481px)and (max-width:1000px){

				#position{
					max-width:none;
				}
				#lastName{
					width:27%;

				}
				#lastName input{
					width:65%;
				}
				#middleName{
					width:35%;

				}
				#middleName input{
					width:60%;
				}
				#firstName{
					width:28%;

				}
				#firstName input{
					width:65%;
				}
				#streetAd input{
					width:75%;
					max-width:400px;
				}
				#cityAd{
					width:25%;
					padding:0px;
					margin:0px;
					max-width: 400px;

				}
				#cityAd input{
					width:60%;
				}
				#stateAd{
					width:37%;

				}
				#zipAd{
					width:30%;

					/*max-width: 400px;*/
				}
				#zipAd input{
					width:40%;
				}
				#homePhone{
					width:45%;
				}
				#homePhone input{
					width:50%;
				}
				#otherPhone{
					width:45%;
				}
				#otherPhone input{
					width:50%;
				}
				#availTypes{
					padding:0px;


				}
				#schedAvail h4{
					line-height:0px;
				}
				.employerName{
					width:100%;
				}
				.employerName input{
					width:70%;
				}
				.employerAddress{
					width:100%;
				}
				.employerAddress input{
					width:81%;
				}

			}
			.default{
				color:gray;

			}
			#shiftAvail{
				display: block;
			}
			.red{
				color: red;
			}

		</style>
	</head>
		<body ng-app="application" ng-controller="myApplication">
		<div id="holding_main">
			<p class="pageDescriptionECP" id="pageName">{{lang.pageName}}</p>
			<div id="descriptionHolder">
			</div>
			<div id="formWrapper">
				<p>{{lang.note1}}</p>
				<div id="whitePage">
					<h4 lang={{lang.setLang}} id="setLang" ng-click="changeLanguage()">{{lang.setLangNote}}</h4>
					<form method="post" action="">


						<div class="category" id="position">
							<h3>{{lang.wordPosition}}</h3>
							<div class="inputHold">
								<p >{{lang.posAppliedFor}}</p>
								<div class="counter">
									<div class="counter">
										<p class="counter">(1)</p>
										<select name="jobTitle" id="jobTitle" required >
											<option disabled selected value="" class="default">{{lang.selectOne}}</option>
											<option>{{lang.job1}}</option>
											<option>{{lang.job2}}</option>
											<option>{{lang.job3}}</option>
											<option>{{lang.job4}}</option>
											<option>{{lang.job5}}</option>
										</select>
									</div>

								</div>
								<div class="counter">
									<p class="counter">{{lang.startDate}}</p>
									<input type="date" name="startDate" />
								</div>
							</div>

						</div>

						<div class="category" id="personalInfo">
							<div class="inputHold">
								<h3>{{lang.personalInfoNote}}</h3>
								<h4>{{lang.nameNote}}:</h4>
								<div id="firstName" class="counter"><p class="counter">{{lang.firstName}}</p><input type="text" required value="" name="firstName" /></div>
								<div id="middleName" class="counter"><p class="counter">{{lang.middleName}}</p><input type="text" required value="" name="middleName" /></div>
								<div id="lastName" class="counter"><p class="counter">{{lang.lastName}}</p><input type="text" required name="lastName" /></div>
							</div>
							<div class="inputHold">
								<h4>{{lang.homeAddNote}}:</h4>
								<div id="streetAd" class="counter" >
									<p class="counter">{{lang.street}}</p>
									<input required type="text" name="streetAddress" />
								</div>
								<div id="cityAd" class="counter">
									<p class="counter">{{lang.city}}</p>
									<input type="text" required name="city" />
								</div>
								<div id="stateAd" class="counter">
									<p class="counter">{{lang.state}}</p>
									<select name="state">
										<option>Alabama</option>
										<option>Alaska</option>
										<option>Arkansas</option>
										<option>California</option>
										<option>Colorado</option>
										<option>Connecticut</option>
										<option>Deleware</option>
										<option>Florida</option>
										<option>Georgia</option>
										<option>Hawaii</option>
										<option>Idaho</option>
										<option>Illinois</option>
										<option>Indiana</option>
										<option>Iowa</option>
										<option>Kansas</option>
										<option>Kentucky</option>
										<option>Louisiana</option>
										<option>Maine</option>
										<option>Maryland</option>
										<option>Massechusetts</option>
										<option>Michigan</option>
										<option>Nebraska</option>
										<option>Minnesota</option>
										<option>Mississippi</option>
										<option>Missouri</option>
										<option>Montana</option>
										<option>Nebraska</option>
										<option>Nevada</option>
										<option>New Hampshire</option>
										<option>New Jersey</option>
										<option>New Mexico</option>
										<option>New York</option>
										<option>North Carolina</option>
										<option>North Dakota</option>
										<option>Ohio</option>
										<option>Oklahoma</option>
										<option>Oregon</option>
										<option>Pennsylvania</option>
										<option>Rhode Island</option>
										<option>South Carolina</option>
										<option>South Dakota</option>
										<option>Tennessee</option>
										<option>Texas</option>
										<option>Utah</option>
										<option>Vermont</option>
										<option>Virginia</option>
										<option>Washington</option>
										<option>West Virgina</option>
										<option>Wisconsin</option>
										<option>Wyoming</option>
									</select>
								</div>
								<div id="zipAd" class="counter">
									<p class="counter">{{lang.zip}}</p>
									<input type="number" required name="zip" />
								</div>
								<div class="inputHold">
									<h4>{{lang.contactInfoNote}}:</h4>
									<div id="homePhone" class="counter">
										<p class="counter">{{lang.homePhone}}</p>
										<input type="tel" name="homePhone" required />
									</div>
									<div id="otherPhone" class="counter">
										<p class="counter">{{lang.otherPhone}}</p>
										<input type="tel" name="otherPhone" />
									</div>
									<div id="otherPhone" class="counter">
										<p class="counter">{{lang.email}}</p>
										<input type="email" name="email" />
									</div>
								</div>

							</div>
						</div>
						<div class="category" id="availability">
							<div class="inputHold">
								<h3>{{lang.applicantInfoNote}}</h3>
								<div id="schedAvail" class="counter" >
									<h4 class="counter">{{lang.availibility}}:</h4>
									<div id="availTypes" class="counter">
										<div id="fullTime" class="counter">
											<input type="checkbox" name="fullTime" /><p class="counter">{{lang.fullTime}}</p>
										</div>
										<div id="partTime" class="counter">
											<input type="checkbox" name="partTime" /><p class="counter">{{lang.partTime}}</p>
										</div>
										<div id="temporary" class="counter">
											<input type="checkbox" name="temporary" /><p class="counter">{{lang.temporary}}</p>
										</div>
									</div>
								</div>
								<div id="shiftAvail" class="counter">
									<h4 class="counter">{{lang.shiftNote}}:</h4>
									<div id="shiftType" class="counter">
										<div id="firstShift" class="counter">
											<input type="checkbox" name="firstShift" /><p class="counter">{{lang.firstShift}}</p>
										</div>
										<!-- <div id="firstShift2" class="counter">
											<p class="counter">{{lang.firstShift2}}</p><input type="checkbox" name="firstShift2" />
										</div> -->
										<div id="secondShift" class="counter">
											<input type="checkbox" name="secondShift" /><p class="counter">{{lang.secondShift}}</p>
										</div>
										<div id="thirdShift" class="counter">
											<input type="checkbox" name="thirdShift" /><p class="counter">{{lang.thirdShift}}</p>
										</div>
										<div id="otherShift" class="counter">
										</div>
										
									</div>

											<!-- <p class="counter red">												
										
											{{lang.satNote}}
											</p> -->
										
								</div>

								<div id="prevWorkHistory">
									<div id="prevWorkYesNo" class="counter">
										<h4 class="counter">{{lang.prevEmploy}}?</h4>
										<input id="prevY" class="bool" name="prevWork" type="checkbox" value="yes" /><p class="counter">{{lang.yes}}</p>
										<input id="prevN" class="bool" name="prevWork" type="checkbox" value="no"  /><p class="counter">{{lang.no}}</p>
									</div>
								</div>

								<div class="counter">
									<h4 class="counter">{{lang.age}}?</h4>
									<input type="checkbox" id="ageY" class="bool" name="age"  value="yes" /><p class="counter">{{lang.yes}}</p>
									<input type="checkbox" id="ageN" class="bool" name="age" value="no" /><p class="counter">{{lang.no}}</p>
								</div>
								<div>
									<h4 class="counter">{{lang.colorBlind}}?</h4>
									<input type="checkbox" id="colorY" class="bool" name="color"  value="yes" /><p class="counter">{{lang.yes}}</p>
									<input type="checkbox" id="colorN" class="bool" name="color" value="no"  /><p class="counter">{{lang.no}}</p>
								</div>

							</div>
							<div class="inputHold">
								<h3>{{lang.citizen}}</h3>
								<h4 class="counter">{{lang.citizenNote}}?</h4>
								<input type="checkbox" id="citizenY" class="bool" name="citizen"  value="yes"  /><p class="counter">{{lang.yes}}</p>
								<input type="checkbox"  id="citizenN" class="bool" name="citizen"  value="no"  /><p class="counter">{{lang.no}}</p>
								<div id="resumeHolder" ></div>
								<p>{{lang.autherizationNote}}</p>
							</div>
						</div>

							<div id="endingHold">
								<div class="ending">
									<p id="endNote">{{lang.agreement}}</p>
									<h4>{{lang.sigNote}}</h4><p>{{lang.sigNote2}}</p><input type="text" /><p>{{lang.sigNote3}}</p><input type="checkbox" required name="agree" /><p>{{lang.sigNote4}}</p>
								</div>
							</div>
							
     						
							<input type="submit" value="{{lang.submit}}" />
					</form>
				</div>
			</div>


		</div>
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="js/menu.v2.js">/*this file version puts the correct html in for you*/</script>
		<script type="text/javascript" src="js/ceu.js"></script>


		<div id="copyright">Copywrite Endicott Clay Products Company</div>
		<script>

			var resume = '<p>Email your resume to <a href=mailto:jbrahm@endicott.com?subject="Applicant Resume">Human Resources at Endicott</a></p>';
			var resumeSp = '<p>Envíe su currículum por correo electrónico a <a href=mailto:jbrahm@endicott.com?subject="Applicant Resume">Recursos humanos en Endicott</a></p>';

		$("#jobTitle").on('change',function(){
			var jobTitleSel = $("#jobTitle").val();
			if(jobTitleSel==null){
				$("#jobTitle").css({'color':'grey'});
			}else{
				$("#jobTitle").css({'color':'black'});
			}

			if(jobTitleSel=="Electrician"){
				$("#resumeHolder").append(resume);
			}else if(jobTitleSel=="Electricista"){				
				$("#resumeHolder").append(resumeSp);
			}else{
				$("#resumeHolder").empty();
			};
		});
		var jobTitleSel = $("#jobTitle").val();
		if(jobTitleSel==null){
			$("#jobTitle").css({'color':'grey'});
		}else{
			$("#jobTitle").css({'color':'black'});
		}
			var selectedLanguage = sessionStorage.getItem('setLang1');
			//console.log(sessionStorage.getItem('setLang1'));
			if(selectedLanguage == null){
				
				var selectedLanguage = 'en';
				sessionStorage.setItem('setLang1','en');
			}
			


			var language ={
				"en":{
					"selectOne":"Select One",
					"setLang":"en",
					"setLangNote":"Establecer formulario en Español",
					"pageName":"Employment Application",
					"note1":"If you would like to apply at Endicott, please fill out the form below.",
					"wordPosition":"Position",
					"posAppliedFor":"Position applied for:",
					"job1":"Operator",
					"job2":"General Laborer",
					"job3":"Maintenance",
					"job4":"Electrician",
					"job5":"Heavy Equipment Operator/Dozer Operator",
					"startDate":"Date you can Start:",
					"personalInfoNote":"Personal Information",
					"nameNote":"Name",
					"firstName":"First",
					"middleName":"Middle",
					"lastName":"Last",
					"homeAddNote":"Home Address",
					"street":"Street Address",
					"city":"City",
					"state":"State",
					"zip":"Zip Code",
					"contactInfoNote":"Contact Information",
					"homePhone":"Main Phone",
					"otherPhone":"Other Phone",
					"email":"Email",
					"applicantInfoNote":"Applicant Information",
					"availibility":"Are you available",
					"fullTime":"Full-Time",
					"partTime":"Part-Time",
					"temporary":"Temporary",
					"shiftNote":"Shift",
					"satNote":"*First Shift + Saturday requires you to work every other Saturday",
					"firstShift2":"*First (6AM to 3PM  Monday - Friday +  6AM - 12PM ~ Saturday)",
					"firstShift":"First (5:30AM to 3PM  Monday - Friday )",
					"secondShift":"Second (3PM to 12:30AM  Monday - Friday )",
					"thirdShift":"Third (9PM to 6:30AM  Monday - Friday )",
					"otherShift":"Other",
					"prevEmploy":"Have you been employed by us before",
					"age":"Are you at least 18 years old",
					"colorBlind":"Are you color blind",
					"yes":"Yes",
					"no":"No",
					"citizen":"Citizenship",
					"citizenNote":"Are you a citizen of the United States or have work autherization",
					"autherizationNote":"Note: the law requires that you provide evidence and a sworn statement of your citizenship or work authorization if you are hired. Any offer of employment which you receive is contingent upon your providing the documentation and statement which we will request from you.",
					"agreement":"By signing below, I certify that the answers and information set out above are true, accurate and complete to the best of my knowledge. I acknowledge that if any answer or information is not true, accurate or complete, I may not be hired, or if hired, I may be discharged. I authorize Endicott Clay Products Co. to investigate all statements contained in this application for employment and to investigate my character and qualifications. I understand that this application is not a contract of employment. I also acknowledge that no oral representations have been made, and that no one within Endicott Clay Products Co. has the authority to make oral contracts of employment. If hired, my employment relationship with Endicott Clay Products Co. is terminable at-will, with or without cause, by either myself or Endicott Clay Products Co. I also understand that my employment will be conditioned upon successfully completing a drug/alcohol test. I understand and agree to all of the conditions and statements set forth above, and throughout this application. Attached to this job application is a job description of the duties of the job for which I am applying. I certify I have read the attached job description and can meet all of the essential duties of this job.",
					"sigNote":"Signature",
					"sigNote2":"Type full name",
					"sigNote3":"I agree to the above terms",
					"sigNote4":"By electronically entering your name and selecting the terms of agreement, you are officially signing this application.",
					"submit":"Submit"

				},
				"sp":{
					"selectOne":"Seleccione uno",
					"setLang":"sp",
					"setLangNote":"Set form to English",
					"pageName":"Aplicación de Empleo",
					"note1":"Si desea presentar una solicitud en Endicott, complete el formulario a continuación.",
					"wordPosition":"Posición",
					"posAppliedFor":"Posicione solicitadas:",
					"job1":"Operador/Operadora",
					"job2":"Trabajador General",
					"job3":"Mantenimiento",
					"job4":"Electricista",
					"job5":"Operador de equipo pesado/Operador de bulldozer",
					"startDate":"Fecha en que usted puede comenzar:",
					"personalInfoNote":"Informacion Personal",
					"nameNote":"Nombre",
					"firstName":"Primero",
					"middleName":"Medio",
					"lastName":"Último",
					"homeAddNote":"Direccion De Casa",
					"street":"Direccion De Casa",
					"city":"Ciudad",
					"state":"Estado",
					"zip":"Código Postal",
					"contactInfoNote":"Información Del Contacto",
					"homePhone":"Teléfono principal",
					"otherPhone":"Otro Teléfono",
					"email":"Correo Electrónico",
					"applicantInfoNote":"información Del Aplicante",
					"availibility":"Estas disponible",
					"fullTime":"Tiempo-Completo",
					"partTime":"Medio-Tiempo",
					"temporary":"Temporal",
					"shiftNote":"Cambio",
					"satNote":"*El primer turno con sábado requiere que trabajes cada dos sábados",
					"firstShift2":"Primero (6AM to 3PM  lunes a viernes + 6AM - 12PM ~ sábado)",
					"firstShift":"Primero (5:30AM to 3PM  lunes a viernes)",
					"secondShift":"Segundo (3PM to 12:30AM  lunes a viernes)",
					"thirdShift":"Tecero (9PM to 6:30AM  lunes a viernes)",
					"otherShift":"Otro",
					"prevEmploy":"¿Has sido empleado por nosotros antes",
					"age":"Tienes al menos 18 años de edad",
					"colorBlind":"¿Eres daltónico",
					"yes":"Si",
					"no":"No",
					"citizenNote":"¿Es ciudadano de los Estados Unidos o tiene autorización de trabajo",
					"autherizationNote":"Nota: la ley requiere que proporcione evidencia y una declaración jurada de su ciudadanía o autorización de trabajo si es contratado. Cualquier oferta de empleo que reciba depende de que proporcione la documentación y la declaración que le solicitaremos.",
					"agreement":"Al firmar a continuación, certifico que las respuestas y la información establecidas anteriormente son verdaderas, precisas y completas a mi leal saber y entender. Si alguna respuesta o información no es verdadera, precisa o completa, puedo no ser contratado, o si lo hago, podría ser despedido. Autorizo ​​a Endicott Clay Products Co. a investigar todas las declaraciones contenidas en esta solicitud de empleo e investigar mi carácter y calificaciones. Entiendo que esta solicitud no es un contrato de trabajo. También reconozco que no se han realizado declaraciones orales, y que nadie dentro de Endicott Clay Products Co. tiene la autoridad para hacer contratos orales de empleo. Si es contratado, mi relación laboral con Endicott Clay Products Co. es rescindible a voluntad, con o sin causa, por mí mismo o por Endicott Clay Products Co. También entiendo que mi empleo estará condicionado a completar con éxito una prueba de drogas / alcohol. Entiendo y acepto todas las condiciones Iciones y declaraciones establecidas anteriormente, y a lo largo de esta solicitud. Adjunto a esta solicitud de empleo hay una descripción del trabajo de los deberes del trabajo para el que estoy postulando. Certifico que he leído la descripción del trabajo adjunta y que puedo cumplir con todos los deberes esenciales de este trabajo ",
					"sigNote":"Firma",
					"sigNote2":"Escriba el nombre completo",
					"sigNote3":"Estoy de acuerdo con los términos anteriores",
					"sigNote4":"Al ingresar electrónicamente su nombre y seleccionar los términos del acuerdo, está firmando oficialmente esta solicitud.",
					"submit":"Enviar"
				}
			}
			var app = angular.module("application",[]);
			app.controller("myApplication",function($scope){
				var langSet = {'val':selectedLanguage};
				
				$scope.changeLanguage=function(){

					$("#resumeHolder").empty();
					var jobTitleSel = $("#jobTitle").val();


					var languageSet = langSet.val;
					//console.log(languageSet);
					//var languageSet = $("#setLang").attr('lang');
					if(languageSet=="en"){
						if(jobTitleSel=="Electrician"){
							$("#resumeHolder").append(resumeSp);	
						}

						
						langSet.val="sp"
						sessionStorage.setItem('setLang1','sp');
					}else if(languageSet == "sp"){
						if(jobTitleSel=="Electricista"){
							$("#resumeHolder").append(resume);	
						}
						langSet.val="en";
						sessionStorage.setItem('setLang1','en');
					}else{
						langSet.val="en";
						sessionStorage.setItem('setLang1','en');
					}
					$scope.lang = language[langSet.val];
				};

				$scope.setLanguage=function(){
					var languageSet = selectedLanguage;

					$scope.lang = language[languageSet];
				};
				$scope.setLanguage();

			});
			$(".bool").on('click',function(){
				var checkId = $(this).attr('id');
				var yesNo = $(this).attr('value');
				if(yesNo=='yes'){
					var idSet = checkId.replace("Y","N")
					$("#"+idSet).prop('checked',false);
					$("#"+checkId).prop('checked',true);
				}else if(yesNo=='no'){
					var idSet = checkId.replace("N","Y")
					$("#"+idSet).prop('checked',false);
					$("#"+checkId).prop('checked',true);
				}
			});
			
				



			

		</script>
		<?php
			foreach($_POST as $key => $value){
				$$key = $value;
			};
			$onArray=array('fullTime','partTime','temporary','firstShift','firstShift2','secondShift','thirdShift','otherShift');
			foreach ($onArray as $key => $value) {
				if(isset($_POST[$value])){
					$$value='Yes';
				}else{
					$$value='No';
				};
			};
			$_SESSION['fullName']=$firstName." ".$lastName;
			$emailNote = "The following is an application filled out online."."\nPosition Applied for: ".$jobTitle."\n"."Start Date: ".$startDate." \n"."Applicant: ".$firstName." ".$middleName." ".$lastName." \n"."Address:\n".$streetAddress." \n".$city." ".$state." ".$zip."\n"."Home Phone: ".$homePhone."\nOther Phone:".$otherphone."\n"."Email: ".$email;
			$emailNote2 = "\nApplicant is available for: "."\nFull Time: ".$fullTime."\nPart Time: ".$partTime."\nTemporary: ".$temporary."\nFirst Shift: ".$firstShift."\nSecond Shift: ".$secondShift."\nThird Shift: ".$thirdShift."\nOther Shift: ".$otherShift."\nWorked here previously?: ".$prevWork."\nOver 18: ".$age."\nColor Blind: ".$color."\nCitizen: ".$citizen;

			if(isset($_POST['agree'])){
				mail("judyb@endicott.com",'Job Applicant',$emailNote.$emailNote2);
				// mail("judybrahm@gmail.com",'Job Applicant',$emailNote.$emailNote2); Removed 12/23 at Judy's request. If everything works correctly I will completely remove
				mail("jragland@endicott.com",'Job Applicant',$emailNote.$emailNote2);
				echo "<script>window.location.href='applicationThankYou.php';</script>";
			}
		?>
	</body>
</html>
