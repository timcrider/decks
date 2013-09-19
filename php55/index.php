<?php
// http://www.sitepoint.com/whats-new-in-php-5-5/
// http://www.slideshare.net/tcorrigan1/whats-new-in-php-55
?><!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>PHP 5.5: New Feature Introduction</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="css/reveal.min.css">
		<link rel="stylesheet" href="css/theme/serif.css" id="theme">

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- If the query includes 'print-pdf', use the PDF print sheet -->
		<script>
			document.write( '<link rel="stylesheet" href="css/print/' + ( window.location.search.match( /print-pdf/gi ) ? 'pdf' : 'paper' ) + '.css" type="text/css" media="print">' );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
				<section>
					<h2>What's New In PHP 5.5</h2>
					<p>Baltimore PHP User Group: September 17, 2013</p>
					<p>Latest version at this time is: 5.5.3</p>
				</section>

				<section>
					<h2>Timothy M. Crider</h2>
					<p>Application Developer at <strong>Under Armour</strong></p>
					<p>@timcrider</p>
					<p>http://blog.timcrider.com/</p>
					<p>timcrider@gmail.com</p>
				</section>

				<section>
					<h2>What Will We Cover</h2>
					<ul>
						<li>Deprecated</li>
						<li>Generators</li>
						<li>New Array Sweetness</li>
						<li>Password Hashing</li>
						<li>Empty Goes All The Way!</li>
						<li>Opcache</p>
						<li>Finally</li>
						<li>PHP Built In Webserver</li>
					</ul>
				</section>

<?php
include "sections/deprecated.php";
include "sections/generators.php";
include "sections/arrays.php";
include "sections/passwords.php";
include "sections/empty.php";
include "sections/cache.php";
include "sections/finally.php";
include "sections/webserver.php";
?>

				<section>
					<h2>Questions?</h2>
				</section>


			</div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: 'plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
				]
			});

		</script>

	</body>
</html>
