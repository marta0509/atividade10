<?php 
$pacientes = array (
	'Joana'=>20,
	'Rui' =>25,
	'Ana' =>30	
);

echo 'Idade do paciente Joana ' .$pacientes['Joana'] .' anos';
echo "<br>";
foreach ($pacientes as $nome=>$idade) {
	echo 'O paciente ' .$nome. ' tem ' .$idade .' anos.<br>';
}
?>