var Videos = (function() {
	var PLAYER_SHOW_DURATION = 500;
	return {
		init: function($) {
			var $frames = $('iframe'), i = 0;
			var nextVideo = function() {
				var $frame = $frames.eq(i);
				if (i < $frames.length) {
					Videos.replaceEmbedWithPoster($frames[i], function() {
						var $embed = $frame.closest('.video-embed'),
							player = new Vimeo.Player($frame[0]);
						$embed.on('click', function() {
							$embed.addClass('show-embed');
							setTimeout(player.play.bind(player), PLAYER_SHOW_DURATION);
						});
						nextVideo();
					}, function() {
						$frame.closest('.video-embed').addClass('show-embed');
						nextVideo();
					});
				}
				i++;
			};
			nextVideo();
		},
		replaceEmbedWithPoster: function(frame, onSuccess, onFail) {
			var matches = /vimeo\.com\/video\/([0-9]+)/.exec(frame.src);
			if (matches) {
				var poster = new Image();
				fetch('https://vimeo.com/api/v2/video/' + matches[1] + '.json')
				.then(function(response, onFail) { return response.json(); })
				.then(function(data, onFail) {
					if (data.length && ('thumbnail_large' in data[0])) {
						frame.parentNode.appendChild(poster);
						poster.src = data[0].thumbnail_large;
						onSuccess();
					}
					else {
						onFail();
					}
				});
			}
			else onFail();
		},
	};
})();
