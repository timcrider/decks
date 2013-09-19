<?php

require_once 'common.php';

$start = memory_get_usage();
$x = range(1,1000000);
$end = memory_get_usage();
print convert($end - $start)."\n";
//print convert($b)."\n";
