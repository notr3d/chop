$(document).ready(function(){
	$('.features__wrapper').slick({
		autoplay:true,
		autoplaySpeed:10000,
		cssEase:'ease-in-out',
		dots:false,
		slidesToShow:3,
		slidesToScroll:1,
		speed:300
	});
});

$(document).ready(function(){
	
	$(".mobile-menu__button").click(function(){
		$(".mobile-menu__list").slideToggle();
	});
	$(".mobile-menu__list a").click(function(){
		$(".mobile-menu__list").slideToggle();
	});
	
	$("#link-1").click(function(){
		$('a[href="#1"]').tab('show');
	});
	$("#link-2").click(function(){
		$('a[href="#2"]').tab('show');
	});
	$("#link-3").click(function(){
		$('a[href="#3"]').tab('show');
	});
	$("#link-4").click(function(){
		$('a[href="#4"]').tab('show');
	});
	$("#link-5").click(function(){
		$('a[href="#5"]').tab('show');
	});
	$("#link-6").click(function(){
		$('a[href="#6"]').tab('show');
	});	
	
	x = $(location).attr('href');
	x = x.substr(x.indexOf('#')); 		
	if (x != "l") {
		$('a[href="' + x + '"]').tab('show');
	} else {
		$('div#1').addClass('in');
	}
});

lightbox.option({
	alwaysShowNavOnTouchDevices: true,
	disableScrolling: true,
	fadeDuration:400,
	resizeDuration: 500,
});


//callback

var callback = $('.callback');
var callbackOpen = callback.find('.callback__open');
var callbackWrapper = callback.find('.callback__wrapper');
var callbackClose = callback.find('.callback__close');
var body = $('body');
var overflowHidden = 'overflow-hidden';
var toggleCallback = function(){
	callbackWrapper.toggle();
	body.toggleClass(overflowHidden);
};
var callbackBody = callback.find('.callback__body');
callbackOpen.click(function(){	
	toggleCallback();
});
callbackClose.click(function(){	
	toggleCallback();
});
callbackWrapper.click(function(){
	toggleCallback();
});
callbackBody.click(function(e){
	e.stopPropagation();
});

$(document).keyup(function(e) {
    if (e.keyCode == 27) { 
        toggleCallback();
    };
});

