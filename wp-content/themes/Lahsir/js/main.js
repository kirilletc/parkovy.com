


jQuery(window).load(function(){
var lastId,
    topMenu = jQuery(".top-menu"),
    topMenuheader = jQuery("#header"),
    topMenuHeight = topMenuheader.outerHeight(),
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function(){
      var item = jQuery(jQuery(this).attr("href"));
      if (item.length) { return item; }
    });
menuItems.click(function(e){
  var href = jQuery(this).attr("href"),
      offsetTop = href === "#" ? 0 : jQuery(href).offset().top-topMenuHeight-20;
  jQuery('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 1000);
  e.preventDefault();
});



jQuery(window).scroll(function(){
   var fromTop = jQuery(this).scrollTop()+topMenuHeight;
   
   var cur = scrollItems.map(function(){
     if (jQuery(this).offset().top-topMenuHeight-20 < fromTop)
       return this;
   });
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
	if (lastId !== id) {
	   lastId = id;
	   menuItems
		 .parent().removeClass("active")
		 .end().filter("[href=#"+id+"]").parent().addClass("active");
	}
});
});

jQuery(document).ready(function(){
	jQuery('a.scrollbind[href*=#]').bind("click", function(e){
	var anchor = $(this);
	jQuery('html, body').stop().animate({
	scrollTop: jQuery(anchor.attr('href')).offset().top-120
	}, 1000);
	e.preventDefault();
	});
	return false;
});


	 
	 
jQuery(function($){
   $(".phonenum").mask("+7 (999) 999-99-99",{placeholder:"_"});
   $(".namemesk").mask("aaa?aaaaaaaaaaaaaaaaa",{placeholder:""});


});	 



jQuery(document).ready(function(){
  jQuery('.experience-slider').slick({
	dots: false,
	arrows: true,
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	prevArrow : '<div class="button button-prev">Предыдущие</div>',
	nextArrow : '<div class="button button-next">Следующие</div>',
	speed: 100,
	draggable: false,
	swipe: false,
	vertical: true,
  });
  
});
jQuery(document).ready(function(){
  jQuery('.past-slider').slick({
	dots: true,
	arrows: true,
	infinite: true,
	slidesToShow: 4,
	slidesToScroll: 4,
	prevArrow : '<div class="button button-prev">Предыдущие</div>',
	nextArrow : '<div class="button button-next">Следующие</div>',
	speed: 100,
	draggable: false,
	swipe: false,
	responsive: [
    {
      breakpoint: 620,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    }
  ]
  });
  
});
		
jQuery(document).ready(function() {
		jQuery(".fancybox").fancybox({
			
		maxHeight	: '99%',
		autoSize : true,
		autoWidth  : true,
		autoHeight : true,
		openEffect	: 'none',
		closeEffect	: 'none',
		helpers : {
			overlay : {
				locked: false
			}
		}
	});
	});

jQuery(document).ready(function() {
	jQuery('.buttonmenu').click(function () {
		jQuery('.top-menu').toggleClass('open');
		jQuery('.header').toggleClass('open'); 
		jQuery('.top-menu').animate({opacity: 'toggle', height: 'toggle'}, 1000);
	});	
	
	jQuery('.top-menu a').click(function () {
		if (jQuery('#top-menu').hasClass('open')) {
	
		jQuery('.top-menu').removeClass('open');
		jQuery('.header').removeClass('open'); 
		jQuery('.top-menu').animate({opacity: 'toggle', height: 'toggle'}, 0);
		};
	});
});


function $_GET(key) {
    var s = window.location.search;
    s = s.match(new RegExp(key + '=([^&=]+)'));
    return s ? s[1] : false;
}

 

jQuery(document).ready(function() {
$('.utm_medium').val($_GET('utm_medium'));
$('.utm_source').val($_GET('utm_source'));
$('.utm_campaign').val($_GET('utm_campaign'));
$('.utm_term').val($_GET('utm_term'));
$('.utm_content').val($_GET('utm_content'));

});



