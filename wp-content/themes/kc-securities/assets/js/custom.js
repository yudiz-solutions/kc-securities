jQuery(document).ready(function ($) {

    //sticky
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 39) {
            jQuery('.site-header').addClass('sticky')
        } else {
            jQuery('.site-header').removeClass('sticky')
        }
    });

    //Group Companies
    jQuery('.company-group-main').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        arrows:false,
        dots: false,
        prevArrow: jQuery('.slick-prev'),
		nextArrow: jQuery('.slick-next'),
        responsive: [
            {
                breakpoint: 9999,
                settings: "unslick"
                
            },
            {
                breakpoint: 767,
                settings: {
                    arrows:true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows:true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    // Banner Slider
    jQuery('.banner-section').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: true,
        fade: true,
        pauseOnHover:false,
        ouchThreshold: 100,
        arrows: false,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    //Product Service
    jQuery('.product-wrapper').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        arrows: false,
        prevArrow: jQuery('.slick-prev'),
		nextArrow: jQuery('.slick-next'),
        responsive: [
            {
                breakpoint: 9999,
                settings: "unslick"
            },
            {
                breakpoint: 991,
                settings: {
                    arrows:true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    arrows:true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

       jQuery(".sub-menu").hide();
    jQuery(".sub-menu").each(function (i) {
        jQuery(this).addClass("unique_submenu" + i);
    });

    jQuery(".sub-menu-toggle").each(function (i) {
        jQuery(this).addClass("unique_submenu" + i);
    });

    let $i = 0;
    $(".sub-menu-toggle").each(function (e) {
        jQuery(this).on('click', function () {

            jQuery(this).parent().find("ul.sub-menu").toggle();

            $i++;
        });
    });


     // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");
	

    // form script
	jQuery(".wpcf7-form input, .wpcf7-form-control.wpcf7-textarea").focus(function(e) {
			jQuery(this).parents(".field-container").addClass("focused");
	});
	jQuery(".wpcf7-form input, .wpcf7-form-control.wpcf7-textarea").focusout(function(e) {
			if (jQuery(this).val().trim().length > 0) {
					jQuery(this).parents(".field-container").addClass("focused filled");
			} else {
					jQuery(this).parents(".field-container").removeClass("focused filled");
			}
	});
	jQuery(".wpcf7-form select").change(function(e) {
			if (jQuery(this).val().trim().length > 0)
					jQuery(this).parents(".field-container").addClass("focused filled");
			else
					jQuery(this).parents(".field-container").removeClass("focused filled");
	});
	jQuery(document).on("wpcf7mailsent", ".wpcf7-form", function() {
			jQuery(".wpcf7-form .field-container").removeClass("focused filled");
	});


    $(document).ready(function(){
        $(".accordion-item").removeClass('active') ;
        var $accordionItems = jQuery('.accordion-item');
        $accordionItems.first().addClass('active');
       // $accordionItems.first().removeClass('collapsed');
        //$(".accordion-button").addClass('collapsed') ;
        $(".accordion-button").on('click',function(evt){
            const elai = evt.target.closest('.accordion-item');   
           if($('.accordion-button').hasClass('collapsed')){
                $(".accordion-item").removeClass('active') ;
                $(elai).addClass("active");
            }

            // console.log($(this).next())
            // $(this).next().find('.accordion-item').addClass('active')
        });
    }); 


    $(document).on('click','.tabs li',function(){
        $(".accordion-item").removeClass('active') ;
        $(".accordion-button").addClass('collapsed') ;
        $(".accordion-collapse").removeClass('show') ;
        
        var rel = $(this).attr('rel');
        $('#'+ rel ).find('.accordion-item:first-child').addClass('active')
        $('#'+ rel ).find('.accordion-item:first-child').addClass('accordion-active');

        $('#'+ rel ).find('.accordion-item:first-child .accordion-button').removeClass('collapsed');
        $('#'+ rel ).find('.accordion-item:first-child .accordion-collapse').addClass('show');
        
    })


    $(function ($) {
        // var $mwo = $('.marquee-with-options');
        jQuery('.marquee-with-options').marquee({
            //speed in milliseconds of the marquee
            speed: 40,
            //gap in pixels between the tickers
            gap: 0,
            //gap in pixels between the tickers
            delayBeforeStart: -10000,
            //'left' or 'right'
            direction: 'left',
            //direction: 'right',
            //true or false - should the marquee be duplicated to show an effect of continues flow
            duplicated: true,
            //on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
            pauseOnHover: true,
        });
    });


    // custom select
//     $('select').each(function(){
//       var $this = $(this), numberOfOptions = $(this).children('option').length;
    
//       $this.addClass('select-hidden'); 
//       $this.wrap('<div class="select"></div>');
//       $this.after('<div class="select-styled"></div>');
  
//       var $styledSelect = $this.next('div.select-styled');
//       $styledSelect.text($this.children('option').eq(0).text());
    
//       var $list = $('<ul />', {
//           'class': 'select-options'
//       }).insertAfter($styledSelect);
    
//       for (var i = 0; i < numberOfOptions; i++) {
//           $('<li />', {
//               text: $this.children('option').eq(i).text(),
//               rel: $this.children('option').eq(i).val()
//           }).appendTo($list);
//           //if ($this.children('option').eq(i).is(':selected')){
//           //  $('li[rel="' + $this.children('option').eq(i).val() + '"]').addClass('is-selected')
//           //}
//       }
    
//       var $listItems = $list.children('li');
    
//       $styledSelect.click(function(e) {
//           e.stopPropagation();
//           $('div.select-styled.active').not(this).each(function(){
//               $(this).removeClass('active').next('ul.select-options').hide();
//           });
//           $(this).toggleClass('active').next('ul.select-options').toggle();
//       });
    
//       $listItems.click(function(e) {
//           e.stopPropagation();
//           $styledSelect.text($(this).text()).removeClass('active');
//           $this.val($(this).attr('rel'));
//           $list.hide();
          
//           //console.log($this.val());
//       });
    
//       $(document).click(function() {
//           $styledSelect.removeClass('active');
//           $list.hide();
//       });
  
//   });

  //preloader
    $(window).on("load", function() {
    $('#preloader').fadeOut('100');
    });

new WOW().init();          

   
$('#city').select2(
    {
        minimumResultsForSearch: -1,
    }
);

$(document).on('change', '#city', function(e) {
    e.preventDefault();
    var location_are = jQuery('#city').val();
    $.ajax({
        url: location_filter.ajaxurl,
        data : {action:'office_location',location_are:location_are},
        type : 'post',
        success:function(result){
            $('.location_area').html(result);
        },
        // error:function(result){
        //     console.wrap(result);
        // }
    });
    //alert(location_are);
});

$(document).on('click', '.primary-button', function(e) {
    e.preventDefault();
    var month = jQuery('#month').val();
    var year = jQuery('#year').val();
    //alert(month);
    //alert(year);
    $.ajax({
        url: location_filter.ajaxurl,
        data : {action:'research',month:month,year:year },
        type : 'post',
        dataType: 'json',
        success:function(result){

          //  $('.research_post').html(result);
            $('.research_post').html(result.html);

            console.log($('.tabs  .'+result.active_cat_slug));
            $('.tabs  .'+result.active_cat_slug).trigger('click')
           // $(".tabs li:first-child").trigger('click')
        },
        // error:function(result){
        //     console.wrap(result);
        // }
    });
    //alert(location_are);
});

  //Scroll back to top
   (function($) { "use strict";
    $(document).ready(function(){"use strict";  
        var progressPath = document.querySelector('.progress-wrap path');
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';    
        var updateProgress = function () {
            var scroll = $(window).scrollTop();
            var height = $(document).height() - $(window).height();
            var progress = pathLength - (scroll * pathLength / height);
            progressPath.style.strokeDashoffset = progress;
        }
        updateProgress();
        $(window).scroll(updateProgress); 
        var offset = 50;
        var duration = 550;
        jQuery(window).on('scroll', function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.progress-wrap').addClass('active-progress');
            } else {
                jQuery('.progress-wrap').removeClass('active-progress');
            }
        });       
        jQuery('.progress-wrap').on('click', function(event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, duration);
            return false;
        })
    });
})(jQuery); 



});
