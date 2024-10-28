<?php

function check_capacity($capacity, $attendees = 0)
{
	// Verifica se o número de participantes é menor ou igual à capacidade
	if ($attendees < $capacity) {
		return 'Open';
	} elseif ($attendees == $capacity) {
		return 'Full';
	} else {
		return 'Over capacity';
	}
}

// Array: key => [capacity, attendees];
$venues = array(
	'Cantina' => [100, 20], //Droids not included.
	'Dorsia' => [74, 74],
	'The Max' => [98, 100],
	'MacLaren\'s' => [53, 127],
	'The Banana Stand' => [2, 0],
);

foreach ($venues as $name => $numbers) {
	echo $name . ' - ' . check_capacity($numbers[0], $numbers[1]) . '<br/>';
}
