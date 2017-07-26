$(function () {

	window.addEventListener('unload', function(e){
		window.scrollTo(0, 0);
	});

/////////////// WHEN CLOSING OPENING WINDOW, SCROLL ALL RIGHT
$('#go_scroll, #opening').click(function(){
	var id_recent = $("#idpost").val();
	var test = $("#"+id_recent).closest('.lieu').attr("id");
	var screen_width = $(window).width();
	var position = parseInt($("#"+test).css('left'));
	var demi = 1.9;
	if (screen_width < position){
		// $('html, body').animate({ scrollLeft:
		// $("#"+test).offset().left -(screen_width/demi)}, 750 ); // Go
		var bigwidth = $('body').outerWidth();
		$('body').stop().animate( { scrollLeft: bigwidth-screen_width }, {duration:2500, easing: 'swing' });
	}
});
//////////////////////////////

	$('.texte, .titre_info').hide ();
/*	var current = null;
	$('.signal').hover(function(){
		if(current && $(this).index()!=current.index()){
			current.find('.bande_lieu').show().stop().slideToggle(200,'linear');
		}
		if(current && $(this).index==current.index()){
			return null;
		}
		$(this).find('.bande_lieu').hide().stop().slideDown(200,'linear');
		current=$(this);
	});
*/
	$('.signal').hover(function(){
		$(this).find('.bande_lieu').hide().stop().slideDown(200,'linear'); return false;
	},function(){
		$(this).find('.bande_lieu').hide().stop().slideUp(200,'linear'); return false;
	});


/*	$('#button_info').click (function() {
		$('#menu_info').animate({left:'0px'}, 'slow', 'swing', function(){$('.texte, .titre_info').slideDown('normal','swing');});
	});
	$('#button_close').click (function() {
		$('#menu_info').animate({left:'-830px'}, 'normal', 'swing', function(){$('.texte, .titre_info').slideUp('normal','swing');});
	});
*/


	   $("body").mousewheel(function(event, delta) {
		  this.scrollLeft -= (delta * 10);
		  event.preventDefault();
	   });

		if ($('.liste_carte').mouseover()) {
				$(".liste_carte").mousewheel(function(event, delta) {
				  this.scrollLeft -= (delta * 3);
				  event.preventDefault();
				});
		};

		$('.liste_carte').mouseover(function(){
			$("body").unmousewheel();

		});
		$('.liste_carte').mouseout(function(){
			   $("body").mousewheel(function(event, delta) {
				  this.scrollLeft -= (delta * 10);
				  event.preventDefault();
			   });
		});


		$('.info_container').mouseover(function(){
			$("body").unmousewheel();
		});
		$('#button_close').click(function(){
			   $("body").mousewheel(function(event, delta) {
				  this.scrollLeft -= (delta * 10);
				  event.preventDefault();
			   });
		});


		$('.link_action').mouseenter(function(){
			$(this).find('.thumb, .resume_event').css('display','block');
			$(this).find('.title_action, .artiste_action, .info_event').css('display','none');
		});
		$('.link_action').mouseleave(function(){
			$(this).find('.thumb, .resume_event').css('display','none');
			$(this).find('.title_action, .artiste_action, .info_event').css('display','block');
		});

////////////////////// MENU
$("#button_menu").click(function() {
	$(".contenu_lieu").css("display","none");
	// $("#menu_barre").css("display","block");
	$("#menu_barre").fadeIn(100);
	$("#button_menu").css("display","none");
	$(".liste_carte").fadeOut(200);
	 window.location.hash = '';
	//  history.pushState('', document.title, window.location.pathname); // plus récent mais moins compatible..
});

$('#content').click(function() {
	// $("#menu_barre").css("display","none");
	$("#menu_barre").fadeOut(100);
	$("#button_menu").css("display","block");
});
//////////////////////

$('#button_menu').click(function(event){
    event.stopPropagation();
});
$('.liste_carte').click(function(event){
    event.stopPropagation();
});

/*	if (localStorage.getItem('wasVisited') !== undefined) {
        $("#opening").css('display','block');
    } else {
        localStorage.setItem('wasVisited', 1);
        $("#opening").css('display','none');
    };
*/
//$(".title_button").click(function(){$(".title_button").css("display","none")});
$(".bouton").click(function() {$("#menu_barre").css('display','none'),$("#button_menu").css('display','block')});

$("#button_recitlist").click(function() {$(".liste_carte").css("display","none");$("#recitlist").fadeIn(200); window.location.hash = '#histoire';});
$("#button_artistelist").click(function() {$(".liste_carte").css("display","none");$("#artistelist").fadeIn(200); window.location.hash = '#complices';});
$("#button_lieulist").click(function() {$(".liste_carte").css("display","none");$("#lieulist").fadeIn(200);});
$("#button_recentlist").click(function() {$(".liste_carte").css("display","none");$("#recentlist").fadeIn(200); window.location.hash = '#action';});
$("#button_eventlist").click(function() {$(".liste_carte").css("display","none");$("#eventlist").fadeIn(200); window.location.hash = '#evenement';});

///////// MENU INFO
$('#button_info_sup').click (function() {
	$(".liste_carte").css("display","none");
	$("#menu_info").css('visibility','visible');
	$('#menu_info').animate({left:'0px'}, 'slow', 'swing',
		function(){$('.texte, .titre_info').slideDown('normal','swing');}
	);
});

$('#button_close').click (function() {
	$('#menu_info').animate({left:'-830px'}, 'normal', 'swing', function(){
		$('.texte, .titre_info').slideUp('normal','swing'); $("#button_menu").css('display','block');
		$("#menu_info").css('visibility','hidden');
	});
});
//////////// -------


$(".lieu").click(function(){$(".contenu_lieu").css("display","none");$("body").unmousewheel(); $(this).children(".contenu_lieu").css("display","block");$("#menu_barre").css("display","none")});

$("#button_menu").click(function(){$("body").unmousewheel();});

$('body').click(function () {
	$("#menu_barre, .contenu_lieu").fadeOut(200);
	$("body").mousewheel(function(event, delta) {
	  this.scrollLeft -= (delta * 10);
	  event.preventDefault();
	});
	$('#button_menu').css('display','block');
	return false;
});

$('.close_lieu').click(function prout() {
	// $(".contenu_lieu").css("display","none");
	$(".contenu_lieu, #menu_barre").fadeOut(200);
	$("body").mousewheel(function(event, delta) {
	  this.scrollLeft -= (delta * 10);
	  event.preventDefault();
	});
	$('#button_menu').css('display','block');
	return false;
});

if ($('#opening').css('display','block')) {$("body").unmousewheel();};


$('.lieu, .url').click(function(event){
    event.stopPropagation();
});


///////////////// HIDE-SHOW MENU DU BAS
	// $('.liste_carte').mouseenter (function() {
	// 	$('.liste_carte').stop().animate({bottom:'5px'}, 'normal', 'swing');
	// });
	// $('#content').click (function() {
	// 	$('.liste_carte').animate({bottom:'-110px'}, 'normal', 'swing');
	// });
////////////////////

///////////////// HIDE-SHOW MENU DU BAS V2
	// $('#content').click (function() {
	// 	$('.liste_carte').fadeOut(200);
	// });
////////////////////




/////////////// SCAN HASHTAG
var hash = window.location.hash;
if (hash=='#action'){$("#recentlist").css("display","block");}
if (hash=='#evenement') {$("#eventlist").css("display","block");}
if (hash=='#histoire') {$("#recitlist").css("display","block");}
if (hash=='#complices') {$("#artistelist").css("display","block");}


/////////////// ARROWS LEFT RIGHT
$('#moveright').mousedown(function() {
	var s = $(document).scrollLeft();
	$('body').stop().animate( { scrollLeft: s+1000 }, {duration:500, easing: 'easeOutCubic' });
});
$('#moveleft').mousedown(function() {
	var s = $(document).scrollLeft();
	$('body').stop().animate( { scrollLeft: s-1000 }, {duration:500, easing: 'linear' });
});

//////////////// JQUERY UI DRAGGABLE
// $("#content").draggable({
// 	axis: "x",
// 	containment: ''
// });


});
