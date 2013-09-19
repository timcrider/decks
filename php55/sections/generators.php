				<!-- 
				 GENERATORS
				-->
				<section>
					<h3>Generators</h3>
					<p> Generators provide an easy way to implement simple iterators without the overhead or complexity of implementing a class that implements the Iterator interface.</p>
				</section>
				
				<section>
					<h3>Generators Simplified</h3>
					<p>Allows you to create simple and lightweight loopable data. Rather than load the entire data into memory,
					a generator allows you to step by the data piece by piece.</p>
				</section>

				<section>
					<h3>The Pros and Cons</h3>
					<ul>
						<li>PRO: simplicity over Iterator (SPL) class</li>
						<li>PRO: code is more readable</li>
						<li>PRO: data does not need an array in memory</li>
						<li>CON: cannot be used multiple times ( call again or use clone)</li>
						<li>CON: forward only / no rewind</li>
					</ul>
				</section>

				<section>
					<h3>Introducting Yield</h3>
					<pre><code data-trim contenteditable class="php">
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}

/** Outputs
1
2
3
*/
					</code></pre>
					<p><small>http://www.php.net/manual/en/language.generators.syntax.php</small></p>
				</section>


				<section>
					<h3>Memory Comparison</h3>
					<ul>
						<li>Count to 1,000,000</li>
						<li>Memory used for range(1, 1000000) is <strong>137.7 MB</strong></li>
						<li>Memory used for xrange(1, 1000000) is <strong>1.48 KB</strong></li>
					</ul>
					<p></p>
					<p><small>http://www.php.net/manual/en/language.generators.overview.php</small></p>
				</section>
