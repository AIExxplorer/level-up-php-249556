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

function flip()
{
	// Gera um valor aleatório: cara ou coroa
	return rand(0, 1) ? 'Heads' : 'Tails';
}

class Person
{
	private $name;
	private $dob;

	function __construct($name, $dob)
	{
		$this->name = $name;
		$this->dob = $dob;
	}

	public function get_name()
	{
		return $this->name;
	}

	public function get_dob()
	{
		return $this->dob;
	}

	public function get_age()
	{
		// Calcula a idade com base na data de nascimento
		$dob = new DateTime($this->dob);
		$today = new DateTime();
		$age = $today->diff($dob);
		return $age->y;
	}
}

function compare_ages($p1, $p2)
{
	// Refatorada para ser usada com usort
	return $p1->get_age() <=> $p2->get_age();
}

function print_array($a)
{
	echo '<pre>';
	var_dump($a);
	echo '</pre>';
}

$joe = new Person('Joe', '2010-10-20');
$phil = new Person('Phil', '2012-07-12');
$erin = new Person('Erin', '2009-08-28');
$teresa = new Person('Teresa', '2017-03-06');
$mike = new Person('Mike', '2005-04-07');
$lou = new Person('Lou', '2010-07-12');
$rob = new Person('Rob', '2003-12-16');
$louis = new Person('Louis', '2004-05-20');
$marie = new Person('Marie', '2010-05-25');
$bob = new Person('Bob', '2007-01-07');
$alice = new Person('Alice', '2015-11-13');
$jane = new Person('Jane', '2016-12-16');
$john = new Person('John', '2007-04-30');
$carl = new Person('Carl', '2010-03-25');

$people = [$joe, $phil, $erin, $alice, $bob, $carl, $jane, $john, $lou, $louis, $marie, $mike, $rob, $teresa];

// Ordena o array de pessoas por idade
usort($people, 'compare_ages');

// Print Results
print_array($people);

?>

<style>
	.coin {
		background: #999999;
		color: #333333;
		border-radius: 50%;
		padding: 50px;
		text-align: center;
		font-size: 2rem;
		font-weight: bold;
		width: 50px;
	}
</style>

<div class="coin">
	<?php echo flip(); ?>
</div>