// Author:
// Adam Brewer - @adamcbrewer
// brewerlogic.com
var Portfolio = function () {

	// Publics
	var portfolio = {

		init: function (args) {

			this._setup(args);
			this._events();

			// this.current = this.introCont;

			this.hideInitial();

			this.renderGrid(false);
			this.renderFilters(false);

			// change the view according to the query string in the URI
			if (window.location.search.indexOf('?') != -1) {
				this.parseQuery();
			} else {
				this.renderIntro();
			}

			return this;

		},


		/**
		 * The intial view for visitiing the site
		 *
		 */
		renderIntro: function () {

			var introHTML = ich.ichIntro(this.portfolio),
				that = this;

			this.introCont.html(introHTML);

			// Check to see if all the project images have been loaded, then
			// call our method to masonary the whole thing
			this.introCont.imagesLoaded({
				done: function (images) {
					that.ready(function () {
						this.switchView(false, that.introCont);
						// console.log("intro loading");
					});
				},
				progress: function (isBroken, images, proper, broken) {
					// TODO: load in each image individually when
					// the thumnail has finished loading.
					// that.maseIt(this.parents('.grid-project'));
				}
			});

		},



		/**
		 * Picks out the project from the portfolio
		 * based in the slug on the selected item
		 *
		 */
		findProject: function (slug) {
			var i = 0,
				projects = this.portfolio.projects;

			for (var k = 0;k < this.numProjects; k++) {
				// console.log(k, projects[k].title);
			}
			for (i; i < this.numProjects;i++) {
				if (projects[i].slug === slug) {
					var project = projects[i],
						prev = projects[i-1] || false,
						next = projects[i+1] || false;
					return {
						current: project,
						prev: prev,
						next: next
					};
				}
			}
			return false;
		},



		/**
		 * Figures out the previous and next linksfor rendering
		 * in the project detail view.
		 * Takes a project object.
		 *
		 */
		projectPaging: function (project) {

			project.prev = projects[i-1] || false;
			project.next = projects[i+1] || false;

		},



		/**
		 * The first step handling a request to open the
		 * details of a particular project
		 *
		 */
		openProject: function (slug) {

			var project = this.findProject(slug),
				that = this,
				selectedProjectNum = false;

			if (slug.length === 0) slug = '404';

			this.appendQuery('project', slug);

			this.detailCont.fadeOut(100, function () {
				that.busy();
				var projectHTML = ich.ichProjectDetail({ project: project.current, prev: project.prev, next: project.next });
				that.detailCont.html(projectHTML).imagesLoaded({
					done: function (images) {
						that.ready(function () {
							this.switchView(this.current, that.detailCont);
						});
					}
				});
			});

			// if (typeof this.selectedProject == 'number') this.highlightProject(false);

		},


		/**
		 * Generates the javascript templates using our the chosen template engine
		 * and injects it in the DOM.
		 *
		 * A furthur process has it using imagesLoaded() to only init Masonry after
		 * all the project thumbnails have actually been loaded (needed to masonry to properly load).
		 *
		 */
		renderGrid: function (show) {

			show = ( show === false ) ? false : true;

			// console.log('rendering grid');
			var projectsHTML = ich.ichGrid(this.portfolio),
				that = this;
			this.projectsCont.html(projectsHTML);

			this.projectsCont.find('.grid-project').hide();

			// Check to see if all the project images have been loaded, then
			// call our method to masonary the whole thing

			this.projectsCont.imagesLoaded({
				done: function (images) {
					that.ready(function () {
						if (show) this.switchView(false, that.viewCont);
					});
				},
				progress: function (isBroken, images, proper, broken) {
					$(this).closest('.grid-project').fadeIn(600);
				}
			});


		},


		/**
		 * Internal methods for handling the loading animation betwen switching states.
		 * Optional callbacks can also be specified with added scoping
		 *
		 */
		busy: function (callback) {
			callback = callback || false;
			var that = this;
			this.logo.addClass('animate');
			this.loader.fadeIn(200, function () {
				if (typeof callback === 'function') callback.apply(that);
			});
		},
		ready: function (callback) {
			callback = callback || false;
			var that = this;
			this.loader.fadeOut(200, function () {
				that.logo.removeClass('animate');
				if (typeof callback === 'function') callback.apply(that);
			});
		},


		/**
		 * When the user has chosen something we need to determin
		 * what is currently in view and what needs to be displayed,
		 * such as the grid/list or a project detail.
		 *
		 * This function does this.
		 *
		 */
		switchView: function (from, to, callback) {

			from = from || this.current || false;
			to = to || false;
			callback = callback || false;
			var that = this;

			// quick quick
			this.discoSlide(0, 10);
			if (from) {
				from.fadeOut(100, function () {
					to.fadeIn(100, function () {
						that.current = to;
						if (callback && typeof callback === 'function') callback.call(null, {});
					});
				});
			} else {
				to.fadeIn(200, function () {
					that.current = to;
					if (callback && typeof callback === 'function') callback.call(null, {});
				});
			}


		},


		/**
		 * Animate the view vindow
		 *
		 * Avoids loading content out of view and also
		 * provides a way of nicely transitioning the user
		 * to any hashed content on the page
		 *
		 */
		discoSlide: function (top, speed) {

			top = top || 0;
			speed = speed || 200;

			$('html, body').animate({ scrollTop: top }, speed);

			return this;

		},



		/**
		 * A filter area for direcing what we need to display depending
		 * on which section has been chosen.
		 *
		 */
		get: function (what, hash) {
			what = what || '';
			hash = hash || false;
			// console.log('getting: ' + what);
			var that = this;
			if (what === 'profile') {
				var hasProfile = this.profileCont.html().length ? true : false;
				if (!hasProfile) {
					this.busy(function () {
						var profileHtml = ich.ichProfile(that.portfolio.profile);
						that.ready(function () {
							that.profileCont.html(profileHtml);
							this.switchView(that.current, this.profileCont);

							if (hash && hash.length) {

								this.discoSlide(10000, 400);
								// window.scroll(800);

							}
						});

					});
				} else {
					this.busy(function () {
						that.ready(function () {
							that.switchView(this.current, this.profileCont);
							if (hash && hash.length) {

								this.discoSlide(10000, 400);
								// window.scroll(800);

							}
						});
					});
				}
			} else if (what === 'projects') {
				// if (!this.current) this.current = this.viewCont;
				// console.log('here');
				this.busy(function () {
					that.ready(function () {
						that.switchView(false, this.viewCont);
					});
				});
			}
			this.appendQuery('view', what);

			// Highlight the current section in the site
			if (hash && hash.length) {

				this.navLinks.removeClass('current')
					.filter('[data-get="'+ what +'"][data-hash]')
					.addClass('current');

			} else {

				this.navLinks.removeClass('current')
					.filter('[data-get="'+ what +'"]')
					.not('[data-hash]')
					.addClass('current');

			}


		},


		/**
		 * Functionality for actually hiding and showing projects
		 * based on the filters they are tagged with.
		 *
		 * I would like to make this a sate-based css filtering system,
		 * but we lose gucci animations if we're not using css units in our states.
		 */
		filterProjects: function (tag) {

			var that = this;

			// console.log(typeof tag);
			if (typeof tag === 'string' && tag != 'false') {
				var projectsToShow = this.projectsCont.find('[data-tags*="'+tag+'"]'),
					projectsToHide = this.projectsCont.find('.grid-project').not(projectsToShow);

				// applying a 'current' state to what we want
				this.tagsCont.find('[data-filter]')
					.removeClass('current')
					.filter('[data-filter="'+tag+'"]').addClass('current');

				// this.busy();
				// this.projectsCont.fadeOut(10, function () {
					projectsToShow.removeClass('hidden'); //.show(10);
					projectsToHide.addClass('hidden');//.hide(10);
					// that.ready(function () {
						// this.projectsCont.fadeIn(200);
					// });
				// });

				this.appendQuery('filter', tag);

				this.selectedProject = null;
				this.highlightProject(false);

			} else {
				console.log(typeof tag);
				if (tag === false || tag === 'false') {

					// this.busy();

					// this.projectsCont.fadeOut(10, function () {
						that.tagsCont.find('[data-filter]').removeClass('current');
						that.projectsCont.find('[data-tags]').removeClass('hidden');//.show(10);
						// that.ready(function () {
							// this.projectsCont.fadeIn(200);
						// });
					// });
					this.appendQuery('view', 'projects');

					this.selectedProject = null;
					this.highlightProject(false);

				}
			}

			return this;

		},


		/**
		 * Here we filter throught the grid of projects
		 *
		 */
		renderFilters: function () {
			var filters = ich.ichFilter(this.portfolio);
			this.tagsCont.html(filters);
			this.togglers.show();
		},


		/**
		 * Logic for handling the animations/states of
		 * the toggling and filtering system
		 *
		 */
		applyToggle: function (what) {

			what = what || false;
			var that = this;

			// the tags have to be handled differently from the rest
			if (what === 'tags') {
				var toggleWhat = this.togglers.find('[data-toggle="'+what+'"]');
				toggleWhat.toggleClass('current');
				this.tagsCont.toggleClass('hide');
				this.filterProjects(toggleWhat.hasClass('current'));
			} else {
				this.togglers.find('[data-toggle]').not('[data-toggle="tags"]')
					.removeClass('current')
					.filter('[data-toggle="'+what+'"]').addClass('current');

				// this.busy();
				// this.projectsCont.fadeOut(100, function () {
					if (what === 'grid') {
						that.projectsCont.removeClass('list');
						that.appendQuery('view', 'projects');
					} else {
						that.projectsCont.addClass('list');
						that.appendQuery('view', what);
					}
					that.ready(function () {
						// this.projectsCont.fadeIn(200);
					});
				// });

			}

			return this;

		},


		/**
		 * Hide the HTML sections we're not using at first
		 *
		 */
		hideInitial: function () {

			this.profileCont.hide();
			this.detailCont.hide();
			this.viewCont.hide();
			// this.projectsCont.hide();
			this.introCont.hide();

		},


		/**
		 * Create the history ctate for the query we've just chosen to go to.
		 *
		 */
		appendQuery: function (key, value) {

			if (Modernizr.history) {
				if (arguments[0] === false || arguments[0] === true ) {
					var path = S.basePath;
					if (path.substr(-1,1) !== '/') path += '/';
					window.history.pushState(null, '', path);
					return;
				}

				var search = window.location.search,
					q = search.replace('?', '').queryToObj(),
					k,
					isInHistory = false;

				// account for an empty query
				search += (search.indexOf('?') == -1) ? '?' : '';

				for (k in q) {
					var ownProp = q.hasOwnProperty(k);
					if (ownProp) {
						if (q[k] === value) {
							isInHistory = true;
							break;
						}
					}
				}

				if (!isInHistory) {
					search = '?' + key + '=' + value;
					var stateData = {};
					stateData[key] = value;
					window.history.pushState(stateData, search, search);
				}
			}


		},


		/**
		 * Handles the options to include a query link
		 * straight to specific content
		 *
		 */
		parseQuery: function () {

			var search = window.location.search.replace('?', ''),
				q = search.queryToObj();

			if (q.project) {
				this.openProject(q.project);
			}
			if (q.filter) {
				this.applyToggle('tags')
					.filterProjects(q.filter) // first filter
					.get('projects'); // now get the projects section

			}
			if (q.view) {
				if (q.view === 'grid' || q.view === 'list') {
					this.applyToggle(q.view)
						.get('projects');
				} else if (q.view === 'profile') {
					this.get(q.view);
				} else if (q.view === 'projects') {
					this.get(q.view);
				}
			}

		},


		/**
		 * Finds the hidden projects filtered out
		 * by the tag filters
		 *
		 */
		hiddenProjects: function () {
			var projects = this.projectsCont.find('.grid-project'),
				hiddenProjects = projects.filter('.hidden');
			return hiddenProjects;
		},


		/**
		 * Finds the visible projects by the filtering of tags
		 *
		 */
		visibleProjects: function () {
			var projects = this.projectsCont.find('.grid-project'),
				visibleProjects = projects.filter(':not(.hidden)');
			return visibleProjects;
		},


		/**
		 * Highlight the selected project in the list view and
		 * move to the position of that item in the DOM
		 *
		 */
		highlightProject: function (num) {

			if (num !== false) {
				num = num || null;
			}

			this.projectsCont
				.find('.grid-project')
					.removeClass('current');

			if (num !== false) {
				// $(this.projectsCont.find('.grid-project')[this.selectedProject]).addClass('current');
				var visible = this.visibleProjects(),
					highlightMe = $(visible[this.selectedProject]),
					pos;
				highlightMe.addClass('current');
				this.highlightedProject = highlightMe;

				// slide to the item's position
				pos = this.highlightedProject.offset();
				this.discoSlide(pos.top, 200);
			} else {
				this.selectedProject = null;
				this.highlightedProject = false;
			}

			return this;

		},


		/**
		 * All the eventz
		 *
		 */
		_events: function () {

			var that = this,
				eventType = ('createTouch' in document ? 'touchstart' : 'click');

			// we don' want touch events on the actual selection
			// of the project items
			$(document).on('click', '.grid-project', function (evt) {
				evt.preventDefault();
				var filter = evt.target.getAttribute('data-filter');
				// only open a project if we haven't clicked on a
				// filter-tag with the project
				if (typeof filter !== 'string') {
					that.openProject(this.getAttribute('data-slug'));
				}
			});

			this.detailCont.on(eventType, '[rel="next"], [rel="prev"]', function (evt) {
				evt.preventDefault();
				that.openProject(this.getAttribute('data-slug'));
			});

			// or switching between views
			$(window).on(eventType, '[data-get]', function (evt) {
				evt.preventDefault();
				var what = this.getAttribute('data-get'),
					hash = this.getAttribute('data-hash');
				that.get(what, hash);
			});

			// Togglers belong to the set of icons above the list of projects
			this.togglers.on(eventType, '[data-toggle]', function (evt) {
				evt.preventDefault();
				var what = this.getAttribute('data-toggle');
				that.applyToggle(what);
			});

			// Tags apply a level of filtering for displaying projects
			$(document).on(eventType, '[data-filter]', function (evt) {
				evt.preventDefault();
				var tag = this.getAttribute('data-filter');
				// if we click the same filter twice then
				// we should deselect it
				if (tag === that.tagsCont.find('.current').attr('data-filter')) {
					that.filterProjects(false);
				} else {
					that.filterProjects(tag);
				}
			});

			// Gesture events
			/*
			$('#container').hammer({})
				.bind('swipe', function (evt) {
					if (evt.type === 'swipe') {
						// make sure we actually are trying
						// to swipe left/right
						if (Math.abs(evt.distanceX) > 180) {
							console.log('here');
							if (evt.direction === 'right') {
								if (that.current.attr('data-content') === 'detail') {
									slug = that.current.find('[rel="prev"]').attr('data-slug');
									if (slug) that.openProject(slug);
								}
							}
							if (evt.direction === 'left') {
								if (that.current.attr('data-content') === 'detail') {
									slug = that.current.find('[rel="next"]').attr('data-slug');
									if (slug) that.openProject(slug);
								}
							}
						}
					}
				});
				.bind('transform', function (evt) {
					evt.preventDefault();
					// if (evt.scale) {
					//	if (evt.scale > 1) {
					//		// console.log('zoom out');
					//		if (that.current.attr('data-content') === 'detail') {
					//			that.get('projects');
					//		}
					//	} else {
					//		console.log('zoom in');
					//	}
					// }
					if (that.current.attr('data-content') === 'detail') {
						that.get('projects');
					}
					if (that.highlightedProject) {
						that.highlightProject(false).discoSlide(0, 400);
					}
				});
			*/

			// Keyboard navigation
			document.addEventListener('keydown', function (evt) {
				var keycode = evt.keyCode || false,
					current = that.current;

				if (keycode) {

					var slug = false,
						dataContent = current.attr('data-content');

					// escape
					if (keycode === 27) {

						// remove the displayed filter tags
						if (dataContent === 'view') {
							if (!that.tagsCont.hasClass('hide')) {
								that.applyToggle('tags');
							} else if (that.projectsCont.hasClass('list')) {
								that.applyToggle('grid');
							}
						}

						// return back to the projects view if
						// viewing the detail of a project
						if (dataContent === 'detail') {
							that.get('projects');
						}

						// if (current.attr('data-content') === 'view') {
							// that.selectedProject = null;
							// that.projectsCont.find('.grid-project').removeClass('current');
						// }
						//
						if (that.highlightedProject) {
							that.highlightProject(false).discoSlide(0, 400);
						}

					}

					// tab
					if (keycode === 9) {
						if (dataContent === 'view') {
							if (that.projectsCont.hasClass('list')) {
								that.applyToggle('grid');
							} else {
								that.applyToggle('list');
							}
						} else {
							if (dataContent === 'intro') {
								that.get('projects');
							}
							if (dataContent === 'profile') {
								that.get('projects');
							}
						}
					}

					// Enter
					if (keycode === 13) {
						evt.preventDefault();
						if (that.highlightedProject) {
							that.openProject(that.highlightedProject.attr('data-slug'));
						}
					}

					// left
					if (keycode === 37) {
						if (dataContent === 'detail') {
							slug = current.find('[rel="prev"]').attr('data-slug');
							if (slug) that.openProject(slug);
						}

						/*
						if (current.attr('data-content') === 'view') {
							if (that.tagsCont.hasClass('hide') === false) {
								var filters = that.tagsCont.find('[data-filter]'),
									currentFilter = filters.filter('.current'),
									prevFilter = false;
								console.log(currentFilter);
								if (currentFilter.length) {
									prevFilter = currentFilter.prev();
									console.log(prevFilter);
								}
							}
						}
						*/

					}

					// up
					if (keycode === 38) {
						// console.log(that.current);
						if (dataContent === 'view') {
							evt.preventDefault();
							if (that.selectedProject > 0) {
								evt.preventDefault();
								that.selectedProject--;
							}
							that.highlightProject(that.selectedProject);
						}
					}

					// right
					if (keycode === 39) {
						if (dataContent === 'detail') {
							slug = current.find('[rel="next"]').attr('data-slug');
							if (slug) that.openProject(slug);
						}
					}

					// down
					if (keycode === 40) {
						if (dataContent === 'view') {
							evt.preventDefault();

							if (typeof that.selectedProject !== 'number') {
								that.selectedProject = 0;
							} else if (that.selectedProject < that.numProjects - 1) {
								that.selectedProject++;
							}

							that.highlightProject(that.selectedProject);

						}
					}

				}
			});


			// Read the query string when the history state has changed
			if (Modernizr.history) {
				window.onpopstate = function (evt) {
					if (window.location.search.indexOf('?') != -1) {
						that.parseQuery();
					} else {
						that.switchView(false, that.viewCont);
					}
				};
			}

		},


		_setup: function (args) {

			args = args || {};

			this.portfolio = args.portfolio;

			// Cached DOM elements here
			this.viewCont = args.viewCont;
			this.detailCont = args.detailCont;
			this.projectsCont =  args.projectsCont;
			this.profileCont =  args.profileCont;
			this.introCont =  args.introCont;
			this.tagsCont = args.tagsCont;
			this.togglers = args.togglers;
			this.navLinks = args.navLinks;
			this.loader = args.loader;

			this.logo = args.logo;

			this.eventType = args.eventType;

			// initially hide the list of tags/filters
			this.tagsCont.toggleClass('hide');

			this.numProjects = this.portfolio.projects.length;

			// for keyboard navigation
			this.selectedProject = null;
			this.highlightedProject = null;

			this.selectedFilter = false;

		}

	};

	return portfolio;

};
