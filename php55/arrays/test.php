<?php

function getuser() {
	// Pretend to do some work
	return [ "userid" => 1, "username" => "phpguy" ];
}

print getuser()['username']."\n";

print "hello"[2]."\n";
