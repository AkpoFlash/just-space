var topShow = 500;
var currentWidth = 0;
var mobileWidth = 1050;

//burger menu
$(document).ready(function(){
    $(".toggle-nav").on('click', function(e){
        $(".menu").slideToggle(300);
    });
    return true;
});

//detected mobile version
$(window).on("load resize", function(){
    currentWidth = parseInt($(window).width() + 17);
    if(currentWidth > mobileWidth){
        $(".menu").slideDown(0);
    }
});

//smooth scroll
$(document).ready(function(){
   $('.menu a[href*=#]').on("click", function(e){
       if(currentWidth <= mobileWidth){
           $(".menu").slideUp(300);
       }
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top - 100
      }, 1000);
      e.preventDefault();
   });
   return false;
});

//fast scroll on top
$(document).ready(function(){
    $("#head").on('click', function(e){
        $('html, body').animate({scrollTop: 0}, 1000);
        e.preventDefault();
    });
    return false;
});

//appearance arrow for fast scroll on top
$(document).ready(function(){
  $(window).scroll(function () {
    if ($(this).scrollTop() > topShow){
      $('#head').css({"height" : "80px", "padding-bottom" : "30px"});
    }else{
      $('#head').css({"height": "0", "padding-bottom" : "0"});
    }
  });
});

//change color social icon
function over_social_icon(id, src){
  document.getElementById(id).src = "/img/"+src;
}

function out_social_icon(id, src){
  document.getElementById(id).src = "/img/"+src;
}

//portfolio slider
(function ($) {
  var hwSlideSpeed = 700;
  var hwTimeOut = 3000;
  var hwNeedLinks = true;

  $(document).ready(function(e) {
    $('.slide').css(
      {"position" : "absolute",
       "top":'0', "left": '0'}).hide().eq(0).show();
    var slideNum = 0;
    var slideTime;
    slideCount = $("#slider .slide").size();
    var animSlide = function(arrow){
      clearTimeout(slideTime);
      $('.slide').eq(slideNum).fadeOut(hwSlideSpeed);
      if(arrow == "next"){
        if(slideNum == (slideCount-1)){slideNum=0;}
        else{slideNum++}
        }
      else if(arrow == "prew")
      {
        if(slideNum == 0){slideNum=slideCount-1;}
        else{slideNum-=1}
      }
      else{
        slideNum = arrow;
        }
      $('.slide').eq(slideNum).fadeIn(hwSlideSpeed, rotator);
      }
  if(hwNeedLinks){
  var $linkArrow = $('<a id="prewbutton" href="#">&lt;</a><a id="nextbutton" href="#">&gt;</a>')
    .prependTo('#slider');
    $('#nextbutton').click(function(){
      animSlide("next");
      return false;
      })
    $('#prewbutton').click(function(){
      animSlide("prew");
      return false;
      })
  }
    var pause = false;
    var rotator = function(){
        if(!pause){slideTime = setTimeout(function(){animSlide('next')}, hwTimeOut);}
        }
    $('#slider-wrap img, #prewbutton, #nextbutton').hover(
      function(){clearTimeout(slideTime); pause = true;},
      function(){pause = false; rotator();
      });
    rotator();
  });
  })(jQuery);

