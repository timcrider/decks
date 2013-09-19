<?php

// Initialize bingo array
$bingo = range(1, 75);
shuffle($bingo);

function bingo($bingo) {
		switch ($i = array_pop($bingo)) {
			case ($i >= 1 && $i <= 15):
				yield "B{$i}";
				break;

			case ($i >= 16 && $i <= 30):
				yield "I{$i}";
				break;

			case ($i >= 31 && $i <= 45):
				yield "N{$i}";
				break;

			case ($i >= 46 && $i <= 60):
				yield "G{$i}";
				break;

			case ($i >= 61 && $i <= 75):
				yield "O{$i}";
				break;
		}
}


while (true) {

}

foreach (bingo($bingo) AS $cur) {
	print '<pre>';
	print_r($cur);
}

print '<pre>';
//print_r($bingo);
print_r(bingo($bingo));
exit;


shuffle($bingo);

print '<pre>';
print_r($bingo);
