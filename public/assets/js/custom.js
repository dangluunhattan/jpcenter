$(function() {
  $('a[href*="#"]:not([href="#"])').not('#myCarousel a, .modal-trigger a, .panel a').click(function(o) {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        if($(".navbar").css("position") == "fixed"){
          $('html, body').animate({
          scrollTop: target.offset().top - 71
        }, 500,'swing');
        }
        else{
          $('html, body').animate({
          scrollTop: target.offset().top
        }, 500,'swing');
        }
        return false;
      }
    }
  });
});﻿