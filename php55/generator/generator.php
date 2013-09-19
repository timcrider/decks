<?php

require_once 'common.php';

function xrange($start, $limit, $step = 1) {
    if ($start < $limit) {
        if ($step <= 0) {
            throw new LogicException('Step must be +ve');
        }

        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('Step must be -ve');
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}

$start = memory_get_usage();
$x = xrange(1,1000000);
$end = memory_get_usage();
print convert($end - $start)."\n";
//print convert($b)."\n";
