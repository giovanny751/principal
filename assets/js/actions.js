// Nombre del proyecto: Futbolista Colombiano
// Nombre del archivo: actions.js
// Descripción: Funciones globales
// Fecha de creación: Octubre del 2013
// Autor: Stive Zambrano

$(document).ready(function(){
  $(window).bind("load", function(){$("#preload").fadeOut("slow");});
  $(".over-bw").hover(function(){$(this).children(".icon-bw").animate({marginTop: -10}, 400, "easeOutBounce");}, function(){$(this).children(".icon-bw").animate({marginTop: 0}, 400, "easeOutBounce");}); $(".over-bt-bw").click(function(){$(this).parent().parent().parent().fadeOut(200);});
	$(".main-nav li").hover(function(){$(this).children("a").children(".nav-br").stop().animate({left: 0, width: "100%"}, 250, "easeInOutExpo");}, function(){$(this).children("a").children(".nav-br").stop().animate({left: "50%", width: 0}, 250, "easeInOutExpo");});
	$(".con-nav .main-nav li").hover(function(){$(this).children(".sub-nav").stop().slideDown(250, "easeInOutExpo");}, function(){$(this).children(".sub-nav").stop().slideUp(250, "easeInOutExpo");});
	$(".sub-nav").hover(function(){$(this).parent("li").children("a").css({color: "#fff"});}, function(){$(this).parent("li").children("a").css({color: "#"});});
	if($(".main-slider").size()>0){$(".main-slider").bxSlider({auto: true, minSlides: 1, maxSlides: 1, pause: 6000, slideMargin: 0, slideWidth: 960});};
	if($(".main-sel").size()>0){$(".main-sel").chosen({allow_single_deselect : true});};
	if($(".acceso-login").size()>0){$(".acceso-login").validationEngine({scroll:false});}; if($(".grl-form").size()>0){$(".grl-form").validationEngine({scroll:false});};
	// Tablas home
	if($(".scroll-wrap").size()>0){$(".scroll-wrap").jScrollPane();};
	$(".main-sel").change(function(){var val = $(this).val(); if (val){$(".tabla:not(." + val + ")").hide(); $("." + val).fadeIn(); $("." + val).children(".info-tabla").hide(); $("." + val).children(".info-tabla").first().show();	$("." + val).children(".con-tabs").children(".tab").first().addClass("tab-active");} else {$(".tabla").hide();}});
	$(".info-tabla").first().css({display:"block"}); $(".tabla").first().css({display:"block"});
	$(".tab").click(function(){$(".tab").removeClass("tab-active"); $(this).addClass("tab-active"); $(".info-tabla").hide(); var ver_contenido = $(this).attr("data-id"); $('.'+ver_contenido).show(); $(".scroll-wrap").jScrollPane();});
	$(".tabla-body .scroll-wrap table tr:even").css({background: "#f6f6f6"});
	// Fin tablas home
	if($(".modals-act").size()>0){$(".modals-act").fancybox();};
	$(window).scroll(function(){if($(this).scrollTop()!=0){$(".up-bt").stop().animate({opacity: 0.8}).css({zIndex: 999});} else {$(".up-bt").stop().animate({opacity: 0}).css({zIndex: -1});}}); $(".up-bt").click(function(){$("body, html").stop().animate({scrollTop:0}, 400, "easeInOutExpo");});
	$(".con-team").hover(function(){$(".con-team").parent("li").parent("ul").children("li").children("a").css({opacity: 0.5}); $(this).css({opacity: 1});}, function(){$(".con-team").parent("li").parent("ul").children("li").children("a").css({opacity: 1});});
	if($(".team-slider").size()>0){$(".team-slider").bxSlider({auto: true, minSlides: 1, maxSlides: 1, pause: 6000, slideMargin: 0, slideWidth: 578});};
	$(".con-pager li .con-player:first-child").next().css({margin: "0 21px"}); $(".con-pager li .con-video-s:first-child").next().css({margin: "0 19px"});
	$(".con-player").hover(function(){$(".con-player").parent("li").parent("ul").children("li").children("a").css({opacity: 0.5}); $(this).css({opacity: 1});}, function(){$(".con-player").parent("li").parent("ul").children("li").children("a").css({opacity: 1});});
	$(".con-video-s").hover(function(){$(".con-video-s").parent("li").parent("ul").children("li").children("a").css({opacity: 0.5}); $(this).css({opacity: 1});}, function(){$(".con-video-s").parent("li").parent("ul").children("li").children("a").css({opacity: 1});});
	$(".con-team-fecha").hover(function(){$(".con-team-fecha").parent("li").parent("ul").children("li").children("a").css({opacity: 0.5}); $(this).css({opacity: 1});}, function(){$(".con-team-fecha").parent("li").parent("ul").children("li").children("a").css({opacity: 1});});
	if($(".pager-info").size()>0){$(".pager-info").pajinate({items_per_page:4});}; if($(".pager-info-player").size()>0){$(".pager-info-player").pajinate({items_per_page:2});}; if($(".pager-info-video-s").size()>0){$(".pager-info-video-s").pajinate({items_per_page:1});}; if($(".pager-info-video-b").size()>0){$(".pager-info-video-b").pajinate({items_per_page:2});}; if($(".pager-info-fecha").size()>0){$(".pager-info-fecha").pajinate({items_per_page:2});};
	$(".con-tabs .tab-faq .info-tab").first().css({display: "block"});
	$(".con-tabs .tab-faq h1").click(function(){$(this).parent(".tab-faq").siblings().children(".info-tab").stop().slideUp(); $(this).parent(".tab-faq").siblings().children("h1").removeClass("tab-act"); $(this).addClass("tab-act"); $(this).siblings(".info-tab").stop().slideDown();});
	if($("#modal-ok").size()>0){$("#modal-ok").fancybox().trigger("click");};
	if($.browser.msie&&$.browser.version==10){$("html").addClass("ie10");};
	if($(".footer-ahorranito").size()>0){$(".footer-ahorranito").ahorranito({theme: "claro"});};
});
function teamLink(url){document.location.href = url;};