<?php

function getEmpty() {
	return [];
}

function getSomething() {
	return [1];
}


if (empty($x = getEmpty())) {
	print "yes\n";
}

if (!empty($x = getSomething())) {
	print "yes\n";
}
