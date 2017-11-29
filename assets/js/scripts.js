// COOKIES SCRIPTS (minified)
// =========================================
function createCookie(e,t,n){if(n){var o=new Date;o.setTime(o.getTime()+24*n*60*60*1e3);var r="; expires="+o.toGMTString()}else var r="";document.cookie=e+"="+t+r+"; path=/"}function readCookie(e){for(var t=e+"=",n=document.cookie.split(";"),o=0;o<n.length;o++){for(var r=n[o];" "==r.charAt(0);)r=r.substring(1,r.length);if(0==r.indexOf(t))return r.substring(t.length,r.length)}return null}function eraseCookie(e){createCookie(e,"",-1)}


jQuery(document).ready(function($){

	// Init functions
	slider_carousel();
	//quotes_carousel();
	members_carousel();
	mobile_menu_toggle();
	cookies_popup();
    initMap();

	//ninja form placeholder
  	$('#ninja_forms_field_9').attr("placeholder","Wiadomość");


	var $body = $('body'),
		$wind = $(window),
		windW = $wind.width(),
		windH = $wind.height();


	function slider_carousel(){
		$('.owl-carousel').owlCarousel({
			items: 1,
			nav: false
		});
	}

	function quotes_carousel(){
		$('.quotes-carousel').owlCarousel({
			items: 1,
			nav: false,
		    loop: true,
		    autoplay: true,
		    autoplayTimeout: 4000,
		    autoplayHoverPause: true
		});
	}


	function members_carousel(){

		var carousel = $('.members-carousel');

		carousel.owlCarousel({
		    items: 1,
		    nav: false,
		    loop: true,
		    autoplay: true,
		    autoplayTimeout: 5000,
		    autoplayHoverPause: true
		});

	}


	function mobile_menu_toggle(){

	    $(".menu-toggle").click(function() {
	        $(".mobile-navigation").stop().slideToggle(500);
	        $body.toggleClass('menu-open');
	    });

    }

    function cookies_popup() {

	var cookie_section = $('#cookies-section');

	// define cookie name (replace 'ThemePrefix' with the desired text)
	var name = 'ThemePrefix_cookie_info_popup';

	// reed the cookie status
        var status = readCookie(name);

        // Show info if cookie !exist
        if (status == null) {
            cookie_section.show();
        }

        // set cookie value 1, save cookie for 30days and hide cookie section
        cookie_section.on('click', function(){

            var value = 1;
            var days = 30;

            createCookie(name,value,days);

            cookie_section.slideUp();

        });

	}

    // google map
    function initMap() {

        var mapElement = document.getElementById('map');

        if (mapElement) {

            var myLatLng = {lat: 50.248424, lng: 19.015111};

            var map = new google.maps.Map(mapElement, {
                zoom: 13,
                center: myLatLng,
                scrollwheel: false,
                disableDoubleClickZoom: true
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Tu jesteśmy!'
            });
        }
    }


});
