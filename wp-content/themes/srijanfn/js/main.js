$(document).ready(function(){
  $('.slider').bxSlider({
  	auto: true,
  	speed: 1000,
  	pause: 6000,
  	pager: false,
  	onSliderLoad: function(currentIndex) {     
    $('.slider').children().eq(currentIndex + 1).addClass('active-slide');
  },
  onSlideAfter: function($slideElement){
    $('.slider').children().removeClass('active-slide');
    $slideElement.addClass('active-slide');
  }
  });

  // navigation menu 

  $('.main-navigation .menu-toggle').click(function(){
      $(this).parents('.site-header').siblings('.site-content').toggleClass('opaque');
      $(this).parents('body').toggleClass('fixed');
  });


  // Search interaction

  $('.main-navigation .search a').click(function(e){
      $(this).parent().toggleClass('active');
      $(this).siblings('.search-bar').find('#search').focus();
      e.stopPropagation();
  });

  $('.main-navigation .search .search-field').click(function(e){
      e.stopPropagation();
  });

  $(document).click(function(e){
      e.stopPropagation();
      $(this).find('.search').removeClass('active');
  });

  // InView Plugin Code
  if ($(window).width() > 1024) {

      $('.feature-section').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).addClass("inview");
      } else {
        $(this).removeClass("inview");
      }
    });

    $('.feature-box').on('inview', function(event, isInView) {
      if (isInView) {
        $(this).addClass("inview");
      } else {
        $(this).removeClass("inview");
      }
    });
  }
});