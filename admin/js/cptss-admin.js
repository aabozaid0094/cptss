(function ($) {
	"use strict";

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	// $('#cptss-admin-metabox-tabs').tabs();
	$(window).on("load", function () {
		$('a[data-toggle="tab"]').on("shown.bs.tab", function () {
			$(this).parents(".nav-tab-wrapper").find("a").removeClass("nav-tab-active");
			$(this).addClass("nav-tab-active");
		});

		let cpt = $('#cptss-admin-metabox-tab-cpt select#cpt');
		let taxonomy = $('#cptss-admin-metabox-tab-cpt select#taxonomy');
		let term = $('#cptss-admin-metabox-tab-cpt select#term');
		let options_reset = function(select){
			select.find('option').each(function() {
				if ($(this).attr('value')) {
					$(this).css('display','none');
				}
			});
		};
		let update = function(parent, child, grand){
			let parent_value = parent.value;
			child.find('option').each(function() {
				if ($(this).attr('parent_select')) {
					let parent_select = $(this).attr('parent_select').split(',');
					if (!parent_select.includes(parent_value)) {
						$(this).css('display','none');
					}
					else {
						$(this).css('display','block');
					}
				}
			});
			child[0].selectedIndex = 0;
			if (grand) { grand[0].selectedIndex = 0; }
		};
		options_reset(taxonomy);
		options_reset(term);
		cpt.on('change', function(){
			update(this, taxonomy, term);
		});
		taxonomy.on('change', function(){
			update(this, term);
		});
		$('.cptss_color_field').wpColorPicker();
	});
})(jQuery);