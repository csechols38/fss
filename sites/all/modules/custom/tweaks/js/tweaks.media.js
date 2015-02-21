(function($) {
	//our drupal behaviors
	Drupal.behaviors.tweaks = {
		attach: function(context, settings) {
			var pull_class = "pull-left";
			$('.lpt-media-object').each(function(){
				$(this).children(".pull-left").attr("class", pull_class);
				if(pull_class == 'pull-left'){
					pull_class = "pull-right";
				}
			});
		}
	};
})(jQuery);