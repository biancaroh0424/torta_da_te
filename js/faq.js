$(document).ready(function(){
    $('.faq_posts_desc:eq(1)').hide();
    $('.faq_posts_desc:eq(2)').hide();
    $('.faq_posts_desc:eq(3)').hide();
    $('.faq_posts_desc:eq(4)').hide();
    $('.faq_posts_desc:eq(5)').hide();

    $('.faq_posts_ttl:first').click(function(){
        $('.faq_posts_desc:eq(0)').slideToggle(180);
        $('.arrow_more:first').toggleClass('arrow_less');
            
    });
    $('.faq_posts_ttl:eq(1)').click(function(){
        $('.faq_posts_desc:eq(1)').slideToggle(180);
        $('.arrow_more:eq(1)').toggleClass('arrow_less');
    });
    $('.faq_posts_ttl:eq(2)').click(function(){
        $('.faq_posts_desc:eq(2)').slideToggle(180);
        $('.arrow_more:eq(2)').toggleClass('arrow_less');

    });
    $('.faq_posts_ttl:eq(3)').click(function(){
        $('.faq_posts_desc:eq(3)').slideToggle(180);
        $('.arrow_more:eq(3)').toggleClass('arrow_less');
    });
    $('.faq_posts_ttl:eq(4)').click(function(){
        $('.faq_posts_desc:eq(4)').slideToggle(180);
        $('.arrow_more:eq(4)').toggleClass('arrow_less');
    });
    $('.faq_posts_ttl:eq(5)').click(function(){
        $('.faq_posts_desc:eq(5)').slideToggle(180);
        $('.arrow_more:eq(5)').toggleClass('arrow_less');
    });
    
});

