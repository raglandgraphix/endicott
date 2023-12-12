if(sessionStorage.getItem('product_project')==null){
	sessionStorage.setItem('product_project','null');
};


// var getColor =  sessionStorage.getItem('color_project'); ///do I need this?



var windowWidth = $(window).width();
var running={};
var imgWidth = {};
window.imgWidth = $(window).width();
var imgHeight = {current:$(window).width()/2};
var increment = {count:0};
var imageArray = [];
var nextArray = [];
var job={};
var mobile = {val:true};

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
	mobile.val = true;
	
	//$('.description').css({'opacity':1});
}//if the user is using a mobile device this turns the project description on at all times because mobile doesn't have a hover function.
var app = angular.module('projectLoad', ['angular.filter']);
app.controller('projectCtrl', function($scope, $http, $location,$interval) {
	$scope.$apply();
	var availProd = [{productName:'Face Brick',productType:'faceBrick'},{productName:'Thin Brick',productType:'thinBrick'},{productName:'Pavers',productType:'pavers'},];//These are the values for the product menu.
	$http.get("js/json/projects.json").success(function(data){
		var urlInfo = $location.search();//searches the url for information
		if(!urlInfo.product){
			console.log('not');
			sessionStorage.setItem('product_project','null');
		}else{
			var fromSwatch = urlInfo.color;
			let productCalled = urlInfo.product;
		
		
		
		sessionStorage.setItem('product_project', productCalled);//this was added July 12 2023. I thought we already had this set up. I am worried it will crash but I need it for the premier site.


		}
		
		


		

		var productReq = sessionStorage.getItem("product_project");

		
		//var productReq = urlInfo.product;//searches for the product given by the url
		
		var reloadPage={val:urlInfo.reload}; //set the value of whether or not the page needs to be reloaded.

		// if(fromSwatch){
		// 	var colorSelected = fromSwatch;
		// }else{
		// 	var colorSelected = $("#select2").val();
		// }

var colorSelected = $("#select2").val();

		
		$.each(availProd,function(key,val){
			$("#selectProduct").append('<option id="'+val.productType+'" value="'+val.productType+'">'+val.productName+'</option>');//this creates the actual product menu.
		});
		if(productReq!='null'){
			
			$("#selectProduct").val(productReq);//this sets the selected product to the product when you select from the upper menu
		};
		var myProduct = [];
			$scope.proj_prod=myProduct;
		var productCat = Object.keys(data);
		var proj=[];
		$scope.proj = proj;
		var colPush = [];
		var select_color = {value:''};
		$scope.crap = function(){//This is only ran when the product is changed.


			
			$("#select2").empty().append('<option value=""  >All Colors</option>');
			proj.length=0;
			colPush.length=0;
			var product_var = $("#selectProduct").val();
			var colorPushed=[];
			
			if(product_var==""){
				$.each(data,function(key1,val1){
					$.each(val1,function(key2,val2){
						$.each(val2,function(key3,val3){
							if(key3=='products'){
								$.each(val3,function(key4,val4){
									
									if(colPush.length==0){
										
										if(select_color.value==val4.colorSafe){
											
											$("#select2").append('<option value="'+val4.colorSafe+'" selected="selected">'+val4.color+'</option>');
										}else{
											
											$("#select2").append('<option value="'+val4.colorSafe+'">'+val4.color+'</option>');	
										}
										colPush.push(val4.color);
									}else{
										
										if(colPush.indexOf(val4.color)===-1){
											if(select_color.value==val4.colorSafe){
											$("#select2").append('<option value="'+val4.colorSafe+'" selected="selected">'+val4.color+'</option>');
										}else{
											$("#select2").append('<option value="'+val4.colorSafe+'">'+val4.color+'</option>');	
										}
										colPush.push(val4.color);
										}
									};
								});
							}
						});	
					});
				});
			}else{
				$.each(data[product_var],function(key,val){
					$.each(val,function(key2,val2){
						if(key2=='products'){
							$.each(val2,function(key3,val3){
								if(colPush.length==0){									
									if(select_color.value==val3.colorSafe){
										$("#select2").append('<option value="'+val3.colorSafe+'" selected="selected">'+val3.color+'</option>');
									}else{
										$("#select2").append('<option value="'+val3.colorSafe+'">'+val3.color+'</option>');	
									};
									colPush.push(val3.color);
								}else{
									if(colPush.indexOf(val3.color)===-1){
										if(select_color.value==val3.colorSafe){
											$("#select2").append('<option value="'+val3.colorSafe+'" selected="selected">'+val3.color+'</option>');
										}else{
											$("#select2").append('<option value="'+val3.colorSafe+'">'+val3.color+'</option>');	
										}
										colPush.push(val3.color);
									};
								};
							});
						};
					});
				});
			};
		};


		$scope.proj_colorDisplay = function(){//This is the main function. Decides which images need to be shown.
			
			var colorFrom = sessionStorage.getItem('color_page');
			proj.length=0;//Proj needs to be emptied. I don't like doing it this way. I would rather use an object.
			var colorPushed=[];
			var myvar = [];
			// if(urlInfo.color){
			// 	console.log("true");
			// 	//var colorSelected = urlInfo.color;
			// }else{
			// 	console.log("false");
			// 	//var colorSelected = $("#select2").val();
			// }
			
			// console.log(colorFrom);
			if(colorFrom==''){
				var colorSelected = $("#select2").val();
			}else{

				var colorSelected = colorFrom;
			}

			sessionStorage.removeItem('color_page');
			// var colorSelected = $("#select2").val();
			// console.log($("#select2").val());
			// console.log(colorFrom);
			
			
			var product_selected = $("#selectProduct").val();//gets the value of the product selected

			$scope.productCall = [];//this scope is used to populate the header that tells what product is used.
			$scope.myvar = myvar;
			$.each(data,function(key,val){//this function will get the values for facebrick thinbrick...
				$.each(val,function(key2,val2){//this function will get the values for the job itself...
					myProduct.push(val2);//This will put together the list which will consist of Face Brick, Thin Brick, and pavers
					if(val2.productType == product_selected){//as the page cycles through the values it looks at each product type. if it matches what is in the selection box this will run.
						if($scope.productCall.length==0){
							$scope.productCall.push(val2.productName);
						};
						$.each(val2,function(key3,val3){
							if(key3=='products'){//this makes sure that continuing on from here only the products information is selected.
								$.each(val3,function(key4,val4){
									
						 			if(colPush.length==0){

										if(select_color.value==val4.colorSafe){ //if the value of the color selected in the options is the same as the color in the json file it will continue and build the color menu
											$("#select2").append('<option value="'+val4.colorSafe+'" selected="selected">'+val4.color+'</option>');//this option sets the selected option
										}else{
											$("#select2").append('<option value="'+val4.colorSafe+'">'+val4.color+'</option>');	
										};										
										colPush.push(val4.color);//puts the first color value in the menu
									}else{

										
										if(colPush.indexOf(val4.color)===-1){//this looks through colpush and if the value of the current color isnt in the array already it will put the color name in, else it will skip it.
											if(select_color.value==val4.colorSafe){
												$("#select2").append('<option value="'+val4.colorSafe+'" selected="selected">'+val4.color+'</option>');
											}else{
											$("#select2").append('<option value="'+val4.colorSafe+'">'+val4.color+'</option>');	
											};
											colPush.push(val4.color);
										};
									};
						 			if(colorSelected==val4.colorSafe){
						 				if(colorPushed.length==0){
							 		 		myvar.push(val2);
											colorPushed.push(val2.jobTitle);	
									 	}else{
									 		if(colorPushed.indexOf(val2.jobTitle)===-1){
												myvar.push(val2);
												colorPushed.push(val2.jobTitle);
											};
									 	};
									}else if(colorSelected=='' || colorSelected==null){
										
							 			if(colorPushed.length==0){
							 		 		myvar.push(val2);
											colorPushed.push(val2.jobTitle);	
									 	}else{
									 		if(colorPushed.indexOf(val2.jobTitle)===-1){
												myvar.push(val2);
												colorPushed.push(val2.jobTitle);
											};
									 	};
							 		};
							 	});
						 	};
						});
					}else if(product_selected==""){
						
						$.each(val2,function(key3,val3){
							
							// if($scope.productCall.length==0 && productReq===undefined){
							if($scope.productCall.length==0 && productReq==='null'){
								
							 	$scope.productCall.push('All Products');
							 	
							}else if(val2.productType==productReq && $scope.productCall.length==0){
							
								$scope.productCall.push(val2.productName);
								
							}	
						
						if(val2.productType==productReq){
							one();
						// }else if(productReq===undefined){
						}else if(productReq==='null'){
							
							one();
						}
						function one(){
							if(key3=='products'){
								
								$.each(val3,function(key4,val4){
									
									//proj.push(val4);
									if(colPush.length==0){
										if(select_color.value==val4.colorSafe){
											$("#select2").append('<option value="'+val4.colorSafe+'" selected="selected">'+val4.color+'</option>');
										}else{
											$("#select2").append('<option value="'+val4.colorSafe+'">'+val4.color+'</option>');	
										}
										
										colPush.push(val4.color);
									}else{
										if(colPush.indexOf(val4.color)===-1){
											if(select_color.value==val4.colorSafe){
											$("#select2").append('<option value="'+val4.colorSafe+'" selected="selected">'+val4.color+'</option>');
										}else{
											$("#select2").append('<option value="'+val4.colorSafe+'">'+val4.color+'</option>');	
										}
										
										colPush.push(val4.color);
										}
									}
									
									if(val4.colorSafe==colorSelected){
										if(colorPushed.length==0){
											
											proj.push(val4);
							 		 		myvar.push(val2);
											colorPushed.push(val2.jobTitle);	
									 	}else{
									 		
									 		if(colorPushed.indexOf(val2.jobTitle)===-1){
												myvar.push(val2);
												colorPushed.push(val2.jobTitle);
											};
										};
									}else if(colorSelected == '' || colorSelected==null){
										if(colorPushed.length==0){
							 		 		myvar.push(val2);
											colorPushed.push(val2.jobTitle);	
									 	}else{
									 		if(colorPushed.indexOf(val2.jobTitle)===-1){
												myvar.push(val2);
												colorPushed.push(val2.jobTitle);
											 };
									 	 };
									};
								});
								};
							};/////////xxxxxxxxxxxxxxxxxx
						});
					};
				});
			});
			
		};
		$(window).on('hashchange', function(e){
		 	
		 	if(reloadPage.val=='true' || reloadPage.val==undefined){
		 		
		 	location.reload();
		 	
		 	
		 	}
		 		
		 	
    		 
		 });
		
		$scope.fred = function(jobTitle){			
			$("#"+jobTitle+" .description").stop().animate({'opacity':1},500);			
		};
		$scope.fred2 = function(jobTitle){
			
			
				$("#"+jobTitle+" .description").stop().animate({'opacity':0},500);
						
						
		};
		$scope.getOther = function(prodType,job){
	 		window.location.href='selectJob.html#?product='+prodType+'&jobTitle='+job+'';
	 		window.scrollTo(0,0);//added this 9/30/16 
		};
		
		// $("#selectProduct").on('change',function(){
			// document.location.hash='';
			// $scope.crap();
		// });
		
		$("#selectProduct").on('change',function(){
			//console.log('I work Here');
			var prodValue = $(this).val();
			
			console.log(prodValue);
			
			if(prodValue==''){
				// productReq=undefined;
				 productReq='null';
				sessionStorage.clear("product_project");
				
			}else{
				sessionStorage.setItem("product_project",prodValue);
			}
			// document.location.hash = "";
			
			$scope.crap();
		});
		// .on('click',function(){
			// reloadPage.val='false';
		// });
		// $("#click").on('click',function(){
			// reloadPage.val='true';
		// });
		
		$("#select2").on('change',function(){

			sessionStorage.setItem('color_page',$(this).val());
			var colorToPut = $(this).val();
			if(colorToPut==''){

				sessionStorage.clear('color_project');//If all colors is selected the value is '' so this clears the value of it and changes it to null. This works because from the start the value will be null and need to be changed to ''.
				
			}else{
				sessionStorage.setItem('color_project',colorToPut);//This sets the selected color as set in the filter

				
			}
			select_color.value=colorToPut;


			existProd();

		});
		function existProd(){

			var color1 = $("#select2").val();
			
			 
			
			var product_selected1 = $("#selectProduct").val();//This obtains the product that is selected in the filter
			
			var productsAvail = [];
			var possibleProds = ['faceBrick','thinBrick','pavers'];
			
			
			$.each(data,function(key1,val1){
				$.each(val1,function(key2,val2){
					$.each(val2,function(key3,val3){
						if(key3=='products'){
							$.each(val3,function(key4,val4){
								if(color1==val4.colorSafe){
									productsAvail.push(val2.productType);
									
								}else if(color1==''){
									productsAvail.push(val2.productType);
								}
								//var p = val2.productType;
								//p.push(val4.colorSafe);
								
							});
						}
					});
				//}
				
				
			});
		});
			
		
			
		
		};
		
		$scope.proj_colorDisplay();
	});
	
});
app.directive('current', function () {
	return {
		restrict: 'A',
		link: function ($scope, element, attrs, controller) {
			element.bind('load',function(){
				var p = element.attr('id');
 				if(p==job.title){
	 				element.addClass("big");
 				};
			});
		}
	};
});


