$(document).ready(function(){
	//error show
	$('.callback_form .button_submit').bind('click', function(){
		$('.callback_form .row_error .error_message').fadeIn(200);
		return false;
	})
	$('.callback_form .row_error input').bind('focus', function(){
		$(this).parents('.row').children('.error_message').fadeOut(200);
	})
	//lightbox
	$("a[rel^='pretty']").prettyPhoto();
	$(".video a").prettyPhoto();
	$(".portfolio a.pic").prettyPhoto();

	$("a.map").prettyPhoto({
			changepicturecallback: function(){

			},
			default_width: 641,
			default_height: 432
	});

  //Set user id
  setPhoneId('visitors_uid');
  //setCookie("phone_id", "phone_id", 30);

	//slider
	$(".slider ul > li:gt(0)").hide();
	$('.slider ul > li:first').show(0);
	$('#top ul.pictogramms li:first').addClass('active');
	var slID=setInterval(function() { 
	  $('.slider ul > li:first')
	    .next()
	    .fadeIn(1000)
	    .end()
	    .fadeOut(1000)
	    .appendTo('.slider ul');
	    var activeSl=$('.slider ul>li:first').attr('class');
	    var newactiveSl=activeSl.substr(4);
	    newactiveSl=newactiveSl-1;
	    $('#top ul.pictogramms li').removeClass('active').eq(newactiveSl).addClass('active');
	},  4000);
	$('#top .nav ul.pictogramms li').bind('click', function(){
		$('#top .nav ul.pictogramms li').removeClass('active');
		$(this).addClass('active');
		var i=$(this).index()+1;
		$('.slider ul li').fadeOut(2000);
		$('.slider ul li.item'+i).fadeIn(1000);
		clearInterval(slID);
		return false;
	})

	$('#top .arr_prev').bind('click', function(){
		var i=$('#top .nav ul.pictogramms li.active').index();
		if (i == 0){
			i = $('#top .nav ul.pictogramms li').length
		}
		$('#top .nav ul.pictogramms li').removeClass('active');
		$('#top .nav ul.pictogramms li').eq(i-1).addClass('active');
		$('.slider ul li').fadeOut(2000);
		$('.slider ul li.item'+i).fadeIn(1000);
		clearInterval(slID);
		return false;
	})
	$('#top .arr_next').bind('click', function(){
		var i=$('#top .nav ul.pictogramms li.active').index()+2;
		if (i > $('#top .nav ul.pictogramms li').length){
			i = 1;
		}
		console.log(i);
		$('#top .nav ul.pictogramms li').removeClass('active');
		$('#top .nav ul.pictogramms li').eq(i-1).addClass('active');
		$('.slider ul li').fadeOut(2000);
		$('.slider ul li.item'+i).fadeIn(1000);
		clearInterval(slID);
		return false;
	})

	//gallery justify
	//$('ul.portfolio').append(' <li style="margin:0;"></li>');
	$('ul.gallery').append(' <li style="margin:0;"></li>').append(' <li style="margin:0;"></li>');




	$('.navbar-toggle').click(function(event) {
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
			$('#header nav').slideDown(300);
		} 
		else {
			$(this).removeClass('active');
			$('#header nav').slideUp(300);
		}
	});
	$(window).resize(function(event) {
		if ($(this).width() > 1024) {
			$('.navbar-toggle').removeClass('active');
			$('#header nav').css('display', '');
		}
	});

	$('.table').slick({
		infinite: false
	});

	$('.services_more a').click(function(event) {
		$('body ul.portfolio[data-title="' + $(this).attr('data-title') + '"]').css('height', 'auto');
		$(this).parents('.services_more').css('display', 'none');
		return false;
	});

	$('.news_more a').click(function(event) {
		$('.news li').css('display', 'block');
		$(this).parents('.news_more').css('display', 'none');
		return false;
	});
	


	$('#header nav li').each(function(index, el) {
		var $this = $(this);
		if ($this.find('ul').length > 0) {
			$this.addClass('submenu').find('a').eq(0).addClass('showsub');
		}
	});
	// $('.showsub').click(function(event) {
	// 	if ($(window).width() < 1024) {
	// 		event.preventDefault();
	// 		if (!$(this).parents('.submenu').hasClass('active')) {
	// 			$(this).parents('.submenu').addClass('active').find('ul').slideDown(300);
	// 		} 
	// 		else{
	// 			$(this).parents('.submenu').removeClass('active').find('ul').slideUp(300);
	// 		}
	// 	}
	// });
	$('.close-nav').click(function(event) {
		$(this).parents('nav').slideUp(300).find('.submenu').removeClass('active').find('ul').slideUp(300);
		$('.navbar-toggle').removeClass('active');
	});
	$(window).resize(function(event) {
		if ($(window).width() > 1023){
			$('#header nav').css('display', '')
			$('.navbar-toggle').removeClass('active');
			$('.submenu').removeClass('active').find('ul').css('display', '');
		}
	});
	$('.portfolio').each(function(index, el) {
		var count = $(this).find('li').length;
		if (count%3 == 2) {
			$(this).append('<li></li>')
		}
	});

	function epage() {
		var $this = $('#epage'),
			height = parseInt($(window).innerHeight() - $('#header').innerHeight() - $('#footer').innerHeight());
		$this.css('height', height);
	}
	$(window).resize(function(event) {
		epage();
	});
	epage();

});

//Set user id
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
    }
    return "";
}

function setPhoneId(id){
    var phone_id = getCookie("phone_id");
    if (phone_id != "") {
        $('.'+id).append(phone_id);
    } else {
        var now = expires = new Date();
        var value = now.getUTCMonth()+''+now.getUTCDate()+''+now.getUTCHours()+''+now.getUTCMinutes()+''+now.getUTCSeconds();
        expires.setTime(expires.getTime() + (60 * 60 * 24 * 1000 * 30));
        setCookie(name,value,expires); 
        phone_id = value;
        setCookie("phone_id", value, 30);
        $('.'+id).append(phone_id);
    }
}