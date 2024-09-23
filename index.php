<?php 
function Sum($nbs) : float {
	$sum = 0;
	foreach ($nbs as $i => $n) {
		$sum += $n;
	}
	return $sum;
}

echo Sum([10, 20, 5]);