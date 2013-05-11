// Tab menu
$(function() {

    $("#example-one").organicTabs({
        "speed": 200
    });

});

// Flexslider 
$(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        slideshow: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });