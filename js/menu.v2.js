//---------------This will put google analytics in all the pages that use this menu, which should be all ---------------------------
// (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//   			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//   			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//   			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
// 			ga('create', 'UA-66547001-1', 'auto');
//   			ga('send', 'pageview');



//---------------This will put google analytics in all the pages that use this menu, which should be all ---------------------------

$(function(){


	if (navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/)) || (typeof $.browser !== "undefined" && $.browser.msie == 1))
		{
 			 alert("Please use Google Chrome, Mozilla Firefox, Microsoft Edge, or Safari! Internet Explorer is not supported by current technologies and is no longer being updated by Microsoft. Many of the features of this page will not work on Internet Explorer. ");
		}
	var menu_system = {
		'projects':{
			'top_level':'Projects',
			'id':'sub_menu_projects',
			'all':{
				'title':'All Projects',
				'id':'all_projects',
				'url':'projects.html#?reload=true',
				'storageItem':null

			},
			'facebrick':{
				'title':'Face Brick',
				'id':'facebrick_projects',
				'url':'projects.html#?product=faceBrick&reload=true',
				'storageItem':'faceBrick'
			},
			'thinbrick':{
				'title':'Thin Brick',
				'id':'thinbrick_projects',
				'url':'projects.html#?product=thinBrick&reload=true',
				'storageItem':'thinBrick'
			},
			'pavers':{
				'title':'Pavers',
				'id':'pavers_projects',
				'url':'projects.html#?product=pavers&reload=true',
				'storageItem':'pavers'
			}
		},
		'facebrick':{
			'top_level':'Face Brick',
			'id':'sub_menu_facebrick',
			'colors':{
				'title':'Colors',
				'url':'colors.html',
				'product':'fb_cp_product',
				'range':'All',
				'productFull':'Face Brick',
				'id':'fb_colors'
			},
			'textures':{
				'title':'Textures',
				'url':'faceBrickTextures.html',
				'id':'fb_textures'
			},
			'sizes':{
				'title':'Sizes',
				'url':'faceBrickSizes.html',
				'id':'fb_sizes'
			}
		},
		'thinbrick':{
			'top_level':'Thin Brick',
			'id':'sub_menu_thinbrick',
			'colors':{
				'title':'Colors',
				'url':'colors.html',
				'product':'tb_cp_product',
				'range':'All',
				'productFull':'Thin Brick',
				'id':'tb_colors'
			},
			'textures':{
				'title':'Textures',
				'url':'thinBrickTextures.html',
				'id':'tb_textures'
			},
			'sizes':{
				'title':'Sizes',
				'url':'thinBrickSizes.html',
				'id':'tb_sizes'
			}
		},
		'pavers':{
			'top_level':'Pavers',
			'id':'sub_menu_pavers',
			'colors':{
				'title':'Colors',
				'url':'colors.html',
				'product':'pv_cp_product',
				'range':'All',
				'productFull':'Pavers',
				'id':'pv_colors'
			},
			'sizes':{
				'title':'Sizes',
				'url':'paversSizes.html',
				'id':'pv_sizes'
			}
		},
		'resources':{
			'top_level':'Resources',
			'id':'sub_menu_resources',
			'literature':{
				'title':'Literature',
				'id':'literature',
				'url':'literature.html'
			},
			'bim':{
				'title':'BIM',
				'id':'bim',
				'url':'bim.html'
			},
			'specs':{
				'title':'Specifications',
				'id':'specs',
				'url':'specifications.html'
			},
			'technotes':{
				'title': 'Technical Notes',
				'id':'technotes',
				'url':'technicalNotes.html'
			},
			'briefs':{
				'title': 'Brick Briefs',
				'id':'briefs',
				'url':'brickBriefs.html'
			}
		},
		'about':{
			'top_level':'About',
			'id':'sub_menu_about',
			'profile':{
				'title':'Profile',
				'id':'profile',
				'url':'aboutUs.html'
			},
			'video':{
				'title':'Videos',
				'id':'video',
				'url':'vwall.html'
			}
		},
		'careers':{
			'top_level':'Careers/Carrera',
			'id':'sub_menu_careers',
			'current':{
				'title':'Current Openings',
				'id':'current_openings',
				'url':'careers.php'
			},
			'application':{
				'title':'Application',
				'id':'application',
				'url':'assets/applications/applicationForEmployment.pdf'
			},
			'applicationSP':{
				'title':'Solicitud',
				'id':'applicationSP',
				'url':'assets/applications/applicationForEmploymentSP.pdf'
			},
			'online':{
				'title':'Apply Online/Aplica Online',
				'id':'online',
				'url':'application.php'
			}
		}
	};
	var pageWidth = $(window).width();
	var menuChange = {value:0};
	var mobile_sub_menu_state = 0;
	var standard_selection_location='undefined';

	//---------------Google tag manager add to the highest point in the head and body---------------------

	$('head').prepend(`<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KTTHHV8');</script>
	<!-- End Google Tag Manager -->`);
	 $('body').prepend(`<!-- Google Tag Manager (noscript) -->
	 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTTHHV8"
	 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	 <!-- End Google Tag Manager (noscript) -->`);
