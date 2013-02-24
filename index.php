<? include('config.php'); ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">

	<title>Studio Brewer</title>

	<meta name="robots" content="all">

	<link type="text/plain" rel="author" href="humans.txt" />

	<meta name="description" content="Online showcase of designer, art director and illustrator Jake Brewer">
	<meta name="keywords" content="design, digital, art, illustration, interface, interactive, web design, interactive design, digital design, concept design, graphic design, art direction">

	<meta property="og:title" content="Studio Brewer"/>
	<meta property="og:type" content="Portfolio"/>
	<meta property="og:image" content="assets/img/sb_logo_alt.png"/>
	<meta property="og:description" content="Online showcase of designer, art director and illustrator Jake Brewer"/>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
	<link href="assets/css/core.css" rel="stylesheet" type='text/css'>

	<script src="/script.php?file=assets/js/libs/modernizr.custom.77287.min.js"></script>

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-2461161-4']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<? include('templates.php'); ?>

</head>
<body data-base-url="<?= $_SERVER['HTTP_HOST'] ?>">

	<img id="loader" src="assets/img/loading.gif" alt="loading&hellip;">

	<div id="wrapper" class="cf">

		<header id="header" class="cf">

			<a href="/" id="logo" class="resp-img animate">
				<img src="assets/img/sb_logo_alt.png" alt="Studio Brewer">
				<i class="logo-under"></i>
			</a>
			<nav id="navigation" class="cf">
				<ul>
					<li class="nav-item"><a data-get="projects" class="nav-link" href="?view=projects">Projects</a></li>
					<li class="nav-item"><a data-get="profile" class="nav-link" href="?view=profile">Profile</a></li>
					<li class="nav-item"><a data-get="profile" data-hash="contact" class="nav-link" href="?view=profile">Contact</a></li>
				</ul>
			</nav>
		</header>

		<div id="container" class="cf">

			<section data-content="intro"></section>

			<section data-content="profile"></section>

			<section data-content="detail" id="detail"></section>

			<section data-content="view" id="content">

				<div class="inner">

					<nav id="togglers">
						<ul>
							<!-- <li class="toggler-item"><a data-toggle="grid" class="current typicn grid" href=""></a></li> -->
							<li class="toggler-item"><a data-toggle="grid" class="current icon icon-grid" href="#!/projects"></a></li>
							<li class="toggler-item"><a data-toggle="list" class="icon icon-list" href="#!/projects-list">list</a></li>
							<li class="toggler-item"><a data-toggle="tags" class="icon icon-tag" href="#!/filters">tags</a></li>
						</ul>
						<div id="tag-filters" data-contains="tags">
							<ul data-content="tags" class="tag-list"></ul>
						</div>
					</nav>

					<section class="structure cf" data-content="projects"></section>

				</div>

			</section>
		</div>

	</div>

	<script src="/script.php?file=assets/js/script.min.js"></script>

</body>
<!--
	          ___
            ,--.'|_                     ,---,  ,--,             ,---,
            |  | :,'          ,--,    ,---.'|,--.'|    ,---.  ,---.'|     __  ,-.                 .---.            __  ,-.
  .--.--.   :  : ' :        ,'_ /|    |   | :|  |,    '   ,'\ |   | :   ,' ,'/ /|                /. ./|          ,' ,'/ /|
 /  /    '.;__,'  /    .--. |  | :    |   | |`--'_   /   /   |:   : :   '  | |' | ,---.       .-'-. ' |   ,---.  '  | |' |
|  :  /`./|  |   |   ,'_ /| :  . |  ,--.__| |,' ,'| .   ; ,. ::     |,-.|  |   ,'/     \     /___/ \: |  /     \ |  |   ,'
|  :  ;_  :__,'| :   |  ' | |  . . /   ,'   |'  | | '   | |: :|   : '  |'  :  / /    /  | .-'.. '   ' . /    /  |'  :  /
 \  \    `. '  : |__ |  | ' |  | |.   '  /  ||  | : '   | .; :|   |  / :|  | ' .    ' / |/___/ \:     '.    ' / ||  | '
  `----.   \|  | '.'|:  | : ;  ; |'   ; |:  |'  : |_|   :    |'   : |: |;  : | '   ;   /|.   \  ' .\   '   ;   /|;  : |
 /  /`--'  /;  :    ;'  :  `--'   \   | '/  '|  | '.'\   \  / |   | '/ :|  , ; '   |  / | \   \   ' \ |'   |  / ||  , ;
'--'.     / |  ,   / :  ,      .-./   :    :|;  :    ;`----'  |   :    | ---'  |   :    |  \   \  |--" |   :    | ---'
  `--'---'   ---`-'   `--`----'    \   \  /  |  ,   /         /    \  /         \   \  /    \   \ |     \   \  /
                                    `----'    ---`-'          `-'----'           `----'      '---"       `----'

-->
</html>
