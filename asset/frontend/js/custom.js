"use strict";
jQuery(document).ready(function(){
jQuery('.overgallery').hide();
jQuery('.overvideo').hide();
jQuery('.overdefult').hide();
jQuery('.overport').hide();
jQuery(window).load(function () {
jQuery('.one_half').find('.loading').attr('class', '');
jQuery('.one_third').find('.loading').attr('class', '');
jQuery('.one_fourth').find('.loading').attr('class', '');
jQuery('.item').find('.loading').attr('class', '');
jQuery('.item4').find('.loading').attr('class', '');
jQuery('.item3').find('.loading').attr('class', '');
jQuery('.blogimage').find('.loading').attr('class', '');
jQuery('.image').css('background', 'none');
jQuery('.recentimage').css('background', 'none');
jQuery('.audioPlayerWrap').css({'background':'none','height':'25px','padding-top':'0px'});
jQuery('.blogpostcategory').find('.loading').removeClass('loading');
jQuery('.image').find('.loading').removeClass('loading');
//show the loaded image
jQuery('iframe').show();
jQuery('img').show();
jQuery('.audioPlayer').show();
jQuery('.overgallery').show();
jQuery('.overvideo').show();
jQuery('.overdefult').show();
jQuery('.overport').show();
jQuery('#slider-wrapper .loading').removeClass('loading');
jQuery('.imagesSPAll .loading').removeClass('loading');
jQuery('#slider').css('display','block');
jQuery('#slider .images').animate({'opacity':1},300);
jQuery('#slider,#slider img,.textSlide').css('opacity','1');
jQuery('#slider-wrapper').css('max-height','500px');
});
});
function gotosite(sel) {
var URL = sel.options[sel.selectedIndex].value;
window.location.href = URL;
}
/*add submenu class*/
jQuery(document).ready(function(){
jQuery('.menu > li').each(function() {
if(jQuery(this).find('ul').size() > 0 ){
jQuery(this).addClass('has-sub-menu');
}
});
});
/*animate menu*/
jQuery(document).ready(function(){
jQuery('ul.menu > li').hover(function(){
jQuery(this).find('ul').stop(true,true).fadeIn(300);
},
function () {
jQuery(this).find('ul').stop(true,true).fadeOut(300);
});
});
/*add lightbox*/
jQuery(document).ready(function(){
jQuery(".gallery a").attr("rel", "lightbox[gallery]");
});
/*form hide replay*/
jQuery(document).ready(function(){
jQuery(".reply").click(function(){
jQuery('#commentform h3').hide();
});
jQuery("#cancel-comment-reply-link").click(function(){
jQuery('#commentform h3').show();
});
});
/*to top*/
jQuery(document).ready(function($){
$(".totop ").hide();
});
jQuery(window).bind('scroll', function(){
if(jQuery(this).scrollTop() > 200) {
jQuery(".totop ").fadeIn(200);
jQuery(".fixedmenu").fadeIn(200);}
else{
jQuery(".totop ").fadeOut(200);
jQuery(".fixedmenu").fadeOut(200);}
});
/* shortcode*/
jQuery(document).ready(function(){
if(jQuery('.accordion').length>0){
jQuery(function() {
jQuery( ".accordion" ).accordion({
autoHeight: false,
navigation: true
});
});
}
if(jQuery('.progressbar').length>0){
jQuery(function() {
jQuery( ".progressbar" ).progressbar();
});
}
});
/* lightbox*/
function loadprety(){
jQuery(".gallery a").attr("rel", "lightbox[gallery]").prettyPhoto({theme:'light_rounded',overlay_gallery: false,show_title: false,deeplinking:false});
}
jQuery(document).ready(function() {
jQuery(".toggle_container").hide();
jQuery("h2.trigger").click(function(){
jQuery(this).toggleClass("active").next().slideToggle("slow");
});
});
jQuery(document).ready(function(){
jQuery(function() {
jQuery(".tabwrap").tabs();
});
});
jQuery(document).ready(function(){
jQuery('.gototop').click(function() {
jQuery('html, body').animate({scrollTop:0}, 'medium');
});
});
/*search*/
jQuery(document).ready(function(){
if(jQuery('.widget_search').length>0){
jQuery('#sidebarsearch input').val('Search...');
jQuery('#sidebarsearch input').focus(function() {
jQuery('#sidebarsearch input').val('');
});
jQuery('#sidebarsearch input').focusout(function() {
jQuery('#sidebarsearch input').val('Search...');
});
}
});
jQuery(function(){
jQuery("ul#ticker01").liScroll();
});
jQuery(document).ready(function(){
jQuery('.add_to_cart_button.product_type_simple').click(function() {
jQuery(this).parents(".product").children(".process").children(".loading").css("display", "block");
jQuery(this).parents(".product").children(".thumb").children("img").css("opacity", "0.1");
});
jQuery('body').bind('added_to_cart', function() {
jQuery(".product .loading").css("display", "none");
//$(".product .added").parents(".product").children(".process").children(".added-btn").css("display", "block").delay(500).fadeOut('slow');
jQuery(".product .added").parents(".product").children(".thumb").children("img").delay(600).animate( { "opacity": "1" });
return false;
});
});