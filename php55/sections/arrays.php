<!--
ARRAYS
-->
<section>
	<h3>Array Changes</h3>
	<p>One of the most common data types gets a makeover</p>
</section>

<section>
	<h3>New Array Syntax</h3>
	<pre><code data-trim contenteditable class="php">
$a = [
	[
		'id'         => 1234,
		'first_name' => 'Tim',
		'last_name'  => 'Crider'
	],
	[
		'id'         => 5678,
		'first_name' => 'Chris',
		'last_name'  => 'Stone'
	]
];
	</code></pre>
</section>

<section>
	<h3>Array Column</h3>
	<pre><code data-trim contenteditable class="php">
print_r(array_column($a, 'first_name'));
/**
Array
(
	[0] => Tim
	[1] => Chris
)
*/

print_r(array_column($a, 'first_name', 'id'));
/**
Array
(
	[1234] => Tim
	[5678] => Chris
)
*/	
	</code></pre>
<p><small>http://php.net/array_column</small></p>
</section>


<section>
	<h3>Array Dereferencing</h3>
	<pre><code data-trim contenteditable class="php">
function getuser() {
	// Pretend to do some work and return a user record
	return [ "userid" => 1, "username" => "phpguy" ];
}

print getuser()['username']."\n";

/** 
phpguy
*/
	</code></pre>
</section>

<section>
	<h3>String Literal Dereferencing</h3>
	<pre><code data-trim contenteidtable class="php">
print "hello"[2]."\n";
/**
l
*/
	</code></pre>
</section>

<section>
	<h3>Foreach Allows List</h3>
	<pre><code data-trim contenteidtable class="php">
// Madlibs
// adj, noun, verb
$madlibs = [
    ["red", "car", "drives"],
    ["old", "book", "opens"]
];

foreach ($madlibs AS list($adj, $noun, $verb)) {
    print "The $adj $noun $verb\n";
}
/**
The red car drives
The old book opens
*/
	</code></pre>
</section>
