				<!--
				 DEPRECATED
				-->
				<section>
					<h2>Deprecated</h2>
					<p>Saying goodbye to some old friends.</p>
				</section>
				
				<section>
					<h3>MySQL Extension</h3>
					<ul>
						<li>Served us well for many years</li>
						<li>Does not support some common functionality
							<ul>
								<li>Does not support multiple queries in a single call</li>
								<li>Does not suppuort server side prepared statements</li>
								<li>Does not support all MySQL 5.1+ functionality</li>
								<li>No OOP interface</li>
							</ul>
						</li>
						<li>Replace with <strong>MySQLi</strong> or <strong>PDO_MySQL</strong></li>
					</ul>
					<p></p>
					<p><small>http://www.php.net/manual/en/mysqlinfo.api.choosing.php</small></p>
				</section>
				
				<section>
					<h3>preg_replace <strong style="text-transform: lowercase">\e</strong> modifier</h3>
					<ul>
						<li>Poses a security risk by allowing easily injected code</li>
						<li>Replace with <strong>preg_replace_callback()</strong></li>
					</ul>
					<p></p>
					<p><small>http://www.php.net/manual/en/reference.pcre.pattern.modifiers.php</small></p>
				</section>
				
				<section>
					<h3>preg_replace Example</h3>
<pre><code data-trim contenteditable class="php">
$html = $_POST['html'];
// uppercase headings
// Old Way
$html = preg_replace(
    '(<h([1-6])>(.*?)</h\1>)e',
    '"<h$1>" . strtoupper("$2") . "</h$1>"',
    $html
);

// New Way
$html = preg_replace_callback(
    '(<h([1-6])>(.*?)</h\1>)',
    function ($m) {
        return "<h$m[1]>" . strtoupper($m[2]) . "</h$m[1]>";
    },
    $html
);
</code></pre>
				</section>

				<section>
					<h3>INTL Date Functions Renamed</h3>
					<ul>
						<li>Removed the "<strong>ID</strong>"</li>
						<li>Replace <strong>IntlDateFormatter::setTimeZoneID()</strong> with <strong>IntlDateFormatter::setTimeZone()</strong></li>
						<li>Replace <strong>datefmt_set_timezone()</strong> and <strong>datefmt_set_timezone_id()</strong></li>
					</ul>
					</ul>
				</section>

				<section>
					<h3>Some MCrypt Functions</h3>
					<ul>
						<li>mcrypt_cbc</li>
						<li>mcrypt_cfb</li>
						<li>mcrypt_ecb</li>
						<li>mcrypt_ofb</li>
					</ul>
				</section>

				<section>
					<h3>Breaking Backwards</h3>
					<ul>
						<li>Dropped support for Windows XP and 2003</li>
						<li>self, parent and static are now always case insensitive</li>
						<li>PHP logo functions removed</li>
						<li>Binary <strong>pack()</strong> and <strong>unpack()</strong> changes</li>
						<li>Few others, but most people won't run into them</li>
					</ul>
					<p></p>
					<p><small>http://www.php.net/manual/en/migration55.incompatible.php</small></p>
				</section>

				<section>
					<h3>On To The New Hotness</h3>
				</section>
