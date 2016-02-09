var slickSliderMaxHeight = 0;

$(document).ready(function() {

  $('.container').fullpage({
		anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage'],
		// sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C', '#000000'],
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: ['What is Include Me', 'Why use Include Me', 'Tools', 'Testimonials'],
    afterLoad: function(anchorLink, index){
      if(index == 4){
        $("#footer").fadeIn(500);
      }
      else{
        $("#footer").fadeOut(60);
      }
    }
		//css3: true
	});



	$('.responsive').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
///////////////////////////////////    not a plugin   //////////////////////////////////

// when the page loads it calls fixSlickSlidersHeight function once. 

  fixSlickSlidersHeight();

//debouncing to check if an timer is set should be canceled and be set again
//when the window is resized it calls the fixSlickSlidersHeight several times 
//we use the waitForFinalEvent to clear the timer by each resize so the fixSlickSlidersHeight 
//doesnt run untill the resizing stops and then after 500ms fixSlickSlidersHeight runs.

  var waitForFinalEvent = (function () {
    var timers = {};
    return function (callback, ms, uniqueId) {
      if (!uniqueId) {
          uniqueId = "Don't call this twice without a uniqueId";
      }
      if (timers[uniqueId]) {
          clearTimeout(timers[uniqueId]);
      }
      timers[uniqueId] = setTimeout(callback, ms);
    };
  })(); 

  $(window).resize(function(){
    waitForFinalEvent(function(){
      fixSlickSlidersHeight();
    }, 500, "window resize");     
  })
});

function fixSlickSlidersHeight(){
  slickSliderMaxHeight = 0;
  //loop to find the highest element
  $(".slick-slide").each(function(){
    if(slickSliderMaxHeight < $(this).height())
      slickSliderMaxHeight = $(this).height();
  })
  //change the height of all elements to the slickSliderMaxHeight
  $(".slick-slide").css('height', slickSliderMaxHeight+'px');
}