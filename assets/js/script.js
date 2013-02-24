/**
 * Author: Adam Brewer
 *
 */

(function(M){

	// Name-spacing
	//
	// Here we have to specifially define which
	// objects belong in the global object
	window.S = {
		basePath: 'http://' + document.body.getAttribute('data-base-url'),
		userAgent: navigator.userAgent,
		platform: navigator.platform
	};

	// User-agenct data-attributes
	//
	// Add a data-attribute of the user-agent to <html> - very useful and worthwhile
	// Target with: html[data-useragent*="Chrome/13.0"][data-platform="Win32"] ...
	var b = document.documentElement;
	b.setAttribute("data-useragent", S.userAgent);
	b.setAttribute("data-platform", S.platform);


	// Additional plugins and utility methods
	//
	// Query to an object
	String.prototype.queryToObj = function () {
		var obj = {},
			queryParams = this.split('&'),
			i = 0,
			l = queryParams.length;

			for (i; i<l; i++) {
				var params = queryParams[i].split('='),
				k = params[0],
				v = params[1];
				obj[k] = v;
			}
		return obj;
	};



	M.load({
		load: [
			// S.basePath + "/assets/js/libs/jquery-1.8.0.min.js",
			// S.basePath + "/assets/js/libs/jquery.imagesLoaded.min.js",
			// S.basePath + "/assets/js/libs/iCanHaz.min.js",
			// S.basePath + "/assets/js/libs/hammer.min.js",
			// S.basePath + "/assets/js/libs/jquery.hammer.min.js",
			// S.basePath + "/assets/js/portfolio.js"
			S.basePath + "/script.php?file=assets/js/build.min.js"
		],
		complete: function () {

			// DOM caching
			var viewCont = $('[data-content="view"]'),
				detailCont = $('[data-content="detail"]'),
				projectsCont = $('[data-content="projects"]'),
				profileCont = $('[data-content="profile"]'),
				introCont = $('[data-content="intro"]'),
				tagsCont = $('[data-content="tags"]'),
				togglers = $('#togglers'),
				navLinks = $('.nav-link'),
				loader = $('#loader'),
				logo = $('#logo');

			// Yes, I want this as a global
			window.P = new Portfolio();

			$.ajax({
				url: S.basePath + '/get-portfolio.php',
				dataType: 'json',
				success: function (res) {

					var portfolio = res;

					P.init({
						portfolio: portfolio,
						viewCont: viewCont,
						detailCont: detailCont,
						projectsCont: projectsCont,
						profileCont: profileCont,
						introCont: introCont,
						tagsCont: tagsCont,
						togglers: togglers,
						navLinks: navLinks,
						loader: loader,
						logo: logo
					});

				}
			});




		}
	});

}(Modernizr));
