(function($) {
    $(document).ready(function(){
        $('.b-gallery__item').colorbox({
            rel: true,
            close: "",
            previous:"",
            next:"",
            maxWidth: "90%",
            maxHeight: "90%"
        });
		
		
    });

    $(window).load(function() {
		$('.b-prodslide').flexslider({
            slideshow: false,
            prevText: "",
            nextText: "",
            controlNav: false
        });
    });
}(jQuery));