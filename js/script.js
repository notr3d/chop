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

{

    var myCenter=new google.maps.LatLng(54.212117, 37.646803);

    function initialize(){
        var mapProp = {
            center:myCenter,
            zoom:16,
					  scrollwheel:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map=new google.maps.Map(document.getElementById("map"), mapProp);

        var marker=new google.maps.Marker({
            position:myCenter,
            icon:'../img/page-logo.png',
            size: new google.maps.Size(20, 32)
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

};