// this was change to use GS4

//---------------Google tag manager add to the highest point in the head and body---------------------

	//$('body').prepend('<!-- Google Tag Manager (noscript) --><noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-KTTHHV8\"height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript><!-- End Google Tag Manager (noscript) --><div id="menu_wrapper"><div id="fullLength"></div><div id="menu_header" ><div id="logo"><img src="assets/LogoE-White.png" /></div><div id="nav" ><img id="burger" src="assets/menuBar.gif"/></div><span></span></div></div>');
	function loadMenu1(callback){
		$("#standard_submenu").remove();
		$("#nav").empty().append('<img id="burger" src="assets/menuBar.gif"/>');

			$.each(menu_system,function(key,val){
				$("#mobile_sub_menu").append('<p id="'+val.id+'">'+val.top_level+'</p>');
			});
		$('#burger').on('click',function(){
			var menuChanged = $("#mobile_sub_menu").text();
			if(menuChanged==''){
				$("#mobile_sub_menu2").empty().attr('id','mobile_sub_menu');
				loadMenu1();
			};
			if(mobile_sub_menu_state===0){
				$('#mobile_sub_menu').css({'display':'initial'});
				$("#holding_main").css({'display':'none'});
				mobile_sub_menu_state=1;
			}else if(mobile_sub_menu_state===1){
				$('#mobile_sub_menu').css({'display':'none'});
				$("#holding_main, #wrapper").css({'display':'block'});
				mobile_sub_menu_state=0;
			};
		});
		$("#mobile_sub_menu p").on('click',function(){
			var mobile_selection = $(this).attr('id');
			$("#mobile_sub_menu").empty().attr('id','mobile_sub_menu2');
				$.each(menu_system,function(key1,val1){
					if(val1.id==mobile_selection){
						$.each(val1,function(key2,val2){
							if(key2=='top_level'|| key2=='id'){
							}else{
								$('#mobile_sub_menu2').append('<p id="'+val2.id+'">'+val2.title+'</p>');
							}
						});
						$("#mobile_sub_menu2 p").on('click',function(){
							var newLocation;
							var menu2Clicked = $(this).attr('id');
							$.each(menu_system,function(key1,val1){
								$.each(val1,function(key2,val2){
						 			if(menu2Clicked==val2.id){
						 				$.each(val2,function(key3,val3){
						 					if(key3=='product'){
						 						sessionStorage.setItem('productFull',val2.productFull);
						 						sessionStorage.setItem('product',val2.product);
						 						sessionStorage.setItem('range',val2.range);
						 					}
						 				});
						 				
						 				

						 				newLocation=val2.url;

						 			}
						 		});
							});
							function reloadMenu(callback){
								$("#mobile_sub_menu2").empty().attr('id','mobile_sub_menu');
								$('#mobile_sub_menu').css({'display':'none'});
								$("#holding_main").css({'display':'block'});
								mobile_sub_menu_state=0;
								callback();
							}
							reloadMenu(function(){loadMenu1(function(){
								window.location.href=newLocation
								});
							});
						});
					};
				});
				$('#mobile_sub_menu2').append('<p id="back" class="smallP">Back</p>');
				$("#back").on('click',function(){
					$("#mobile_sub_menu2").empty().attr('id','mobile_sub_menu');
					loadMenu1();
				});
			});
			if(loadMenu1.arguments.length>=1){
				callback();
			}
		};
		function loadMenu2(){
		$("#nav").empty().append('<div id="main_menu_stan"></div>');//initially this code has the hamburger icon for mobile or small screens this function removes the burger.
		$("#menu_header").after('<div id="standard_submenu"></div>');
		$.each(menu_system,function(key1,val1){
			$("#main_menu_stan").append('<p class="inlineP_menu" id="'+val1.id+'">'+val1.top_level+'</p>');
		});
		$(".inlineP_menu").on('click',function(){
			var index_of_selection = $(this).index()*70;
			var sub_menu_position = $("#main_menu_stan").width()-index_of_selection;
			var getId = $(this).attr('id');
			$("#standard_submenu").empty();
			if(getId!==standard_selection_location){
				$.each(menu_system,function(key1,val1){
					if(getId==val1.id){
						$.each(val1,function(key2,val2){
							if(key2=='top_level'|| key2=='id'){
							}else{
								$("#standard_submenu").append('<p id="'+val2.id+';">'+val2.title+'</p>');
							}
							$("#standard_submenu p").on('click',function(){
								var thisId = $(this).attr('id').replace(';','');
								if(val2.id==thisId){
								 	$.each(val2,function(key3,val3){
								 		if(key3=='storageItem'){
								 			if('storageItem'=='all'){
								 				sessionStorage.clear('product_project');
								 			}else{
								 				sessionStorage.setItem('product_project',val2.storageItem);
								 			}
								 		}
								 		if(key3=='product'){
						 					sessionStorage.setItem('productFull',val2.productFull);
						 					sessionStorage.setItem('product',val2.product);
						 					sessionStorage.setItem('range',val2.range);
						 				}
						 			});
								 	window.location.href = val2.url;
								}
							});
						});
					};
				});
				$("#standard_submenu").css({'display':'initial'});
				standard_selection_location=getId;
			}else{
				$("#standard_submenu").css({'display':'none'});
				standard_selection_location='undefined';
			}
		});
	};
	function startLeave(){
		$("#mobile_sub_menu2").remove();
		$('#holding_main').after('<div id="mobile_sub_menu"></div>');
		loadMenu1();
	}
	function setMenu(){
		if(pageWidth < 990){
			$('#holding_main').after('<div id="mobile_sub_menu"></div>');
			menuChange.value=0;
			loadMenu1();
		}else{
			menuChange.value=1;
			loadMenu2();
		};
	};
	setMenu();
	$("#copyright").html('<p>&copy Endicott-<span class="year">2008</span> \u2022 402-729-3315 \u2022 <a href="mailto:endicott@endicott.com">endicott@endicott.com</a></p><img id="madeInUSA" src="assets/madeInUSA.png"/>').after('<div id="social"><img id="twitter" src="/assets/socialMedia/twitter.png"/><img id="facebook" src="/assets/socialMedia/facebook.png"/><img id="instagram" src="/assets/socialMedia/Instagram.png"/><img id="linkedin" src="/assets/socialMedia/blackLinkedIn.png"/><img id="youtube" src="/assets/socialMedia/youtube.png"/><img id="mortarr" src="/assets/socialMedia/Black_Mortarr_Logo.png"/></div>');
	var now = new Date();
	var thisYear = now.getFullYear();
	$(".year").html(thisYear);
	$("#logo").on('click',function(){
		window.location.href = "/";
	});
	$("#social img").on('click',function(){
		var linkTo = $(this).attr('id');
		switch(linkTo){
			case 'twitter':window.open('https://twitter.com/EndicottBrick','_target');
			break;
			case 'facebook':window.open('https://www.facebook.com/endicottbrick/','_target');
			break;
			case 'instagram':window.open('https://www.instagram.com/endicottbrick/','_target');
			break;
			case 'linkedin':window.open('https://www.linkedin.com/company/1242322/','_target');
			break;
			case 'youtube':window.open('https://www.youtube.com/channel/UCSOSSyCeMWV1hFmvNmFB7jw/featured','_target');
			break;
      case 'mortarr':window.open(' https://www.mortarr.com/endicott-clay-products-company/','_target');
			break;
		}
	});
	$(window).on('resize',function(){
		var resizeWidth = $(window).width();
		if(resizeWidth < 990 && menuChange.value==1){
			$('#holding_main').after('<div id="mobile_sub_menu"></div>');
			menuChange.value=0;
			loadMenu1();
		}else if(resizeWidth>990 && menuChange.value==0){
			$("#mobile_sub_menu").remove();
			menuChange.value=1;
			loadMenu2();
		}



	});
});
