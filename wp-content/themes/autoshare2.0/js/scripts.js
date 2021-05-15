$(document).ready(function(){

	

	$('#about_us').mouseenter(function () {
		$('.header_1').stop().animate({
			width:100
			
		})
	});

	$('#about_us').mouseleave(function (){
		$('.header_1').stop().animate({
			width:0
		});
	});

	$('#autopark').mouseenter(function () {
		$('.header_2').stop().animate({
			width:100
			
		})
	});

	$('#autopark').mouseleave(function (){
		$('.header_2').stop().animate({
			width:0
		});
	});

	$('#services').mouseenter(function () {
		$('.header_3').stop().animate({
			width:80
			
		})
	});

	$('#services').mouseleave(function (){
		$('.header_3').stop().animate({
			width:0
		});
	});

	$('#umovy').mouseenter(function () {
		$('.header_4').stop().animate({
			width:70
			
		})
	});

	$('#umovy').mouseleave(function (){
		$('.header_4').stop().animate({
			width:0
		});
	});
});



$(document).ready(function(){


	setTimeout(function(){
		$('.booking').css({background : 'linear-gradient(-75deg, transparent 160px, #000000 0)'});
		$('.booking_slide').css({background : 'linear-gradient(-75deg, transparent 160px, #000000 0)'});
	}, 100);


    $(".left_arrow").css({marginLeft:'750px'});
	$('.booking').css({background : 'linear-gradient(-75deg, transparent 160px, #050B18 0)'}, 10000);
	$('.booking_slide').css({background : 'linear-gradient(-75deg, transparent 160px, #050B18 0)'}, 10000);
    $('#open_book').show()
	$('.right_arrow').hide()
    $('.right_arrow').click(function(){
        $(".booking_slide").toggle("'slide', {direction: 'right' }, 1000");
		$(".left_arrow").css({marginLeft:'750px'});
		$('.right_arrow').hide(200);
		$('.left_arrow').show(500);
		$('.booking').css({backgroundColor: '#000000', zIndex: '2', position: 'absolute', overflow: 'hidden', opacity: '0.95'});
		$('.text_book').fadeIn(1300);
		setTimeout(function(){
			$('.booking').css({background : 'linear-gradient(-75deg, transparent 160px, #000000 0)'});
			$('.booking_slide').css({background : 'linear-gradient(-75deg, transparent 160px, #000000 0)'});
		}, 206);
		setTimeout();
    });
	$('.left_arrow').click(function (){
        $(".booking_slide").toggle("'slide', {direction: 'left' }, 1500");
		$('.left_arrow').hide(200);
		$('.right_arrow').fadeIn(800);
		$('.text_book').fadeOut(100);
		setTimeout(function(){
			$('.booking').css({background : 'linear-gradient(-90deg, #000000 0)'});
			$('.booking_slide').css({background : 'linear-gradient(-90deg, ##000000 0)'});
			$('.booking').css({backgroundColor: '#000000', zIndex: '2', position: 'absolute', overflow: 'hidden', opacity: '0.95'});
		}, 185);
		setTimeout();
    });
});

$(document).ready(function(){
	$('.content_toggle').click(function(){
		$('.rolls_img_back').animate({
			opacity:0.4
		});
		$('.content_block').slideDown(800, function(){
			$('.content_toggle').animate({
				opacity: 0
			});
			
						
		});
		return false;
	});

	$('.service-card1').mouseenter(function(){
		$('.service-img1').stop().animate({
			opacity:0.5
		});

	});

	$('.service-card1').mouseleave(function(){
		$('.service-img1').stop().animate({
			opacity:1
		});
	});

	$('.service-card2').mouseenter(function(){
		$('.service-img2').stop().animate({
			opacity:0.5
		});

	});

	$('.service-card2').mouseleave(function(){
		$('.service-img2').stop().animate({
			opacity:1
		});
	});

	$('.service-card3').mouseenter(function(){
		$('.service-img3').stop().animate({
			opacity:0.5
		});

	});

	$('.service-card3').mouseleave(function(){
		$('.service-img3').stop().animate({
			opacity:1
		});
	});

	$('.service-card4').mouseenter(function(){
		$('.service-img4').stop().animate({
			opacity:0.5
		});

	});

	
	$('.service-card4').mouseleave(function(){
		$('.service-img4').stop().animate({
			opacity:1
		});
	});
});


let scrollState = 'top';

$(window).scroll(function(){ 

    let scrollPos = $(window).scrollTop();

    if( ( scrollPos != 0 ) && ( scrollState === 'top' ) ) {
        
        scrollState = 'scrolled';
    }       
    else if( ( scrollPos === 0 ) && ( scrollState === 'scrolled' ) ) {
        
        scrollState = 'top';
    }

});


$(document).ready(function(){
	$('#text-serv-anim, #text-serv-anim-2, #text-serv-anim-3, #text-serv-anim-4').hide();

$('#service-click').click(function(){
	$('#trapez-anim').css({
		backgroundColor: "rgba(204, 211, 222, 0.9)"
	});
	
	$('#btn-text-serv-anim').hide();
  $('#text-serv-anim').show();
	
});

$('#service-click-2').click(function(){
	$('#trapez-anim-2').css({
		backgroundColor: "rgba(204, 211, 222, 0.9)"
	});
	
	$('#btn-text-serv-anim-2').hide();
  $('#text-serv-anim-2').show();
	
});
	 
	 $('#service-click-3').click(function(){
	$('#trapez-anim-3').css({
		backgroundColor: "rgba(204, 211, 222, 0.9)"
	});
	
	$('#btn-text-serv-anim-3').hide();
  $('#text-serv-anim-3').show();
	
});
	 
	 $('#service-click-4').click(function(){
	$('#trapez-anim-4').css({
		backgroundColor: "rgba(204, 211, 222, 0.9)"
	});
	
	$('#btn-text-serv-anim-4').hide();
  $('#text-serv-anim-4').show();
	
});
    
  $('#ddmenu li').click(function () {
     $('ul',this).slideToggle(200);

  });

  

  let today = new Date();
  let dd = today.getDate();
  let mm = today.getMonth()+1; 
  let yyyy = today.getFullYear();
  if(dd<10){
		  dd='0'+dd
	  } 
	  if(mm<10){
		  mm='0'+mm
	  } 

  today = yyyy+'-'+mm+'-'+dd;
  document.getElementById("datefield1").setAttribute("min", today);

  let hoursNow = new Date().getHours()
  let minutesNow = new Date().getMinutes();
  
  timeNow = hoursNow + ':' + minutesNow;

  document.getElementById("timefield1").setAttribute("min", timeNow);
	



});

