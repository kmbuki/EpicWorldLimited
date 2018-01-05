$(function() {

    "use strict";

    // REMOVE # FROM URL
	$( 'a[href="#"]' ).click( function(e) {
		e.preventDefault();
	});

	// STICKY NAV
	//var stickyHeaderTop = $("#main-slider").height();
	var stickyHeaderTop = $(window).height();
    $(window).scroll(function() {
        if ($(window).scrollTop() > stickyHeaderTop) {
            $(".sticky-nav").css({position: "fixed", top: "0px"});
            $(".sticky-nav").css("display", "block");
			$(".sticky-nav").addClass("fixednav");
        } else {
            $(".sticky-nav").css({position: "absolute", top: "0px"});
			$(".sticky-nav").removeClass("fixednav");
        }
	});
	
	// ONE PAGE NAV
	$("#nav").onePageNav({
		currentClass: 'current',
		changeHash: false,
		scrollSpeed: 750,
		scrollThreshold: 0.5,
		filter: '',
		easing: 'swing',
		begin: function() {
			//I get fired when the animation is starting
		},
		end: function() {
			//I get fired when the animation is ending
		},
		scrollChange: function($currentListItem) {
			//I get fired when you enter a section and I pass the list item of the section
		}
	});

	// Projects FILTERS
	var $grid = $('#projects-grid');
	$grid.shuffle({
		itemSelector: '.project-grid-item', // the selector for the items in the grid
		speed: 500 // Transition/animation speed (milliseconds)
	});
	/* reshuffle when user clicks a filter item */
	$('#projects-filter li a').click(function (e) {
		// set active class
		$('#projects-filter li a').removeClass('active');
		$(this).addClass('active');
		// get group name from clicked item
		var groupName = $(this).attr('data-group');
		// reshuffle grid
		$grid.shuffle('shuffle', groupName );
	});
	
	//MAGNIFIC POPUP
	$('#projects-grid').magnificPopup({
		delegate: 'a.zoom', 
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	// Tooltip
	$('[data-toggle="tooltip"]').tooltip(); 

	// ACCORDION
	var $active = $("#accordion .panel-collapse.in")
					.prev()
					.addClass("active");
					
	$active
		.find("a")
		.append("<span class=\"fa fa-minus pull-left\"></span>");
		
	$("#accordion .panel-heading")
		.not($active)
		.find('a')
		.prepend("<span class=\"fa fa-plus pull-left\"></span>");
	
	$("#accordion").on("show.bs.collapse", function (e) {	
		$("#accordion .panel-heading.active")
			.removeClass("active")
			.find(".fa")
			.toggleClass("fa-plus fa-minus");				
		$(e.target)
			.prev()
			.addClass("active")
			.find(".fa")
			.toggleClass("fa-plus fa-minus");		
	});
	
	$("#accordion").on("hide.bs.collapse", function (e) {
		$(e.target)
			.prev()
			.removeClass("active")
			.find(".fa")
			.removeClass("fa-minus")
			.addClass("fa-plus");
	});

	//AJAX CONTACT FORM
	$(".contact-form").submit(function() {
		var rd = this;
		var url = "sendemail.php"; // the script where you handle the form input.
		$.ajax({
		type: "POST",
		url: url,
		data: $(".contact-form").serialize(), // serializes the form's elements.
		success: function(data)
		{
		//alert("Mail sent!"); // show response from the php script.
		$(rd).prev().text(data.message).fadeIn().delay(3000).fadeOut();
		}
		});
		return false; // avoid to execute the actual submit of the form.
	});
	
});