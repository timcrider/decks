<?php

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

function pass($a) {
	return $a;
}

print_r(array_column($a, 'first_name'));
print_r(array_column($a, 'first_name', 'id'));
print_r(pass($a)[1]);

// Madlibs
// adj, noun, verb
$b = [
	["red", "car", "drives"],
	["old", "book", "opens"]
];

foreach ($b AS list($adj, $noun, $verb)) {
	print "The $adj $noun $verb\n";
}
