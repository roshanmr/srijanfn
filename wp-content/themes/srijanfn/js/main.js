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
});