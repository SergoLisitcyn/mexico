$(function() {

	
	var items = $('.navMenu-items').width();
	var itemSelected = document.getElementsByClassName('navMenu-item');
	// navPointerScroll($(itemSelected));
   
	  $('.navMenu-right').click(function () {
		  $(".navMenu-items").animate({
			  scrollLeft: '+='+items
		  });
	  });
	  $('.navMenu-left').click(function () {
		  $( ".navMenu-items" ).animate({
			  scrollLeft: "-="+items
		  });
	  });
  
	if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Xiaomi|Opera Mini/i.test(navigator.userAgent) ) {
	  var scrolling = false;
  
	  $(".navMenu-right").bind("mouseover", function(event) {
		  scrolling = true;
		  scrollContent("right");
	  }).bind("mouseout", function(event) {
		  scrolling = false;
	  });
  
	  $(".navMenu-left").bind("mouseover", function(event) {
		  scrolling = true;
		  scrollContent("left");
	  }).bind("mouseout", function(event) {
		  scrolling = false;
	  });
  
	  function scrollContent(direction) {
		  var amount = (direction === "left" ? "-=3px" : "+=3px");
		  $(".navMenu-items").animate({
			  scrollLeft: amount
		  }, 1, function() {
			  if (scrolling) {
				  scrollContent(direction);
			  }
		  });
	  }
	}
	
	$('.navMenu-item').click(function (event) {
		event.preventDefault();
		  $('#navMenu').find('.active').removeClass('active');
		  $(this).addClass("active");
		  navPointerScroll($(this));
	  });


	
  
  });
  

	const menu = document.querySelector('.slider-menu');

	if (menu) {
		function navPointerScroll(ele) {
		
			var parentScroll = $(".navMenu-items").scrollLeft();
			var offset = ($(ele).offset().left - $('.navMenu-items').offset().left);
			var totalelement = offset + $(ele).outerWidth()/2;
		
		}
	}




  $(function() { 


	// Mега меню
	$(".sf-menu").after("<div id='my-menu'>");
	$(".sf-menu").clone().appendTo("#my-menu");
	$("#my-menu").find("*").attr("style", "");
	$("#my-menu").find("ul").removeClass("sf-menu");
	$("#my-menu").mmenu({ 
		extensions : [ 'widescreen', 'theme-white', 'fx-menu-slide', 'pagedim-black', 'position-right' ],
		navbar: {
			title: "Catalogar"
		}
	});

	$("#my-menu .mm-listview").after("<div class='phone-double'>");
	$(".phone > a").first().clone().appendTo(".phone-double");
	$('.mm-panel:first-child .phone-double').remove();


	var api = $("#my-menu").data("mmenu");
	api.bind("close:finish", function () {
		$(".menu__icon").removeClass("active");
	});

	$(".menu__icon").click(function() {
		$(".menu__icon").toggleClass("active");
		if ($(".menu__icon").hasClass("active")) {
			api.open();
		} else {
			$(".menu__icon").removeClass("active");
			api.close();
		};
	});




	// Phone Mask

	$.each($('input.phone'), function (index, val) {
		$(this).focus(function () {
			$(this).inputmask('+7(999) 999 9999', {
				clearIncomplete: true, clearMaskOnLostFocus: true
			});
		});
	});

	$.each($('input.passport'), function (index, val) {
		$(this).focus(function () {
			$(this).inputmask('99 99  999999', {
				clearIncomplete: true, clearMaskOnLostFocus: true
			});
		});
	});



	$('.calculator__dop').on("click", function() {
		$( this ).toggleClass( "active" );
		if ($(this).hasClass("active")) {
			$('.calculator__center-col-t, .calculator__center-col-m').slideUp(500);
		} else {
			$('.calculator__center-col-t, .calculator__center-col-m').slideDown(500);
		}
	});

  });
  



  // Calculator

  function getNumEnding(iNumber, aEndings)
  {
	  var sEnding, i;
	  iNumber = iNumber % 100;
	  if (iNumber>=11 && iNumber<=19) {
		  sEnding=aEndings[2];
	  }
	  else {
		  i = iNumber % 10;
		  switch (i)
		  {
			  case (1): sEnding = aEndings[0]; break;
			  case (2):
			  case (3):
			  case (4): sEnding = aEndings[1]; break;
			  default: sEnding = aEndings[2];
		  }
	  }
	  return sEnding;
  }
  
  function setDate(days, type) {
	  var someDate = new Date();
	  var numberOfDaysToAdd = days;
	  someDate.setDate(someDate.getDate() + numberOfDaysToAdd); 
	  
	  var dd = someDate.getDate();
	  var mm = someDate.getMonth() + 1;
	  var y = someDate.getFullYear();
	  if (type == 'apply')
	  {
		  jQuery('.mfo_date_apply').html((dd < 10 ? '0' : '') + dd + '.'+ (mm < 10 ? '0' : '') + mm + '.'+ y);
	  }
	  else
	  {
		  jQuery('.mfo_date').html((dd < 10 ? '0' : '') + dd + '.'+ (mm < 10 ? '0' : '') + mm + '.'+ y);
	  }
  }
  
  jQuery(document).ready(function($){
	  setDate(7);
	  setDate(7, 'apply');
	  $('.filter-form').show();
	  //Сумма
	  $('input[name="rs_sum"]').rangeslider({
		  polyfill: false,
		  onInit:function(){},
		  onSlide: function(position, value)
		  {
			  $('input[name="rs_sum_output"]').val(value);
			  $('.mfo_sum').html(value);
			  $('.mfo_comission').html(parseInt(0.01*value*$('input[name="rs_term_output"]').val()));
			  $('.mfo_result').html(parseInt(value)+parseInt(0.01*value*$('input[name="rs_term_output"]').val()));
		  }
	  });
	  $('input[name="rs_sum_apply"]').rangeslider({
		  polyfill: false,
		  onInit:function(){},
		  onSlide: function(position, value)
		  {
			  $('.amount').html(value);
		  }
	  });
	  $('input[name="rs_sum_output"]').on("change paste keyup blur", function(event) {
		  if(event.which==13 || event.type=='blur' || event.type=='paste')
		  {
			  if ($('.rangeslider').is(':visible'))
			  {
				  const $input=$('input[name="rs_sum"]');
				  $input.val($(this).val());
				  $input.rangeslider('update',true);	
			  }
			  $('.mfo_sum').html($(this).val());
			  $('.mfo_comission').html(parseInt(0.01*$(this).val()*$('input[name="rs_term_output"]').val()));
			  $('.mfo_result').html(parseInt($(this).val())+parseInt(0.01*$(this).val()*$('input[name="rs_term_output"]').val()));
		  }
	  });
	  $('.sub-sum').click(function() {
		  var $input1=$('input[name="rs_sum_output"]').val();
		  $input1 = parseInt($input1) - 100;
		  $('input[name="rs_sum_output"]').val($input1);
		  if ($('.rangeslider').is(':visible'))
		  {
			  const $input=$('input[name="rs_sum"]');
			   $input.val($input1);
			   $input.rangeslider('update',true);
		  }
		  $('.mfo_sum').html($input1);
		  $('.mfo_comission').html(parseInt(0.01*$input1*$('input[name="rs_term_output"]').val()));
		  $('.mfo_result').html(parseInt($input1)+parseInt(0.01*$input1*$('input[name="rs_term_output"]').val()));
	  });
	  $('.sub-sum-apply').click(function() {
		  var $input1=$('.amount').html();
		  $input1 = parseInt($input1) - 100;
		  $('.amount').html($input1);
		  if ($('.rangeslider').is(':visible'))
		  {
			  const $input=$('input[name="rs_sum_apply"]');
			   $input.val($input1);
			   $input.rangeslider('update',true);
		  }
	  });
	  $('.add-sum').click(function() {
		  var $input1=$('input[name="rs_sum_output"]').val();
		  $input1 = parseInt($input1) + 100;
		  $('input[name="rs_sum_output"]').val($input1);
		  if ($('.rangeslider').is(':visible'))
		  {
			  const $input=$('input[name="rs_sum"]');
			  $input.val($input1);
			  $input.rangeslider('update',true);
		  }
		  $('.mfo_sum').html($input1);
		  $('.mfo_comission').html(parseInt(0.01*$input1*$('input[name="rs_term_output"]').val()));
		  $('.mfo_result').html(parseInt($input1)+parseInt(0.01*$input1*$('input[name="rs_term_output"]').val()));
	  });
	  $('.add-sum-apply').click(function() {
		  var $input1=$('.amount').html();
		  $input1 = parseInt($input1) + 100;
		  $('.amount').html($input1);
		  if ($('.rangeslider').is(':visible'))
		  {
			  const $input=$('input[name="rs_sum_apply"]');
			   $input.val($input1);
			   $input.rangeslider('update',true);
		  }
	  });
	  
	  //Срок
	  $('input[name="rs_term"]').rangeslider({
		  polyfill: false,
		  onInit:function(){},
		  onSlide: function(position, value)
		  {
			  $('input[name="rs_term_output"]').val(value);
			  $('.mfo_term').html(value);
			  $('.mfo_comission').html(parseInt(0.01*value*$('input[name="rs_sum_output"]').val()));
			  $('.mfo_result').html(parseInt($('input[name="rs_sum_output"]').val())+parseInt(0.01*value*$('input[name="rs_sum_output"]').val()));
			  setDate(value);
			  $('.term_days').html(getNumEnding(value, ['день', 'дня', 'дней']));
		  }
	  });
	  $('input[name="rs_term_apply"]').rangeslider({
		  polyfill: false,
		  onInit:function(){},
		  onSlide: function(position, value)
		  {
			  $('.term').html(value);
			  setDate(value, 'apply');
			  $('.term_days_apply').html(getNumEnding(value, ['день', 'дня', 'дней']));
		  }
	  });
	  $('input[name="rs_term_output"]').on("change paste keyup blur", function(event) {
		  if(event.which==13 || event.type=='blur' || event.type=='paste')
		  {
			  if ($('.rangeslider').is(':visible'))
			  {
				  const $input=$('input[name="rs_term"]');
				  $input.val($(this).val());
				  $input.rangeslider('update',true);
			  }
			  $('.mfo_term').html($(this).val());
			  $('.mfo_comission').html(parseInt(0.01*$(this).val()*$('input[name="rs_sum_output"]').val()));
			  $('.mfo_result').html(parseInt($('input[name="rs_sum_output"]').val())+parseInt(0.01*$(this).val()*$('input[name="rs_sum_output"]').val()));
			  setDate(parseInt($(this).val()));
			  $('.term_days').html(getNumEnding($(this).val(), ['день', 'дня', 'дней']));
		  }
	  });
	  $('.sub-term').click(function() {
		  var $input1=$('input[name="rs_term_output"]').val();
		  $input1 = parseInt($input1) - 1;
		  $('input[name="rs_term_output"]').val($input1);
		  if ($('.rangeslider').is(':visible'))
		  {
			  const $input=$('input[name="rs_term"]');
			  $input.val($input1);
			  $input.rangeslider('update',true);
		  }
		  $('.mfo_term').html($input1);
		  $('.mfo_comission').html(parseInt(0.01*$input1*$('input[name="rs_sum_output"]').val()));
		  $('.mfo_result').html(parseInt($('input[name="rs_sum_output"]').val())+parseInt(0.01*$input1*$('input[name="rs_sum_output"]').val()));
		  setDate($input1);
		  $('.term_days').html(getNumEnding($input1, ['день', 'дня', 'дней']));
	  });
	  $('.sub-term-apply').click(function() {
		  var $input1=$('.term').html();
		  $input1 = parseInt($input1) - 1;
		  $('.term').html($input1);
		  if ($('.rangeslider').is(':visible'))
		  {
			  const $input=$('input[name="rs_term_apply"]');
			   $input.val($input1);
			   $input.rangeslider('update',true);
		  }
		  setDate($input1);
		  $('.term_days_apply').html(getNumEnding($input1, ['день', 'дня', 'дней']));
	  });
	  $('.add-term').click(function() {
		  var $input1=$('input[name="rs_term_output"]').val();
		  $input1 = parseInt($input1) + 1;
		  $('input[name="rs_term_output"]').val($input1);
		  if ($('.rangeslider').is(':visible'))
		  {
			  const $input=$('input[name="rs_term"]');
			  $input.val($input1);
			  $input.rangeslider('update',true);
		  }
		  $('.mfo_term').html($input1);
		  $('.mfo_comission').html(parseInt(0.01*$input1*$('input[name="rs_sum_output"]').val()));
		  $('.mfo_result').html(parseInt($('input[name="rs_sum_output"]').val())+parseInt(0.01*$input1*$('input[name="rs_sum_output"]').val()));
		  setDate($input1);
		  $('.term_days').html(getNumEnding($input1, ['день', 'дня', 'дней']));
	  });
	  $('.add-term-apply').click(function() {
		  var $input1=$('.term').html();
		  $input1 = parseInt($input1) + 1;
		  $('.term').html($input1);
		  if ($('.rangeslider').is(':visible'))
		  {
			  const $input=$('input[name="rs_term_apply"]');
			   $input.val($input1);
			   $input.rangeslider('update',true);
		  }
		  setDate($input1);
		  $('.term_days_apply').html(getNumEnding($input1, ['день', 'дня', 'дней']));
	  });
  
	  //Фокус
	   $('.MuiInputBase-formControl input, .MuiInputBase-formControl select').focus(function() {
		   $(this).parent().addClass('Mui-focused');
		   $(this).parent().prev('.MuiInputLabel-formControl').addClass('Mui-focused');
	   });
	   $('.MuiInputBase-formControl input, .MuiInputBase-formControl select').blur(function() {
		   $(this).parent().removeClass('Mui-focused');
		   $(this).parent().prev('.MuiInputLabel-formControl').removeClass('Mui-focused');
	   });
	  $('.subscribe__input input').focus(function() {
		  $(this).parent().addClass('Mui-focused');
		  $(this).parent().addClass('makeStyles-focused-149');
		  $(this).parent().prev().addClass('Mui-focused');
		  $(this).parent().prev().addClass('Mui-required');
		  $(this).parent().prev().addClass('MuiInputLabel-shrink');
	  });
	  $('.subscribe__input input').blur(function() {
		  if( $(this).val().length === 0 ) {
			  $(this).parent().removeClass('Mui-focused');
			  $(this).parent().removeClass('makeStyles-focused-149');
			  $(this).parent().prev().removeClass('Mui-focused');
			  $(this).parent().prev().removeClass('Mui-required');
			  $(this).parent().prev().removeClass('MuiInputLabel-shrink');
		  }
	  });
	  
	  //Выбор пола
	  $('.sex-switch .wrap').click(function() {
		  if ($(this).hasClass('man'))
		  {
			  $(this).addClass('woman')
			  $(this).removeClass('man')
		  }
		  else
		  {
			  $(this).addClass('man')
			  $(this).removeClass('woman')
		  }
	  });
	  
	  $('.rest_full .MuiButtonBase-root').click(function(){
		  var url='/wp-admin/admin-ajax.php';
		  var sum=$('input[name="rs_sum_output"]').val()||'5000';
		  var term=$('input[name="rs_term_output"]').val()||'7';
		   var get_loan=$("#paymentGate").val();
		   var loan_repayment=$("#paymentMethod").val();
		   var employment=$("#employment").val();
		   var advanced_repayment=$("#advanced_repayment").is(':checked')?1:0;
		   var extension_loan=$("#extension_loan").is(':checked')?1:0;
		  var requestData={
			  action:'get_all_offers',
			  sum:sum,
			  term:term,
			   get_loan:get_loan,
			   loan_repayment:loan_repayment,
			   employment:employment,
			   advanced_repayment:advanced_repayment,
			   extension_loan:extension_loan
		  };
		  jQuery.post(url,requestData,function(response){
			  $('.MuiGrid-root.filtered-content').html(response);
		  });
	  });
  });



  $(document).ready(function() {

	$(".calculator__center-span").on("click", function() {
	$( this ).toggleClass( "active" );
		if ($(this).hasClass("active"))
			{
				$(this).find("path").attr("d", "M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V5c0-1.1-.89-2-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z");
			}
		else
			{
				$(this).find("path").attr("d", "M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z");
			}
});


	jQuery('.offer__all').click(function (e) {
		e.preventDefault(); 
		e.returnValue = !1; 

		var length_before_toggle = jQuery('.offer--hidden:hidden').length; 
		jQuery('.offer--hidden:hidden').slice(0, 3).toggle(); 
		
		if (jQuery('.offer--hidden:hidden').length == 0) {
			if (length_before_toggle == 0) {
				jQuery('.offer--hidden').toggle();
				jQuery('html, body').animate({ scrollTop: jQuery('.offer').position().top }, 'slow');
				jQuery('.offer__all').text("Mostrar todas las ofertas");
			}
			else {
				jQuery('.offer__all').text("Esconder");
			}
		}
		else {
			jQuery('.offer__all').text("Mostrar todas las ofertas");
		}
	});


	// jQuery('.comments-sect__all').click(function (e) {
	// 	e.preventDefault(); 
	// 	e.returnValue = !1; 

	// 	var length_before_toggle = jQuery('.comments-block--hidden:hidden').length; 
	// 	jQuery('.comments-block--hidden:hidden').slice(0, 2).toggle(); 
		
	// 	if (jQuery('.comments-block--hidden:hidden').length == 0) {
	// 		if (length_before_toggle == 0) {
	// 			jQuery('.comments-block--hidden').toggle();
	// 			jQuery('html, body').animate({ scrollTop: jQuery('.comments-block').position().top }, 'slow');
	// 			jQuery('.comments-sect__all').text("Todos los comentarios");
	// 		}
	// 		else {
	// 			jQuery('.comments-sect__all').text("Esconder comentarios");
	// 		}
	// 	}
	// 	else {
	// 		jQuery('.comments-sect__all').text("Todos los comentarios");
	// 	}
	// });




	jQuery(".change-text .checkbox").click(function() {
        
		var dropDown = jQuery(this).closest('.change-text').find('.offer-dropdown');
		
		if (jQuery(this).hasClass('active')) {
			jQuery(this).removeClass('active');
		} else {
			jQuery(this).addClass('active');
		}
		
		dropDown.stop(false, true).slideToggle();

	});




	jQuery(".calculator__mini .calculator__button").click(function() {
        
		if ($('.calculator__main').hasClass('active'))
		  {
			  $('.calculator__mini').addClass('active');
			  $('.calculator__mini').removeClass('hidden');
			  $('.calculator__main').removeClass('active');
			  $('.calculator__main').addClass('hidden');
		  }
		  else
		  {
			  $('.calculator__main').addClass('active');
			  $('.calculator__mini').addClass('hidden');
		  }
	});

	
});


$(function() {

	$('.change-text .checkbox').click(function() {
		if($(this).is(':checked')) {
			$(this).next().find(".open").text('Más info');
		} else if (!$(this).is(':checked')) {
			$(this).next().find(".open").text('Menos');
		}
	});


	// Comments Slider
	$('.comments-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
	});


		// Tabs
		let dataTab = $('.tabs-control__item--active').data('tab');
    $(`.tabs-content__item[data-tab-content="${dataTab}"]`).show();

    $('.tabs-control__item').on('click', (e) => {
        let dataTab = $(e.currentTarget).data('tab');
        $('.tabs-control__item--active').removeClass('tabs-control__item--active');
        $(e.currentTarget).addClass('tabs-control__item--active');
        $('.tabs-content__item').hide();
        $(`.tabs-content__item[data-tab-content="${dataTab}"]`).show();
    });

		// Stars
    $('input', '.star-label').on('change', function (e) {
			let mark = $(e.currentTarget).val();
			let name = $(e.currentTarget).attr('name');

			$(`input[name='${name}']`).each((i, item) => {

					$(item).closest('.star').removeClass('star--active');
					let value = $(item).val();
					if (value <= mark) {
							$(item).closest('.star').addClass('star--active');
					}
			});
    });


});
