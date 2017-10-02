jQuery(document).ready(function() {
	var revapi;



	// Make Content Visible
	jQuery(".menHats ul , .fullscreenbanner ul").removeClass('hide');


	/**
		@HALFSCREEN SLIDER
	**/
	if(jQuery(".menHats").length > 0) {

		// Default Thumbs [small]
		var thumbWidth 			= 100,
			thumbHeight 		= 50,
			hideThumbs			= 200,
			navigationType		= "bullet",
			navigationArrows	= "solo",
			navigationVOffset	= 10;

		// Shadow
		_shadow = jQuery(".menHats").attr('data-shadow') || 0;

		// Small Thumbnails
		if(jQuery(".menHats").hasClass('thumb-small')) {
			var navigationType 		= "thumb";
		}

		// Large Thumbnails
		if(jQuery(".menHats").hasClass('thumb-large')) {
			var navigationType 		= "thumb";
				thumbWidth 			= 195,
				thumbHeight 		= 95,
				hideThumbs			= 0,
				navigationArrows	= "solo",
				navigationVOffset	= -94;

				// Hide thumbs on mobile - Avoid gaps
				/**
				if(jQuery(window).width() < 800) {
					setTimeout(function() {
						var navigationVOffset = 10;
						jQuery("div.tp-thumbs").addClass('hidden');
					}, 100);
				}
				**/
		}

		// Init Revolution Slider
		revapi = jQuery('.menHats').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight: jQuery(".menHats").attr('data-height') || 900,
			hideThumbs:hideThumbs,

			thumbWidth:thumbWidth,
			thumbHeight:thumbHeight,
			thumbAmount: parseInt(jQuery(".menHats ul li").length) || 2,

			navigationType:navigationType,
			navigationArrows:navigationArrows,
			navigationStyle:jQuery('.menHats').attr('data-navigationStyle') || "round", // round,square,navbar,round-old,square-old,navbar-old (see docu - choose between 50+ different item)

			touchenabled:"on",
			onHoverStop:"on",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:navigationVOffset,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			shadow: parseInt(_shadow),
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,

			spinner:"spinner0",
			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"on",
			hideArrowsOnMobile:"on",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:768,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher onle - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });
	}



	/**
		@KEN BURNS
	**/
	if(jQuery(".fullscreenbanner.ken-burns").length > 0) {

		revapi = jQuery('.menHats').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight:400,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:jQuery('.menHats').attr('data-navigationStyle') || "round",

			touchenabled:"on",
			onHoverStop:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:10,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,


			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher only - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });

	}

});
//ready
jQuery(document).ready(function() {
	var revapi;



	// Make Content Visible
	jQuery(".womenHats ul , .fullscreenbanner ul").removeClass('hide');


	/**
		@HALFSCREEN SLIDER
	**/
	if(jQuery(".womenHats").length > 0) {

		// Default Thumbs [small]
		var thumbWidth 			= 100,
			thumbHeight 		= 50,
			hideThumbs			= 200,
			navigationType		= "bullet",
			navigationArrows	= "solo",
			navigationVOffset	= 10;

		// Shadow
		_shadow = jQuery(".womenHats").attr('data-shadow') || 0;

		// Small Thumbnails
		if(jQuery(".womenHats").hasClass('thumb-small')) {
			var navigationType 		= "thumb";
		}

		// Large Thumbnails
		if(jQuery(".womenHats").hasClass('thumb-large')) {
			var navigationType 		= "thumb";
				thumbWidth 			= 195,
				thumbHeight 		= 95,
				hideThumbs			= 0,
				navigationArrows	= "solo",
				navigationVOffset	= -94;

				// Hide thumbs on mobile - Avoid gaps
				/**
				if(jQuery(window).width() < 800) {
					setTimeout(function() {
						var navigationVOffset = 10;
						jQuery("div.tp-thumbs").addClass('hidden');
					}, 100);
				}
				**/
		}

		// Init Revolution Slider
		revapi = jQuery('.womenHats').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight: jQuery(".womenHats").attr('data-height') || 900,
			hideThumbs:hideThumbs,

			thumbWidth:thumbWidth,
			thumbHeight:thumbHeight,
			thumbAmount: parseInt(jQuery(".womenHats ul li").length) || 2,

			navigationType:navigationType,
			navigationArrows:navigationArrows,
			navigationStyle:jQuery('.womenHats').attr('data-navigationStyle') || "round", // round,square,navbar,round-old,square-old,navbar-old (see docu - choose between 50+ different item)

			touchenabled:"on",
			onHoverStop:"on",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:navigationVOffset,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			shadow: parseInt(_shadow),
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,

			spinner:"spinner0",
			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"on",
			hideArrowsOnMobile:"on",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:768,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher onle - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });
	}
	/**
		@KEN BURNS
	**/
	if(jQuery(".fullscreenbanner.ken-burns").length > 0) {

		revapi = jQuery('.womenHats').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight:400,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:jQuery('.womenHats').attr('data-navigationStyle') || "round",

			touchenabled:"on",
			onHoverStop:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:10,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,


			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher only - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });

	}

});	//ready
//ready
jQuery(document).ready(function() {
	var revapi;



	// Make Content Visible
	jQuery(".menTops ul , .fullscreenbanner ul").removeClass('hide');


	/**
		@HALFSCREEN SLIDER
	**/
	if(jQuery(".menTops").length > 0) {

		// Default Thumbs [small]
		var thumbWidth 			= 100,
			thumbHeight 		= 50,
			hideThumbs			= 200,
			navigationType		= "bullet",
			navigationArrows	= "solo",
			navigationVOffset	= 10;

		// Shadow
		_shadow = jQuery(".menTops").attr('data-shadow') || 0;

		// Small Thumbnails
		if(jQuery(".menTops").hasClass('thumb-small')) {
			var navigationType 		= "thumb";
		}

		// Large Thumbnails
		if(jQuery(".menTops").hasClass('thumb-large')) {
			var navigationType 		= "thumb";
				thumbWidth 			= 195,
				thumbHeight 		= 95,
				hideThumbs			= 0,
				navigationArrows	= "solo",
				navigationVOffset	= -94;

				// Hide thumbs on mobile - Avoid gaps
				/**
				if(jQuery(window).width() < 800) {
					setTimeout(function() {
						var navigationVOffset = 10;
						jQuery("div.tp-thumbs").addClass('hidden');
					}, 100);
				}
				**/
		}

		// Init Revolution Slider
		revapi = jQuery('.menTops').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight: jQuery(".menTops").attr('data-height') || 900,
			hideThumbs:hideThumbs,

			thumbWidth:thumbWidth,
			thumbHeight:thumbHeight,
			thumbAmount: parseInt(jQuery(".menTops ul li").length) || 2,

			navigationType:navigationType,
			navigationArrows:navigationArrows,
			navigationStyle:jQuery('.menTops').attr('data-navigationStyle') || "round", // round,square,navbar,round-old,square-old,navbar-old (see docu - choose between 50+ different item)

			touchenabled:"on",
			onHoverStop:"on",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:navigationVOffset,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			shadow: parseInt(_shadow),
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,

			spinner:"spinner0",
			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"on",
			hideArrowsOnMobile:"on",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:768,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher onle - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });
	}
	/**
		@KEN BURNS
	**/
	if(jQuery(".fullscreenbanner.ken-burns").length > 0) {

		revapi = jQuery('.menTops').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight:400,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:jQuery('.menTops').attr('data-navigationStyle') || "round",

			touchenabled:"on",
			onHoverStop:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:10,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,


			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher only - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });

	}

});	//ready
//ready
jQuery(document).ready(function() {
	var revapi;



	// Make Content Visible
	jQuery(".womenTops ul , .fullscreenbanner ul").removeClass('hide');


	/**
		@HALFSCREEN SLIDER
	**/
	if(jQuery(".womenTops").length > 0) {

		// Default Thumbs [small]
		var thumbWidth 			= 100,
			thumbHeight 		= 50,
			hideThumbs			= 200,
			navigationType		= "bullet",
			navigationArrows	= "solo",
			navigationVOffset	= 10;

		// Shadow
		_shadow = jQuery(".womenTops").attr('data-shadow') || 0;

		// Small Thumbnails
		if(jQuery(".womenTops").hasClass('thumb-small')) {
			var navigationType 		= "thumb";
		}

		// Large Thumbnails
		if(jQuery(".womenTops").hasClass('thumb-large')) {
			var navigationType 		= "thumb";
				thumbWidth 			= 195,
				thumbHeight 		= 95,
				hideThumbs			= 0,
				navigationArrows	= "solo",
				navigationVOffset	= -94;

				// Hide thumbs on mobile - Avoid gaps
				/**
				if(jQuery(window).width() < 800) {
					setTimeout(function() {
						var navigationVOffset = 10;
						jQuery("div.tp-thumbs").addClass('hidden');
					}, 100);
				}
				**/
		}

		// Init Revolution Slider
		revapi = jQuery('.womenTops').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight: jQuery(".womenTops").attr('data-height') || 900,
			hideThumbs:hideThumbs,

			thumbWidth:thumbWidth,
			thumbHeight:thumbHeight,
			thumbAmount: parseInt(jQuery(".womenTops ul li").length) || 2,

			navigationType:navigationType,
			navigationArrows:navigationArrows,
			navigationStyle:jQuery('.womenTops').attr('data-navigationStyle') || "round", // round,square,navbar,round-old,square-old,navbar-old (see docu - choose between 50+ different item)

			touchenabled:"on",
			onHoverStop:"on",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:navigationVOffset,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			shadow: parseInt(_shadow),
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,

			spinner:"spinner0",
			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"on",
			hideArrowsOnMobile:"on",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:768,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher onle - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });
	}
	/**
		@KEN BURNS
	**/
	if(jQuery(".fullscreenbanner.ken-burns").length > 0) {

		revapi = jQuery('.womenTops').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight:400,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:jQuery('.womenTops').attr('data-navigationStyle') || "round",

			touchenabled:"on",
			onHoverStop:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:10,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,


			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher only - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });

	}

});	//ready
//ready
jQuery(document).ready(function() {
	var revapi;



	// Make Content Visible
	jQuery(".menPants ul , .fullscreenbanner ul").removeClass('hide');


	/**
		@HALFSCREEN SLIDER
	**/
	if(jQuery(".menPants").length > 0) {

		// Default Thumbs [small]
		var thumbWidth 			= 100,
			thumbHeight 		= 50,
			hideThumbs			= 200,
			navigationType		= "bullet",
			navigationArrows	= "solo",
			navigationVOffset	= 10;

		// Shadow
		_shadow = jQuery(".menPants").attr('data-shadow') || 0;

		// Small Thumbnails
		if(jQuery(".menPants").hasClass('thumb-small')) {
			var navigationType 		= "thumb";
		}

		// Large Thumbnails
		if(jQuery(".menPants").hasClass('thumb-large')) {
			var navigationType 		= "thumb";
				thumbWidth 			= 195,
				thumbHeight 		= 95,
				hideThumbs			= 0,
				navigationArrows	= "solo",
				navigationVOffset	= -94;

				// Hide thumbs on mobile - Avoid gaps
				/**
				if(jQuery(window).width() < 800) {
					setTimeout(function() {
						var navigationVOffset = 10;
						jQuery("div.tp-thumbs").addClass('hidden');
					}, 100);
				}
				**/
		}

		// Init Revolution Slider
		revapi = jQuery('.menPants').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight: jQuery(".menPants").attr('data-height') || 900,
			hideThumbs:hideThumbs,

			thumbWidth:thumbWidth,
			thumbHeight:thumbHeight,
			thumbAmount: parseInt(jQuery(".menPants ul li").length) || 2,

			navigationType:navigationType,
			navigationArrows:navigationArrows,
			navigationStyle:jQuery('.menPants').attr('data-navigationStyle') || "round", // round,square,navbar,round-old,square-old,navbar-old (see docu - choose between 50+ different item)

			touchenabled:"on",
			onHoverStop:"on",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:navigationVOffset,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			shadow: parseInt(_shadow),
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,

			spinner:"spinner0",
			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"on",
			hideArrowsOnMobile:"on",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:768,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher onle - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });
	}
	/**
		@KEN BURNS
	**/
	if(jQuery(".fullscreenbanner.ken-burns").length > 0) {

		revapi = jQuery('.menPants').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight:400,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:jQuery('.menPants').attr('data-navigationStyle') || "round",

			touchenabled:"on",
			onHoverStop:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:10,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,


			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher only - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });

	}

});	//ready
//ready
jQuery(document).ready(function() {
	var revapi;



	// Make Content Visible
	jQuery(".womenPants ul , .fullscreenbanner ul").removeClass('hide');


	/**
		@HALFSCREEN SLIDER
	**/
	if(jQuery(".womenPants").length > 0) {

		// Default Thumbs [small]
		var thumbWidth 			= 100,
			thumbHeight 		= 50,
			hideThumbs			= 200,
			navigationType		= "bullet",
			navigationArrows	= "solo",
			navigationVOffset	= 10;

		// Shadow
		_shadow = jQuery(".womenPants").attr('data-shadow') || 0;

		// Small Thumbnails
		if(jQuery(".womenPants").hasClass('thumb-small')) {
			var navigationType 		= "thumb";
		}

		// Large Thumbnails
		if(jQuery(".womenPants").hasClass('thumb-large')) {
			var navigationType 		= "thumb";
				thumbWidth 			= 195,
				thumbHeight 		= 95,
				hideThumbs			= 0,
				navigationArrows	= "solo",
				navigationVOffset	= -94;

				// Hide thumbs on mobile - Avoid gaps
				/**
				if(jQuery(window).width() < 800) {
					setTimeout(function() {
						var navigationVOffset = 10;
						jQuery("div.tp-thumbs").addClass('hidden');
					}, 100);
				}
				**/
		}

		// Init Revolution Slider
		revapi = jQuery('.womenPants').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight: jQuery(".womenPants").attr('data-height') || 900,
			hideThumbs:hideThumbs,

			thumbWidth:thumbWidth,
			thumbHeight:thumbHeight,
			thumbAmount: parseInt(jQuery(".womenPants ul li").length) || 2,

			navigationType:navigationType,
			navigationArrows:navigationArrows,
			navigationStyle:jQuery('.womenPants').attr('data-navigationStyle') || "round", // round,square,navbar,round-old,square-old,navbar-old (see docu - choose between 50+ different item)

			touchenabled:"on",
			onHoverStop:"on",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:navigationVOffset,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			shadow: parseInt(_shadow),
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,

			spinner:"spinner0",
			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"on",
			hideArrowsOnMobile:"on",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:768,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher onle - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });
	}
	/**
		@KEN BURNS
	**/
	if(jQuery(".fullscreenbanner.ken-burns").length > 0) {

		revapi = jQuery('.womenPants').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight:400,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:jQuery('.womenPants').attr('data-navigationStyle') || "round",

			touchenabled:"on",
			onHoverStop:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:10,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,


			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher only - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });

	}

});	//ready
//ready
jQuery(document).ready(function() {
	var revapi;



	// Make Content Visible
	jQuery(".menShoes ul , .fullscreenbanner ul").removeClass('hide');


	/**
		@HALFSCREEN SLIDER
	**/
	if(jQuery(".menShoes").length > 0) {

		// Default Thumbs [small]
		var thumbWidth 			= 100,
			thumbHeight 		= 50,
			hideThumbs			= 200,
			navigationType		= "bullet",
			navigationArrows	= "solo",
			navigationVOffset	= 10;

		// Shadow
		_shadow = jQuery(".menShoes").attr('data-shadow') || 0;

		// Small Thumbnails
		if(jQuery(".menShoes").hasClass('thumb-small')) {
			var navigationType 		= "thumb";
		}

		// Large Thumbnails
		if(jQuery(".menShoes").hasClass('thumb-large')) {
			var navigationType 		= "thumb";
				thumbWidth 			= 195,
				thumbHeight 		= 95,
				hideThumbs			= 0,
				navigationArrows	= "solo",
				navigationVOffset	= -94;

				// Hide thumbs on mobile - Avoid gaps
				/**
				if(jQuery(window).width() < 800) {
					setTimeout(function() {
						var navigationVOffset = 10;
						jQuery("div.tp-thumbs").addClass('hidden');
					}, 100);
				}
				**/
		}

		// Init Revolution Slider
		revapi = jQuery('.menShoes').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight: jQuery(".menShoes").attr('data-height') || 900,
			hideThumbs:hideThumbs,

			thumbWidth:thumbWidth,
			thumbHeight:thumbHeight,
			thumbAmount: parseInt(jQuery(".menShoes ul li").length) || 2,

			navigationType:navigationType,
			navigationArrows:navigationArrows,
			navigationStyle:jQuery('.menShoes').attr('data-navigationStyle') || "round", // round,square,navbar,round-old,square-old,navbar-old (see docu - choose between 50+ different item)

			touchenabled:"on",
			onHoverStop:"on",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:navigationVOffset,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			shadow: parseInt(_shadow),
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,

			spinner:"spinner0",
			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"on",
			hideArrowsOnMobile:"on",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:768,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher onle - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });
	}
	/**
		@KEN BURNS
	**/
	if(jQuery(".fullscreenbanner.ken-burns").length > 0) {

		revapi = jQuery('.menShoes').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight:400,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:jQuery('.menShoes').attr('data-navigationStyle') || "round",

			touchenabled:"on",
			onHoverStop:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:10,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,


			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher only - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });

	}

});	//ready
//ready
jQuery(document).ready(function() {
	var revapi;



	// Make Content Visible
	jQuery(".womenShoes ul , .fullscreenbanner ul").removeClass('hide');


	/**
		@HALFSCREEN SLIDER
	**/
	if(jQuery(".womenShoes").length > 0) {

		// Default Thumbs [small]
		var thumbWidth 			= 100,
			thumbHeight 		= 50,
			hideThumbs			= 200,
			navigationType		= "bullet",
			navigationArrows	= "solo",
			navigationVOffset	= 10;

		// Shadow
		_shadow = jQuery(".womenShoes").attr('data-shadow') || 0;

		// Small Thumbnails
		if(jQuery(".womenShoes").hasClass('thumb-small')) {
			var navigationType 		= "thumb";
		}

		// Large Thumbnails
		if(jQuery(".womenShoes").hasClass('thumb-large')) {
			var navigationType 		= "thumb";
				thumbWidth 			= 195,
				thumbHeight 		= 95,
				hideThumbs			= 0,
				navigationArrows	= "solo",
				navigationVOffset	= -94;

				// Hide thumbs on mobile - Avoid gaps
				/**
				if(jQuery(window).width() < 800) {
					setTimeout(function() {
						var navigationVOffset = 10;
						jQuery("div.tp-thumbs").addClass('hidden');
					}, 100);
				}
				**/
		}

		// Init Revolution Slider
		revapi = jQuery('.womenShoes').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight: jQuery(".womenShoes").attr('data-height') || 900,
			hideThumbs:hideThumbs,

			thumbWidth:thumbWidth,
			thumbHeight:thumbHeight,
			thumbAmount: parseInt(jQuery(".womenShoes ul li").length) || 2,

			navigationType:navigationType,
			navigationArrows:navigationArrows,
			navigationStyle:jQuery('.womenShoes').attr('data-navigationStyle') || "round", // round,square,navbar,round-old,square-old,navbar-old (see docu - choose between 50+ different item)

			touchenabled:"on",
			onHoverStop:"on",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:navigationVOffset,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			shadow: parseInt(_shadow),
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,

			spinner:"spinner0",
			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"on",
			hideArrowsOnMobile:"on",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:768,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher onle - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });
	}
	/**
		@KEN BURNS
	**/
	if(jQuery(".fullscreenbanner.ken-burns").length > 0) {

		revapi = jQuery('.womenShoes').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight:400,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:jQuery('.womenShoes').attr('data-navigationStyle') || "round",

			touchenabled:"on",
			onHoverStop:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:10,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:0,
			stopAtSlide:1,


			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher only - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });

	}

});	//ready
