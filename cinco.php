<?php
$pessoa['nome'] = 'Maria da Silva';
$pessoa['rua'] = 'São João';
$pessoa['bairro'] = 'Bairro lindo da cidade';
$pessoa['cidade'] = 'Uma cidade';

foreach ($pessoa as $dados) {
	echo $dados;
	echo "<br>";
}
?>
