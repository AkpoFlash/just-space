var topShow = 500;

$(document).ready(function(){
   $('a[href*=#]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top - 100
      }, 1000);
      e.preventDefault();
   });
   return false;
});

$(document).ready(function(){
    $("#head").bind('click', function(e){
        $('html, body').animate({scrollTop: 0}, 1000);
        e.preventDefault();
    });
    return false;
});

$(document).ready(function(){
  $(window).scroll(function () {
    if ($(this).scrollTop() > topShow){
      $('#head').css({"height" : "80px", "padding-bottom" : "30px"});
    }else{
      $('#head').css({"height": "0", "padding-bottom" : "0"});
    }
  });
});

function over_social_icon(id, src){
  document.getElementById(id).src = "img/" + src + ".svg";
}

function out_social_icon(id, src){
  document.getElementById(id).src = "img/" + src + ".svg";
}

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
