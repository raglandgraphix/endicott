var windowWidth = $(window).width();
var running={};
var imgWidth = {};
window.imgWidth = $(window).width();
var imgHeight = {current:$(window).width()/2};
var increment = {count:0};
var imageArray = [];
var nextArray = [];
var job={};
var app = angular.module('projectLoad', ['angular.filter']);

app.controller('projectCtrl', function($scope, $http, $location,$interval,$sce,$log) {
	$http.get("js/json/projects.json").success(function(data){
	$("img").on('click',function(){console.log('lets work')});
	
		var productCat = Object.keys(data);
		var urlInfo = $location.search();
		var jobTitle = urlInfo.jobTitle;
		var productType = urlInfo.product;
		imageArray = data[productType][jobTitle].photoAlbum.length-1;
		$scope.jobTitle = data[productType][jobTitle];
		var fImg = data[productType][jobTitle].photoAlbum[0];
		var yank = new Image();
		var googlemap = data[productType][jobTitle].gMapsImage;
		$scope.Myurl = $sce.trustAsResourceUrl(data[productType][jobTitle].gMapsImage);
		yank.onload = function(){
			running.timer =setInterval(function(){call(windowWidth);},6000);
		};
		
		// if(!$scope.Myurl){
			// $("#googleMap").parent().remove();
		// }
		// $scope.bug = function(){alert('hello')};
		$scope.kaboom = function(product,color){
		
		
		sessionStorage.setItem('product_LineNext',product);
		sessionStorage.setItem('product_color',color);
		$http.get("js/json/endicottColor.json").success(function(data){
				
				//console.log(data[productType].);
				var projTexture = data[productType][color].texture.mainTexture;
				
				
				if(product=="Thin Brick"){
					var projThick = data[productType][color].texture[projTexture].availableThickness[Object.keys(data[productType][color].texture[projTexture].availableThickness)[0]];
					if(projThick.thickness=="1/2\" Thick"){
						sessionStorage.setItem('thicknessSize','t12Thick');	
					}else if(projThick.thickness=="5/8\" Thick"){
						sessionStorage.setItem('thicknessSize','t58Thick');	
					}else{
						
						sessionStorage.setItem('thicknessSize','t1Thick');
					}
				}else{
					sessionStorage.setItem('thicknessSize','t12Thick');	
				}
		
			sessionStorage.setItem('product_texture',projTexture);
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
				window.location.href="colorPop.html";
			}else{
				window.open('colorPop.html','_blank');
			}
			
			});
		
		
		
		
		
		
		
			//$log.log(product + color);
		}
		yank.src=fImg;
//The advancement function works with the right and left arrow to either increase or decrease to the next picture.
		$scope.advancement =function(direction){
			clearInterval(running.timer);
		 	if(direction=="rightArrow"){
		 		increment.count++;
		 		if(increment.count==imageArray+1){
		 			increment.count=0;
		 		};
		 	}else if(direction=="leftArrow"){
		 		increment.count--;
		 		if(increment.count==-1){
		 			increment.count=imageArray;
		 		};
		 	};
		 	$("#mainImg img:first-child").animate({'opacity':0},500,function(){$("#mainImg img:first-child").height('100%').width('auto').attr('src',data[productType][jobTitle].photoAlbum[increment.count]).animate({'opacity':1},500)});
		 	running.timer =setInterval(function(){call(windowWidth);},6000);
		 };
		 $scope.getOther = function(prodType,job){
		 	window.location.href='selectJob5-21.html#?product='+prodType+'&jobTitle='+job+'';
		 	window.scrollTo(0,0);//added this 9/30/16 
		};
		$scope.openLarge = function(imgToOpen){
			var windowWidth=$(window).width();
		 	if(windowWidth<=840){
		 		window.open(imgToOpen);
		 	};
		 };
		 $scope.go=function(current){
			if(current==jobTitle){
				var p = $("#"+current+"").attr('src');
			}
		};
//the call function is called above in the running.timer variable of setInterval.	 			
		function call(windowWidth){
			increment.count++;
		 	if(increment.count==imageArray+1){
		 		increment.count=0;
		 	};
		 		var imageToUse = data[productType][jobTitle].photoAlbum[increment.count];
		 		imgHeight.ccurrent = $(window).width()/2;
		 		$("#mainImg img:first-child").animate({'opacity':0},500,function(){$("#mainImg img:first-child").height('100%').width('auto').attr('src',data[productType][jobTitle].photoAlbum[increment.count]).animate({'opacity':1},500)});
		 		$("#rightArrow p, #leftArrow p").css({'opacity':.3});
		};
		
//This window resize calls the resize function
		$(window).on('resize',resize);
 			function resize(){	
				var windowWidth=$(window).width();
				imgHeight.current = $(window).width()/2; 
				$("#mainImg, #mainImg img, #leftArrow, #rightArrow").height(imgHeight.current).css({'visibility':'visible'}); 
 			};
 			if(jobTitle=='moody'){ // this will add a video link to the Moody Center Page only.
 				$("#info").after('<p class="highLightVideo">Watch the Highlight Video</p><img class="videoIcon" src="assets/faceBrick/moody/videoIcon.jpg"  />');
 					$('.highLightVideo, .videoIcon').on('click',function(){
 						window.open('moodyVideo.html', '_blank');	
 					});
 			}
 			
 	});
});
app.directive('run', function () {
	return function(scope, element, attrs) {
    };
});	
$(function(){
	$(window).on("hashchange",function(){
		var locationNav = window.location.href;
		location.reload();
	});
	$(window).bind("load",function(){
		$("#mainImg, #mainImg img, #leftArrow, #rightArrow").height(imgHeight.current).css({'visibility':'visible'}); 
 		$("#mainImg, #mainImg img").css({'cursor':'auto'});
	});
	$("#leftArrow p, #rightArrow p").hover(function(){
		$(this).stop(true,false).animate({'opacity':1},500);},function(){
		$(this).stop(true,false).animate({'opacity':.3},500);
	});
	
});