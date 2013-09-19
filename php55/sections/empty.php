<!--
Empty
-->
<section>
	<h3>E_NOTICE Just Got Easier</h3>
<!--
	<ul>
		<li>Function/Method calls allowed</li>
		<li>Assignments allowed</li>
	</ul>
-->
	<p></p>
	<p><small>http://php.net/manual/en/function.empty.php</small></p>	
</section>

<section>
	<h3>Function Calls Allowed</h3>
	<pre><code data-trim contenteditable class="php">
if (empty(getEmptyResult())) {
	print "Got empty result\n";
}

/**
Got empty result
*/
	</code></pre>
</section>

<section>
	<h3>Method Calls Allowed</h3>
	<pre><code data-trim contenteditable class="php">
$obj = new Something;

if (empty($obj->getEmptyResult())) {
	print "Got empty result\n";
}

/**
Got empty result
*/
	</code></pre>
</section>

<section>
	<h3>Assignments Allowed</h3>
	<pre><code data-trim contenteditable class="php">
if (empty($result = getEmptyResult())) {
	print "Got empty result\n";
}

/**
Got empty result
*/
	</code></pre>
</section>

<section>
	<h3>Still A Language Construct</h3>
	<p>Unable to use as a variable function</p>
	<pre><code data-trim contenteditable class="php">
$isEmpty = 'empty';

// This will generate E_FATAL undfined function
if ($isEmpty($someValue)) {
	
}
	</code></pre>

</section>
