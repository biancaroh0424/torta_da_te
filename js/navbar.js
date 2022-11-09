$(function(){

$(window).scroll(function(){

    var promoBar = $(".promo_background");
    var globalNavSub = $(".gnb_sub");
    var gnbScrolled = $(".gnb_sub2")
    // console.log('scroll'+$(window).scrollTop());

    if ($(window).scrollTop()>=0.001){
    $(promoBar).slideUp(80);
    $(globalNavSub).css("display","none");
    $(gnbScrolled).css("display","flex");
    }else{
        $(promoBar).slideDown(80);
        $(gnbScrolled).css("display","none");
        $(globalNavSub).css("display","flex");
    };

});


var searchIco = $('.search_icon');
var mainLogo = $('.logo_main');
var searchActive = $('.search_active');
var subLogo = $('.logo_sub');
var navInput = $('#searchNav');

$(searchIco).click(function(){
    $(this).css("display","none");
    $(mainLogo).css("display","none");
    $(searchActive).animate({width: 580},200).css({"display":"flex","border":"2px solid #28231F"});
    //$(searchActive).css("display","flex");
    $(subLogo).css("display","flex");
});
$(navInput).blur(function(){
    $(searchActive).css("display","none");
    $(mainLogo).css("display","flex");
    $(searchIco).css("display","flex")
    $(subLogo).css("display","none");
});

$('.slide_title_mypage').click(function(){
    $('.option > ul:first').slideToggle(60).css('display','flex');
});

$('#celebration').click(function(){
    $('.option > ul:eq(1)').slideToggle(60).css('display','flex');
});
$('#vegeterian').click(function(){
    $('.option > ul:eq(2)').slideToggle(60).css('display','flex');
});

$('#accessories').click(function(){
    $('.option > ul:eq(3)').slideToggle(60).css('display','flex');
});

var openSlideIco = $('.gnb_menu_slider');
var slideMenu = $('.slide_menu');
var closeNav = $('.close_nav');
var overLay = $('.overlay');

$(openSlideIco).click(function(){
    $(slideMenu).animate({
    width:450},
    200).css("display","flex");
    $(overLay).css("display","block");
});


$(closeNav).click(function(){
    $(slideMenu).animate({
        width:0, padding:0},
        200);
        $(overLay).fadeOut(200);
});
});
