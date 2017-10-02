jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {	$(".toggle").click();
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
});


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

$(document).ready(function(){

        $("#trendr").hide();
        $("#lbtn").click(function(){
        $("#trendr").show();
        $("#lbtn").hide();
    });
});


$(document).ready(function() {

	jQuery('#tc1').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 200
	});

	jQuery('#tc2').addClass("hidden1").viewportChecker({
			classToAdd: 'visible1 animated fadeIn',
			offset: 220
	});

	jQuery('#tc3').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 240
	});

	jQuery('#tc4').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 260
	});

	jQuery('#tc5').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 280
	});

	jQuery('#tc6').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 300
	});

	jQuery('#tc7').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 320
	});

	jQuery('#tc8').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 340
	});

	jQuery('#tc9').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 360
	});

});
