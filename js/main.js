$(document).ready(function() {
  /* ///////////// Tooltips ///////////////////////////////////// */
   new $.Zebra_Tooltips($('.tooltips'), {
        'background_color': '#C40000',
        'color': '#FFF',
        'position': 'center'
    });
    /* ///////////// End of Tooltips ///////////////////////////////////// */
   if(!$(".responsive").length){
	   $(window).scroll(function() {
		   if($(window).scrollTop() + $(window).height() == $(document).height()) {
		   		$("#footer").fadeIn(500);
		    }
		    else
		        $("#footer").fadeOut(60);
	   });

	   if($(window).height() < $(document).height())
	   		$("#footer").hide();
	}
});

