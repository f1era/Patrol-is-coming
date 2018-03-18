$(document).ready(function(){




	var station_name = '';

	/*$('.offer21').slideToggle();*/
	$('.login_btn').click(function() {
		$('.forma').css('display', 'block');
	});

	$('.reg_btn').click(function() {
		$('.forma2').css('display', 'block');
	});

	$('.reg_close').click(function() {
		$('.forma2').css('display', 'none');
	});

	$('.span_close').click(function() {
		$('.forma').css('display', 'none');
	});

	$('.kvd').click(function() {
		$('.menushka').slideToggle();
	});

	$('.men').click(function() {
		$('.menushka').slideToggle();
	});

	$('.toggle_button').click(function() {
		$('.toggleinfo').slideToggle();
		$('.textonimg').css('display', 'none');
		$('.underline').css('display', 'none');
	});
	$('.send_button').click(function() {
		$('.toggleinfo').slideToggle();
	});

	$('.gl_header').click(function() {
		

	});


		var relativeX;
		var relativeY;

	$('.imgg').mousemove(function(e) {
  		var offset = $(this).offset();
		relativeX = (e.pageX - offset.left);
  		relativeY = (e.pageY - offset.top);

  		$('.coordd').html(relativeX + " : " + relativeY);
	});

	$('.sadov, .admiralt, .textonimg, .underline, .cstder, .ckrostr, .cchkal, .csport, .ckomen, .imgg').click(function() {
			if (relativeX > 0 && relativeX < 290 && relativeY > 0 && relativeY < 41)
 			{
 				$('.textonimg').css("top", "7.5px");
 				$('.textonimg').css("left", "251.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "20px");
 				$('.underline').css("left", "180px");
 				$('.underline').css("display", "block");

 				station_name = 'comendana';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Комендантский проспект -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if (relativeX > 0 && relativeX < 290 && relativeY > 41 && relativeY < 72)
 			{
 				$('.textonimg').css("top", "41px");
 				$('.textonimg').css("left", "251.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "54px");
 				$('.underline').css("left", "180px");
 				$('.underline').css("display", "block");

 				station_name = 'stderevnja';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Старая деревня -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if (relativeX > 0 && relativeX < 290 && relativeY > 72 && relativeY < 105)
 			{
 				$('.textonimg').css("top", "74px");
 				$('.textonimg').css("left", "251.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "85px");
 				$('.underline').css("left", "180px");
 				$('.underline').css("display", "block");

 				station_name = 'krostrov';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Крестовский остров -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if (relativeX > 0 && relativeX < 290 && relativeY > 105 && relativeY < 139)
 			{
 				$('.textonimg').css("top", "108px");
 				$('.textonimg').css("left", "251.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "120px");
 				$('.underline').css("left", "180px");
 				$('.underline').css("display", "block");

 				station_name = 'chkalov';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Чкаловская -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if (relativeX > 0 && relativeX < 290 && relativeY > 139 && relativeY < 174)
 			{
 				$('.textonimg').css("top", "140px");
 				$('.textonimg').css("left", "251.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "153px");
 				$('.underline').css("left", "180px");
 				$('.underline').css("display", "block");

 				station_name = 'sportivn';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Спортивная -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if (relativeX > 0 && relativeX < 290 && relativeY > 376 && relativeY < 407)
 			{
 				$('.textonimg').css("top", "375px");
 				$('.textonimg').css("left", "250.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "385px");
 				$('.underline').css("left", "176px");
 				$('.underline').css("display", "block");

 				station_name = 'admiralov';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Адмиралтейская -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if (relativeX > 225 && relativeX < 355 && relativeY > 444 && relativeY < 473)
 			{
 				$('.textonimg').css("top", "443px");
 				$('.textonimg').css("left", "315.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "454px");
 				$('.underline').css("left", "244px");
 				$('.underline').css("display", "block");

 				station_name = 'sadov';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Садовая -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if (relativeX > 409 && relativeX < 604 && relativeY > 531 && relativeY < 561)
 			{
 				$('.textonimg').css("top", "530px");
 				$('.textonimg').css("left", "405.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "545px");
 				$('.underline').css("left", "437px");
 				$('.underline').css("display", "block");

 				station_name = 'zvenigorod';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Звенигородская -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if (relativeX > 456 && relativeX < 657 && relativeY > 581 && relativeY < 610)
 			{
 				$('.textonimg').css("top", "580px");
 				$('.textonimg').css("left", "454.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "593px");
 				$('.underline').css("left", "490px");
 				$('.underline').css("display", "block");

 				station_name = 'obvkan';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Обводный канал -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if ((relativeX > 489) && (relativeX < 639) && (relativeY > 613) && (relativeY < 642))
 			{
 				$('.textonimg').css("top", "610px");
 				$('.textonimg').css("left", "484.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "625px");
 				$('.underline').css("left", "518px");
 				$('.underline').css("display", "block");

 				station_name = 'volkov';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Волковская -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if ((relativeX > 520) && (relativeX < 690) && (relativeY > 645) && (relativeY < 673))
 			{
 				$('.textonimg').css("top", "643px");
 				$('.textonimg').css("left", "517.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "656px");
 				$('.underline').css("left", "552px");
 				$('.underline').css("display", "block");

 				station_name = 'buhar';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Бухарестская -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}

 			if ((relativeX > 553) && (relativeX < 750) && (relativeY > 678) && (relativeY < 708))
 			{
 				$('.textonimg').css("top", "676px");
 				$('.textonimg').css("left", "549.5px");
 				$('.textonimg').css("display", "block");

 				$('.underline').css("top", "692px");
 				$('.underline').css("left", "582px");
 				$('.underline').css("display", "block");

 				station_name = 'mezhdu';
 				$.cookie('coostat', station_name);

 				$('.toggleinfo_stantion_text').html('- Международная -');

 				$('.toggleinfo_info_text').load("../station_text_output.php");

 				$('.toggleinfo').slideToggle();
 			}
		});
	
		

});
