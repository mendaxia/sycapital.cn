//tab切换
jQuery(document).ready(function($) {
    $("#tab-content div").hide(); // 起初隐藏内容
    $("#tabs li:first").attr("id","current"); // 激活第一个tab
    $("#tab-content div:first").fadeIn(); // 显示第一个tab的内容
    
    $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ //检测当前tab
         return       
        }
        else{             
        $("#tab-content div").hide(); //隐藏所有内容
        $("#tabs li").attr("id",""); //恢复id
        $(this).parent().attr("id","current"); // 激活当前
        $('#' + $(this).attr('name')).fadeIn(); // 显示当前内容
        }
    });
});

//联系页面表单切换
jQuery(document).ready(function($){
    $(".nav-contact").click(function(){
        $(".contact-project").animate({left:'0px'},'slow');
         $(".submit-form").css("height",$(".contact-us-form").height());
    });
    $(".nav-project").click(function(){
        $(".contact-project").animate({left:'-1000px'},'slow');
        $(".submit-form").css("height",$(".project-submit").height());
    });
    $(".submit-form-nav li").click(function(){
        $(this).addClass("current");
        if($(this).siblings().hasClass("current")) {
            $(this).siblings().removeClass("current");
        }
    });
});

//视差滚动
jQuery(document).ready(function($){
    // Cache the Window object
    $window = $(window);
                
   $('section[data-type="background"]').each(function(){
     var $bgobj = $(this); // assigning the object
                    
      $(window).scroll(function() {
                    
        // Scroll the background at var speed
        // the yPos is a negative value because we're scrolling it UP!                              
        var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
        
        // Put together our final background position
        var coords = '50% '+ yPos + 'px';

        // Move the background
        $bgobj.css({ backgroundPosition: coords });
        
        }); // window scroll Ends
    });    
}); 

//响应式导航
jQuery(document).ready(function($){
        var pull  = $('#pull');
            menu  = $('header ul.menu');

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        
        $(window).resize(function(){
            var w = $(this).width();

            if(w > 767 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });

        $('header ul.menu li').on('click', function(e) {               
            var w = $(window).width();
            if(w < 767 ) {
                menu.slideToggle();
            }
        });
        
    });

// 锚滚动
jQuery(document).ready(function($){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash,
        $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-100
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});

//手风琴
jQuery(document).ready(function($){
    $('.join h3').click(function(){
        var t = $(this);
        if (t.hasClass("arrow-top")) {
                t.removeClass("arrow-top");
            } else {
                t.addClass("arrow-top")
            }
        $(this).next().slideToggle(function(){
            
        });
    }).next().hide();
});

//头部扩大
jQuery(document).ready(function($){
 var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('header').addClass('min-h');
        }
        else {
            $('header').removeClass('min-h');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});

// 回到页顶
jQuery(document).ready(function($){

    // hide #back-top first
    $("#back-top").hide();
    
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

});