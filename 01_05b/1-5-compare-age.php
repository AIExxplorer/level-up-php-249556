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
	// Compara as idades de duas pessoas
	$age1 = $p1->get_age();
	$age2 = $p2->get_age();

	if ($age1 > $age2) {
		return $p1->get_name() . ' is older than ' . $p2->get_name();
	} elseif ($age1 < $age2) {
		return $p1->get_name() . ' is younger than ' . $p2->get_name();
	} else {
		return $p1->get_name() . ' and ' . $p2->get_name() . ' are the same age';
	}
}

$joe = new Person('Joe', '1985-10-20');
$phil = new Person('Phil', '1987-07-12');
$erin = new Person('Erin', '1991-08-28');
$teresa = new Person('Teresa', '2017-03-06');
$mike = new Person('Mike', '1989-04-07');
$lou = new Person('Lou', '2020-07-12');
$rob = new Person('Rob', '1990-12-16');
$louis = new Person('Louis', '1952-05-20');
$marie = new Person('Marie', '1956-05-25');
$rose = new Person('Rose', '1985-10-20');

echo compare_ages($joe, $erin) . '<br/>';
echo compare_ages($joe, $rose) . '<br/>';
echo compare_ages($lou, $teresa) . '<br/>';

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