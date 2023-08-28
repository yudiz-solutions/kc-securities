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
        $(".accordion-button").on('click',function(evt){
            const elai = evt.target.closest('.accordion-item');   
           if($('.accordion-button').hasClass('collapsed')){
                $(".accordion-item").removeClass('active') ;
                $(elai).addClass("active");
            }
        });
    }); 



    $(function ($) {
        // var $mwo = $('.marquee-with-options');
        jQuery('.marquee-with-options').marquee({
            //speed in milliseconds of the marquee
            speed: 50,
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
    $('select').each(function(){
      var $this = $(this), numberOfOptions = $(this).children('option').length;
    
      $this.addClass('select-hidden'); 
      $this.wrap('<div class="select"></div>');
      $this.after('<div class="select-styled"></div>');
  
      var $styledSelect = $this.next('div.select-styled');
      $styledSelect.text($this.children('option').eq(0).text());
    
      var $list = $('<ul />', {
          'class': 'select-options'
      }).insertAfter($styledSelect);
    
      for (var i = 0; i < numberOfOptions; i++) {
          $('<li />', {
              text: $this.children('option').eq(i).text(),
              rel: $this.children('option').eq(i).val()
          }).appendTo($list);
          //if ($this.children('option').eq(i).is(':selected')){
          //  $('li[rel="' + $this.children('option').eq(i).val() + '"]').addClass('is-selected')
          //}
      }
    
      var $listItems = $list.children('li');
    
      $styledSelect.click(function(e) {
          e.stopPropagation();
          $('div.select-styled.active').not(this).each(function(){
              $(this).removeClass('active').next('ul.select-options').hide();
          });
          $(this).toggleClass('active').next('ul.select-options').toggle();
      });
    
      $listItems.click(function(e) {
          e.stopPropagation();
          $styledSelect.text($(this).text()).removeClass('active');
          $this.val($(this).attr('rel'));
          $list.hide();
          //console.log($this.val());
      });
    
      $(document).click(function() {
          $styledSelect.removeClass('active');
          $list.hide();
      });
  
  });

  //preloader
    $(window).on("load", function() {
    $('#preloader').fadeOut('100');
    });

    

});

