(function( $ ){
	jQuery(".custom-slicx-container").owlCarousel({
	  autoplay: true,
	  rewind: true,
	  margin: 20,
	  responsiveClass: true,
	  autoHeight: true,
	  autoplayTimeout: 7000,
	  smartSpeed: 800,
	  nav: false,
	  pagination: false,
	  dots: false,
	  responsive: {
		0: {
		  items: 1
		},

		600: {
		  items: 2
		},

		1024: {
		  items: 3
		},

		1366: {
		  items: 3
		}
	  }
	});
	
	jQuery(".custom-slicx-left").owlCarousel({
	  items: 8,
	  loop: false,
	  rewind: true,
	  autoplay:true,
	  autoplayTimeout:1000,
	  autoplayHoverPause:true,
	  margin: 12,
	  responsiveClass: true,
	  nav: false,
	  rtl: true,
	  pagination: false,
	  dots: false,
	  responsive: {
		0: {
		  items: 1,
		  loop:true
		},

		600: {
		  items: 3,
		  loop:true
		},

		1024: {
		  items: 6,
		  loop:true
		},

		1366: {
		  items: 8,
		  loop:true
		}
	  }
	});
	
	jQuery(".custom-slicx-right").owlCarousel({
	  items: 8,
	  loop: false,
	  rewind: true,
	  autoplay:true,
	  autoplayTimeout:1000,
	  autoplayHoverPause:true,
	  margin: 12,
	  responsiveClass: true,
	  nav: false,
	  rtl: true,
	  pagination: false,
	  dots: false,
	  responsive: {
		0: {
		  items: 1,
		  loop:true
		},

		600: {
		  items: 3,
		  loop:true
		},

		1024: {
		  items: 6,
		  loop:true
		},

		1366: {
		  items: 8,
		  loop:true
		}
	  }
	});
	
	

	jQuery('.custom-user-category-slider').owlCarousel({
	  autoplay: true,
	  rewind: true,
	  margin: 20,
	  responsiveClass: true,
	  autoHeight: true,
	  autoplayTimeout: 7000,
	  smartSpeed: 800,
	  dots: true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	});
	jQuery('.influencer-list-slider').owlCarousel({
	  autoplay: true,
	  rewind: true,
	  margin: 20,
	  responsiveClass: true,
	  autoHeight: true,
	  autoplayTimeout: 7000,
	  smartSpeed: 800,
	  dots: false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items: 4
			},
			1000:{
				items: 8
			}
		}
	});



})( jQuery );

