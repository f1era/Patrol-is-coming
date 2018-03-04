$(document).ready(function(){

	/*$('.offer21').slideToggle();*/
	$('.reg_block').hide();
	$('.login_block').hide();


	regblock = false;
	loginblock = false;

	$('.login_b1').click(function() {
		if(loginblock == true) {
			loginblock = false;
			$('.login_block').animate({
				left: '-=100%',
			}, 700, function() {
				$('.login_block').hide();
				
			});
		}
	});
	

	$('.enter_btn').click(function(){
		if(regblock == false) {
			if(loginblock == false) {
				loginblock = true;
				$('.login_block').show();
				$('.login_block').animate({
					left: '+=100%',
				}, 700, function() {
					
				});
			}
		}
	});




	$('.reg_b1').click(function() {
		if(regblock == true) {
			regblock = false;
			$('.reg_block').animate({
				left: '-=100%',
			}, 700, function() {
				$('.reg_block').hide();
				regblock = false;
			});
		}
	});
	
	$('.reg_btn').click(function(){
		if(loginblock == false) {
			if(regblock == false) {
				regblock = true;
				$('.reg_block').show();
				$('.reg_block').animate({
					left: '+=100%',
				}, 700, function() {
				});
			}
		}
	});




});
