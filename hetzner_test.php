<?php

$rows = 1;
$cols = 1;
$maxSize = 65;
$count = 1;

do {

	$color = ($cols + $rows) % 2 == 0 ? "B " : "W ";
	echo $color;

	$cols ++;
	if ($count % 8 == 0) {
		echo "\n";
		$cols = 1;
		$rows ++;
	}

	$count ++;

} while ($count < $maxSize);
