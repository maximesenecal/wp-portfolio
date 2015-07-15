jQuery(document).ready(function($) {
	$(document).foundation();
	$( ".nav-toggle" ).click(function() {
	  $(this).toggleClass("open");
	  $("nav").fadeToggle(100);

	  return false;
	});
});

jQuery(document).ready(function($) {
	$(document).foundation();
	$( ".portfolio-thumbnail" ).hover(function() {
	  $(this).toggleClass("open");
	  $(".portfolio-thumbnail-open").fadeToggle(100);

	  return false;
	});
});

jQuery(document).ready(function($) {
	$(document).foundation();
	$('.portfolio-section').hover(
	       function(){ $(this).addClass('hover-section') },
	       function(){ $(this).removeClass('hover-section')
	});
});