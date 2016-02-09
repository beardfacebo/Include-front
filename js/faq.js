$(document).ready(function(){
	$(".faqItem").click(function(){
		$(this).next().toggle(250);
	});

   $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });


    $('#tab-yp').click( function() {
        $('#title h1').css('background-color', 'rgba(246, 146, 30, 0.95)')
    });



    $('#tab-clinician').click( function() {
        $('#title h1').css('background-color', 'rgba(05,161,209,0.95)')
    });



    $('#tab-parents').click( function() {
        $('#title h1').css('background-color', 'rgba(5,64,111,0.95)')
    });

});