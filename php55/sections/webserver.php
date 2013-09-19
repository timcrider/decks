<!--
Web Server
-->
<section>
	<h3>PHP Built In Webserver</h3>
	<ul>
		<li>Yes, this is technically in PHP 5.4, but it's still worth mentioning</li>
		<li>Allows you to serve a php site/script without the need for an external webserver (apache/nginx)</li>
		<li>Great for quick testing</li>
		<li>Would not suggest running in production</li>
	</ul>
</section>

<section>
	<h3>PHP Web Server Example</h3>
	<pre><code data-trim contenteditable class="php">
// Start a webserver on port 8080
php -S 0.0.0.0:8080 -t /var/www/html/arrays/www/

// Start a webserver on port 8080, but use the index.php script as the router
php -S 0.0.0.0:8080 -t /var/www/html/arrays/www/ index.php
	</code></pre>
</section>
