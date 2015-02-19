(function($) { "use strict";
	
	/* Menu */
	jQuery(".navigation  ul li ul").parent("li").addClass("parent-list");
	jQuery(".parent-list").find("a:first").append("<span class='menu-nav-arrow'><i class='fa fa-angle-down'></i></span>");
	
	/* Home one page */
	
	if (jQuery(".one-page").length > 0) {
		jQuery(".one-page .navigation").onePageNav({
			currentClass : "current_page_item",
			filter : ":not(.out-button a)",
			changeHash : false,
			scrollSpeed : 750,
			scrollOffset : parseFloat(jQuery("#header").innerHeight())+50
		});
	}
	
	/* Header fixed */
	
	var aboveHeight   = jQuery("#header").outerHeight();
	var fixed_enabled = jQuery("#wrap").hasClass("fixed-enabled");
	if(fixed_enabled){
		jQuery(window).scroll(function(){
			if(jQuery(window).scrollTop() > aboveHeight ){
				jQuery("#header").css({"top":"0"}).addClass("fixed-nav");
			}else{
				jQuery("#header").css({"top":"auto"}).removeClass("fixed-nav");
			}
		});
	}else {
		jQuery("#header").removeClass("fixed-nav");
	}
	
	/* Header mobile */
	
	jQuery(window).bind("resize", function () {
		if (jQuery(this).width() > 990) {
			jQuery(".navigation_mobile_main").addClass("navigation");
			jQuery(".navigation").removeClass("navigation_mobile");
			jQuery(".navigation").find(".navigation_mobile_click").remove();
		}else {
			jQuery(".navigation").addClass("navigation_mobile");
			jQuery(".navigation").addClass("navigation_mobile_main");
			jQuery(".navigation_mobile").removeClass("navigation");
			jQuery(".navigation_mobile").each(function () {
				if (!jQuery(this).find(".navigation_mobile_click").length) {
					jQuery(this).prepend("<div class='navigation_mobile_click'>Ir Para...</div>");
				}
			});
		}
	});
	
	if (jQuery(window).width() > 990) {
		jQuery(".navigation_mobile_main").addClass("navigation");
		jQuery(".navigation").removeClass("navigation_mobile");
		jQuery(".navigation").find(".navigation_mobile_click").remove();
	}else {
		jQuery(".navigation").addClass("navigation_mobile");
		jQuery(".navigation").addClass("navigation_mobile_main");
		jQuery(".navigation_mobile").removeClass("navigation");
		jQuery(".navigation_mobile").each(function () {
			if (!jQuery(this).find(".navigation_mobile_click").length) {
				jQuery(this).prepend("<div class='navigation_mobile_click'>Ir Para...</div>");
			}
		});
	}
	
	if (jQuery(".navigation_mobile_click").length) {
		jQuery(".navigation_mobile_click").click(function() {
			if (jQuery(this).hasClass("navigation_mobile_click_close")) {
				jQuery(this).next().slideUp(500);
				jQuery(this).removeClass("navigation_mobile_click_close");
			}else {
				jQuery(this).next().slideDown(500);
				jQuery(this).addClass("navigation_mobile_click_close");
			}
		});
		
		jQuery(".navigation_mobile ul li").each(function() {	
			var sub_menu = jQuery(this).find("ul:first");
			jQuery(this).hover(function() {	
				sub_menu.stop().css({overflow:"hidden", height:"auto", display:"none", paddingTop:0}).slideDown(250, function() {
					jQuery(this).css({overflow:"visible", height:"auto"});
				});	
			},function() {	
				sub_menu.stop().slideUp(250, function() {	
					jQuery(this).css({overflow:"hidden", display:"none"});
				});
			});	
		});
	}
	
	/* search */
	
	jQuery(".header-search-a").click(function (){
		var header_search = jQuery(this);
		if (header_search.parent().hasClass("header-search-active")) {
			header_search.parent().removeClass("header-search-active");
			header_search.parent().find(".header-search-form").slideUp(300);
		}else {
			header_search.parent().addClass("header-search-active");
			header_search.parent().find(".header-search-form").slideDown(300);
		}
	});
	
	/* slideshow */
	
	if (jQuery(".tp-banner").length) {
		jQuery('.tp-banner').revolution({
			delay:5000,
			startwidth:1170,
			startheight:532,
			hideThumbs:200,
			fullWidth:"off",
			fullScreen:"off",
		});
	}
	
	/* bxSlider */
	
	jQuery(".single-portfolio-slide-3 > ul").bxSlider({easing: "linear",tickerHover: true,adaptiveHeightSpeed: 1500,moveSlides: 1,maxSlides: 1,auto: true});
	
	jQuery(".bxslider-slide > ul").bxSlider({easing: "linear",tickerHover: true,slideWidth: 1170,adaptiveHeightSpeed: 1500,moveSlides: 1,maxSlides: 1,auto: true});

	/* Counter */
	
	jQuery(".box-icon-number h5").each(function () {
		jQuery(this).appear(function() {
			var endNum = parseInt(jQuery(this).text());
			jQuery(this).countTo({
				from: 0,
				to: endNum,
				speed: 4000,
				refreshInterval: 60,
			});
		},{accX: 0, accY: 0});
	});
	
	/* Go up */
	
	jQuery(window).scroll(function () {
		if(jQuery(this).scrollTop() > 100 ) {
			jQuery(".go-up").css("right","20px");
		}else {
			jQuery(".go-up").css("right","-60px");
		}
	});
	jQuery(".go-up").click(function(){
		jQuery("html,body").animate({scrollTop:0},500);
		return false;
	});
	
	/* Accordion & Toggle */
	
	jQuery(".accordion .accordion-title").each(function(){
		jQuery(this).click(function() {
			if (jQuery(this).parent().parent().hasClass("toggle-accordion")) {
				jQuery(this).parent().find("li:first .accordion-title").addClass("active");
				jQuery(this).parent().find("li:first .accordion-title").next(".accordion-inner").addClass("active");
				jQuery(this).toggleClass("active");
				jQuery(this).next(".accordion-inner").slideToggle().toggleClass("active");
				jQuery(this).find("i").toggleClass("fa-minus").toggleClass("fa-plus");
			}else {
				if (jQuery(this).next().is(":hidden")) {
					jQuery(this).parent().parent().find(".accordion-title").removeClass("active").next().slideUp(200);
					jQuery(this).parent().parent().find(".accordion-title").next().removeClass("active").slideUp(200);
					jQuery(this).toggleClass("active").next().slideDown(200);
					jQuery(this).next(".accordion-inner").toggleClass("active");
					jQuery(this).parent().parent().find("i").removeClass("fa-plus").addClass("fa-minus");
					jQuery(this).find("i").removeClass("fa-minus").addClass("fa-plus");
				}
			}
			return false;
		});
	});
	
	/* Progressbar */
	
	if (jQuery(".progressbar-percent").length) {
		jQuery(".progressbar-percent").each(function(){
			var $this = jQuery(this);
			var percent = $this.attr("data-percent");
			$this.bind("inview", function(event, isInView, visiblePartX, visiblePartY) {
				if (isInView) {
					$this.animate({ "width" : percent + "%"}, percent*20);
				}
			});
		});
	}
	
	/* Portfolio */
	
	jQuery(".protfolio-filter ul").each(function() {
		var $this = jQuery(this);
		$this.find("li a").click(function() {
			$this.find("li").removeClass("current");
			jQuery(this).parent().addClass("current");
		});
	});
	
	jQuery(window).load(function() {
		if (jQuery(".protfolio-filter").length > 0) {
			jQuery(".protfolio-filter ul li:first-child a").click();
		}
	});
	
	if (jQuery(".protfolio-filter").length > 0) {
		var $container = jQuery(".portfolio-0 ul");
		$container.isotope({
			filter: "*",
			animationOptions: {
				duration: 750,
				itemSelector: '.isotope-item',
				easing: "linear",
				queue: false,
			}
		});
	}
	
	jQuery(".protfolio-filter ul li a").click(function(){
		var selector = jQuery(this).attr("data-filter");
		$container.isotope({
			filter: selector,
			animationOptions: {
				duration: 750,
				itemSelector: '.isotope-item',
				easing: "linear",
				queue: false,
			}
		});
		return false;
	});
	
	/* niceScroll */
	
	jQuery("html").niceScroll({
		scrollspeed: 60,
		mousescrollstep: 38,
		cursorwidth: 6,
		cursorborder: 0,
		cursorcolor: '#171717',
		autohidemode: false,
		zindex: 9999999,
		horizrailenabled: false,
		cursorborderradius: 0,
	});
	
	/* animation */
	
	jQuery(".animation").each( function() {
		var $this = jQuery(this);
		var animation = $this.attr("data-animate");
		$this.bind("inview", function(event, isInView, visiblePartX, visiblePartY) {
			if (isInView) {
				$this.css("visibility","visible");
				$this.addClass(animation);
				if(animation.indexOf("fade") === -1) {
					$this.css("opacity", "1");
				}
			}
		});
	});
	
	/* Contact us */
	
	jQuery(".form-js").submit(function () {
		var thisform = jQuery(this);
		jQuery('.required-error',thisform).remove();
		var name	= jQuery("#name").val();
		var mail	= jQuery("#mail").val();
		var message	= jQuery("#message").val();
		var data = {'name':name,'mail':mail,'message':message};
		if (name == "") {
			jQuery("#name").after('<span class="form-description required-error">Por favor preencha este campo.</span>');
		}else {
			jQuery("#name").parent().find('.required-error').remove();
		}
		if (mail == "") {
			jQuery("#mail").after('<span class="form-description required-error">Por favor preencha este campo.</span>');
		}else {
			jQuery("#mail").parent().find('.required-error').remove();
		}
		if (message == "") {
			jQuery("#message").after('<span class="form-description required-error">Por favor preencha este campo.</span>');
		}else {
			jQuery("#message").parent().find('.required-error').remove();
		}
		
		if (name != "" && mail != "" && message != "") {
			
			$.ajax({
				url:thisform.attr('action'),
				dataType:'json',
				data:{'name':name, 'mail':mail, 'message':message},
				success:function(result){
					console.log(result);
			//jQuery.post(thisform.attr('action'),data,function (result) {
					if (result == "done") {
						jQuery(".contact-alert").remove();
						thisform.prepend("<div class='alerts contact-alert'><i class='fa fa-check-circle'></i><div><h3>Muito Obrigado "+name+"!</h3><p> Tentaremos ser breves na resposta.</p></div></div>");
						jQuery("#name").val("");
						jQuery("#mail").val("");
						jQuery("#message").val("");
					}
				}
			});
		}
		else{
			return false;
		}
	});
	
	/* Lightbox */
	
	var lightboxArgs = {			
		animation_speed: "fast",
		overlay_gallery: true,
		autoplay_slideshow: false,
		slideshow: 5000, // light_rounded / dark_rounded / light_square / dark_square / facebook
		theme: "pp_default", 
		opacity: 0.8,
		show_title: false,
		social_tools: "",
		deeplinking: false,
		allow_resize: true, // Resize the photos bigger than viewport. true/false
		counter_separator_label: "/", // The separator for the gallery counter 1 "of" 2
		default_width: 940,
		default_height: 529
	};
		
	jQuery("a[href$=jpg], a[href$=JPG], a[href$=jpeg], a[href$=JPEG], a[href$=png], a[href$=gif], a[href$=bmp]:has(img)").prettyPhoto(lightboxArgs);
			
	jQuery("a[class^='prettyPhoto'], a[rel^='prettyPhoto']").prettyPhoto(lightboxArgs);
	
	/* Twitter */
	/*
	jQuery(".footer-tweet,.sidebar-tweet").tweet({
		join_text: false,
		username: "envato", // Username
		modpath: "./js/twitter/",
		avatar_size: false,
		count: 2,
		template: "{text} <br> {time}",
		loading_text: "loading twitter feed..aaa.",
		seconds_ago_text: "about %d seconds ago",
		a_minutes_ago_text: "about a minute ago",
		minutes_ago_text: "about %d minutes ago",
		a_hours_ago_text: "about an hour ago",
		hours_ago_text: "about %d hours ago",
		a_day_ago_text: "about a day ago",
		days_ago_text: "about %d days ago",
		view_text: "view tweet on twitter"
	});
	*/
	jQuery(".sidebar-tweet ul").bxSlider({easing: "linear",tickerHover: true,slideWidth: 1170,adaptiveHeightSpeed: 1500,moveSlides: 1,maxSlides: 1,auto: true});

	var mapa = document.getElementById("mapa");

    if(mapa){
    	
    	var mapOptions = {
          center: new google.maps.LatLng(41.390931,-7.999344),
          scrollwheel: false,
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          zoomControlOptions: {
		     style: google.maps.ZoomControlStyle.LARGE
		  },
        };

        var map = new google.maps.Map(mapa, mapOptions);
		
		var marker = new google.maps.Marker({
		    position: mapOptions.center,

		    map: map,
		    title:"Electro Poças",
		    icon:"http://localhost/ElectroPocas/images/marker_electro.png"
		});

		var infowindow = new google.maps.InfoWindow(
		{ 
			content: '',
			size: new google.maps.Size(200,200)
		});

		google.maps.event.addListener(marker, 'click', function() {
			//infowindow.open(map,marker);
			window.open("https://www.google.pt/maps/place/Electro+Po%C3%A7as/@41.390931,-7.999344,17z/data=!3m1!4b1!4m2!3m1!1s0xd24c6630fa8d8e1:0x7f7009b46de1ad73");
		});

    }


/*
	$.ajaxSetup({ cache: true });
	$.getScript('//connect.facebook.net/en_UK/all.js', function(){
		FB.init({
			appId: '744785525590202',
		});     
		FB.api('/744785525590202', function(response) {
		  console.log(response);
		});
	});
*/
	 	/* Noticias HashTag Handler*/

	if(window.location.hash){
		
		var hash = window.location.hash.substr(1, window.location.hash.length);
		smoothScroll.animateScroll( null, '#'+hash , {"offset": 150 });
		
	}
	/*
	gapi.client.setApiKey('AIzaSyB2H32w2ZVkil901usHWRlmhyFVhJUIx4g');   

	
    gapi.client.load('urlshortener', 'v1',function(){

	$('.social-ul.social-ul-2.post-social .social-twitter').each(function(ind, it){
		var request = gapi.client.urlshortener.url.insert({
            'resource': {
              'longUrl': $(it).attr('data-url')
            }
    	});
    	request.execute(function(response){
    		$(it).attr('data-url',response.id);
			console.log(response.id);
		});
		$('.social-twitter').sharrre({
	      share: { twitter: true },
	      //url: response.id,
	      //text: 'OLA MUNDO',
	      enableHover: false,
	      enableTracking: false,
	      template: '<a href="#"><i class="fa fa-twitter"></i></a>',
	      buttons: { twitter: {via: 'ElectroPoças'}},
	      click: function(api, options){
	        //api.simulateClick();
	        api.openPopup('twitter');
	        return false;
	      }
	    });
	});
	*/
    		
   	$('.social-twitter.share-btn').sharrre({
      share: { twitter: true },
      //url: response.id,
      //text: 'OLA MUNDO',
      enableHover: false,
      enableTracking: false,
      template: '<a href="#"><i class="fa fa-twitter"></i></a>',
      buttons: { twitter: {via: 'ElectroPoças'}},
      click: function(api, options){
        //api.simulateClick();
        api.openPopup('twitter');
        return false;
      }
    });
    	
    

	var url = 'http://localhost/ElectroPocas/';

	$('.social-facebook.share-btn').sharrre({
      share: { facebook: true },
      //url: 'http://test.electropocas.pt/OG/share/',
      enableHover: false,
      enableTracking: false,
      template: '<a href="#"><i class="fa fa-facebook"></i></a>',
      click: function(api, options){
      		

          api.openPopup('facebook');
          return false;
      }
    });


    $('.social-google.share-btn').sharrre({
        share: { googlePlus: true },
        //url: url,
        enableHover: false,
        enableTracking: false,
        template: '<a href="#"><i class="fa fa-google-plus"></i></a>',
        click: function(api, options){
          api.openPopup('googlePlus');
          return false;
        }
    });

})(jQuery);