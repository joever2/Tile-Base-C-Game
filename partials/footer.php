<!-- To ensure that jQuery is at all pages in the footer for best loading -->
<script>
	jQuery(document).ready(function($){	

		// Sript to fire all Fancybox links
		// which are powered by any html element that has
		// that particular class
		$('.fancybox').fancybox();	

		// Script to create blue hover states on the following selectors
		$('section.to-do ul li, section.resources ul li, section.comments ul li, section.interactions div, section.if-then-scenarios div, #fb-resources span.item, section.dashboard-cards div, section.dynamic-data div, section.my-projects ul:last-of-type li, #fb-to-do ul li, #fb-recent-activity ul li, #fb-project-overview ul li, #fb-ix-fifth-overlay div.thumbnails span, #fb-link-to-screenshot aside div, section.link-to-screenshot div').hover(
			function() {
				$(this).addClass('blue');
			},
			function () {
				$(this).removeClass('blue');
			});
		// Function to center images dynamically
		// Must be targeted at parent of sequence (divs, uls, etc.)
		// To best undrestand what is being achieved, look at the following static example
		// static example http://css-tricks.com/snippets/css/absolute-center-vertical-horizontal-an-image/
		// We are getting the images height and width, to then position it absolutely in a way that places it
		// at exactly the center.  
		// NOTE
		// The function has a startPoint argument since sometimes the first div or item in a series
		// coud contain a plus sign


		function centerDynamically (parentSelector, childSelector, startPoint) {
			var items = $(parentSelector).length;
			for (var i = startPoint; i < items; i++) {
				var height = $(parentSelector).eq(i).find(childSelector).css('height');
				var newTopMargin = parseInt(height.substring(0, height.length - 2))*-0.5+"px";
				var width =	$(parentSelector).eq(i).find(childSelector).css('width');
				var newLeftMargin = parseInt(width.substring(0, width.length - 2))*-0.5+"px";
				$(parentSelector).eq(i).find(childSelector).css({
					position : 'absolute',
					top : '50%',
					left : '50%',
					height: height,
					width: width,
					'margin-top': newTopMargin,
					'margin-left': newLeftMargin
				})
			};
		}

		// Now executed on the following selectors a bit after the DOM is Ready for the following selectors
		//  since the placehold.it takes a few moments to properly load all the little images
		
		setTimeout(function(){
			centerDynamically ('section.link-to-screenshot div', 'img', 1);
			centerDynamically('section.comment-interface, section.ix-interface, section.ui-interface, section.if-then-interface, section.dd-interface', 'img', 0)
		}, 500)

		centerDynamically('section.if-then-scenarios div', 'p', 1)

		
		// Because the ix overlays have to produce the placeholder images, I've had to add a click event 
		// handler to ensure they are centered
		$('#fb-ix-fourth-overlay a.fancybox, section.link-to-screenshot a.fancybox, section.dd-interface a.fancybox').click(function(){
			setTimeout(function(){
				centerDynamically('#fb-ix-fifth-overlay div.thumbnails span.item', 'img', 0);
				centerDynamically('#fb-link-to-screenshot aside div', 'img', 0);
			}, 1000)
		})


		// clickOverlayText allows a user to add text to an div with whatever text.
		// These items created will have a class of clickOverlayText.
		function clickOverlayText(containingDIV, textString) {
			var x = textString;
			$(containingDIV).append('<span class="clickOverlayText">'+textString+'</span>');
		}

		// This function is meant to be used for test purposes 
		// It creates an overlay on first click of a box, and then adds a second on 
		// the next click.  It is a way for me to see how the overlays would look, and
		// sets up a bit of the javascript so that it can be done for the ideal
		// interface.

		$('#fb-resources .thumbnails span').click(function(){
			
			// Check if there are any other screenshots selected
			var selectedScreenshots = $(this).find('.clickOverlayText').length;
			$(this).find('.clickOverlayText').remove();

			if (selectedScreenshots === 0){
				// If there are no overlay spans, then create one
				clickOverlayText(this, "Select as screenshot");
			} 
			else if (selectedScreenshots === 1)  {
				// If there is one, remove it and add unselect	
				clickOverlayText(this, "Unselect as screenshot");
			} 	
		})

		// Same thing for the link/unlink

		$('#fb-ix-fifth-overlay div.thumbnails span, #fb-ix-second-overlay div.thumbnails span, #fb-link-to-screenshot aside div').click(function(){
			
			// Check if there are any other screenshots selected
			var selectedScreenshots = $(this).find('.clickOverlayText').length;
			$(this).find('.clickOverlayText').remove();

			if (selectedScreenshots === 0){
				// If there are no overlay spans, then create one
				clickOverlayText(this, "Link this");
			} 
			else if (selectedScreenshots === 1)  {
				// If there is one, remove it and add unselect	
				clickOverlayText(this, "Unlink this");
			} 	
		})

		/// FOR COMMENTS to be able to be dragged

		$('section.comment-interface, section.ix-interface, section.ui-interface, section.if-then-interface, section.dd-interface').find('strong').draggable()

		// Function gives the active class to the correct ul li for the
		// ui, ix, dd, and if-then.php files.  The comments sections have not been updated yet.
		function addActive () {
			var interfaces = ['section.ui-interface','section.ix-interface', 'section.if-then-interface', 'section.dd-interface']
			for (var i = 0; i < interfaces.length; i++) {
				$(interfaces[i]).find('ul.numbers li').eq(i).addClass('active');
				$(interfaces[i]).find('ul.components li').eq(i).addClass('active');
			};
		};
		addActive();
	})
</script>


	</body>
</html>