<?php 
function Sum($nbs) : float {
	$sum = 0;
	foreach ($nbs as $i => $n) {
		$sum += $n;
	}
	return $sum;
}

function Sex($nbs) {
	return max($nbs);
}

echo Sum([10, 20, 5]);
echo Sex([10,5, 30]);