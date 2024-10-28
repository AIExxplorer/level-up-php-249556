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

$joe = new Person('Joe', '1985-10-20');
$erin = new Person('Erin', '1991-08-28');
$teresa = new Person('Teresa', '2017-03-06');
$lou = new Person('Lou', '2020-07-12');

echo $joe->get_name() . ' is ' . $joe->get_age() . '<br/>';
echo $erin->get_name() . ' is ' . $erin->get_age() . '<br/>';
echo $teresa->get_name() . ' is ' . $teresa->get_age() . '<br/>';
echo $lou->get_name() . ' is ' . $lou->get_age();

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