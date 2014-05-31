<script id="ichGrid" type="text/html">
	<div class="cf">
		{{# projects }}{{> ichGridProject }}{{/ projects }}
	</div>
	<? include("contact.php"); ?>
</script>

<script id="ichGridProject" type="text/html">
	<article class="grid-project" data-slug="{{ slug }}" data-tags="{{# tags }}{{ . }} {{/ tags }}">
		<figure class="resp-img">
			<img src="{{ thumb }}" alt="{{ title }}" />
		</figure>
		<footer class="grid-details">
			<h2 class="grid-title">{{ title }}</h2>
			<span class="grid-dash">&mdash;</span>
			<p class="grid-client">{{ client }}</p>
			<ul class="grid-tags">
				{{# tags }}
					<a href="#" data-filter="{{ . }}" class="grid-tag">{{ . }}</a>
				{{/ tags }}
			</ul>
		</footer>
		<aside class="grid-meta">
			<time class="grid-date" datatime="{{ date }}">{{ date }}</time>
		</aside>
		<div class="bg-block" style="background-image: url({{ greyBg }});"></div>
	</article>
</script>

<script id="ichFilter" type="text/html">
	<li><a data-filter="false" class="tag-link" href="?filter=none">reset</a></li>
	{{# tags }}
		<li><a data-filter="{{ . }}" class="tag-link" href="?filter={{ . }}">{{ . }}</a></li>
	{{/ tags }}
</script>

<script id="ichProjectDetail" type="text/html">
	<div data-slug="{{ project.slug }}">
		<nav class="detail-topnav">
			<ul class="detail-return">
				<li><a data-get="projects" class="icon icon-grid" href="?view=projects">return</a></li>
			</ul>
			<ul class="detail-pagination">
				<li>{{# next }}<a data-slug="{{ next.slug }}" class="icon icon-next" rel="next" href="?project={{ next.slug }}" title="{{ next.title }}">Next Project</a>{{/ next }}</li>
				<li>{{# prev }}<a data-slug="{{ prev.slug }}" class="icon icon-prev" rel="prev" href="?project={{ prev.slug }}" title="{{ prev.title }}">Previous Project</a>{{/ prev }}</li>
			</ul>
		</nav>
		<article class="detail-article">
			<header class="detail-header">
				<h1 class="detail-title">{{ project.title }}</h1>
				<h2 class="detail-client">{{ project.client }}</h2>
				{{# project.date }}<p>{{& project.date }}</p>{{/ project.date }}
			</header>
			<section class="detail-info cf">
				<div class="detail-description">
					{{& project.description }}
				</div>
			</section>
			<? /*
				<div class="detail-supporting">
					{{# project.role }}<span title="Role" class="detail-support-item">{{& project.role }}</span> {{/ project.role }}
					{{# project.creativeDirector }}<span title="Creative Director" class="detail-support-item">{{& project.creativeDirector }} </span>{{/ project.creativeDirector }}
					{{# project.agency }}<span title="Agency" class="detail-support-item">Produced at {{& project.agency }} </span>{{/ project.agency }}
					{{# project.developer }}<span title="Developer" class="detail-support-item">Developed by {{& project.developer }} </span>{{/ project.developer }}
					{{# project.link }}<span title="Website" class="detail-support-item">{{& project.link }}</span> {{/ project.link }}
				</div>
			*/ ?>
			<div class="detail-images">
				{{# project.images }}
					<div class="resp-img">
						<img src="{{ url }}" alt="{{ alt }}">
						<p class="detail-images-desc">{{ desc }}</p>
					</div>
				{{/ project.images }}
			</div>
		</article>
	</div>
	<? include("contact.php"); ?>
</script>

<script id="ichProfile" type="text/html">
	<article id="profile">
		<section class="profile-frame cf bg-dark">
			<div id="about">
				<h2 class="section-title">The Story</h2>
				<article class="double-stream">
					<? // <div class="profile-hero"> ?>
						<p>{{& about.heroCopy }}</p>
					<? //</div> ?>
					<div>
						<p>{{& about.copy }}</p>
					</div>
				</article>
			</div>
		</section>
		<section class="profile-frame bg-light">
			<div id="details" class="cf">
				<h2 class="section-title">The Details</h2>
				<article class="half">
					<h3 class="subsection-title">What I do</h3>
					<ul class="double-stream">
						{{# what.items }}
							<li>{{& . }}</li>
						{{/ what.items }}
					</ul>
				</article>
				<article class="half">
					<h3 class="subsection-title">Selected Clients</h3>
					<ul class="double-stream">
						{{# clients.items }}
							<li>{{& . }}</li>
						{{/ clients.items }}
					</ul>
				</article>
			</div>
		</section>
		<? include("contact.php"); ?>
	</article>
</script>

<script id="ichIntro" type="text/html">
	<article id="intro">
		<section class="profile-frame cf bg-dark">
			<div id="thestory">
				<h2 class="section-title">The Story</h2>
				<article class="profile-hero">
					<p>{{& profile.about.introCopy }}</p>
				</article>
				<p class="readmore"><a data-get="profile" href="?view=profile">Tell me more</a></p>
			</div>
		</section>
		<section class="profile-frame cf bg-light">
			<div id="thework" class="structure">
				<h2 class="section-title">Featured Projects</h2>
				<div>
					{{# projects }}
						{{# feature }}{{> ichGridProject }}{{/ feature }}
					{{/ projects }}
				</div>
				<p class="readmore"><a data-get="projects" href="?view=projects">Show me more</a></p>
			</div>
		</section>
		<? include("contact.php"); ?>
	</article>
</script>
