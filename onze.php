<?php
	$carros = array(
		'punto' => array(
			'cor' => 'azul',
			'potencia' => '1.0',
			'opicionais' => 'Ar Cond'
		),

		'corsa'=> array(
			'cor' => 'cinza',
			'potencia' => '1.3',
			'opicionais' => 'MP3'
		),

		'golf'=> array(
			'cor' => 'branco',
			'potencia' => '1.0',
			'opicionais' => 'Metalica'
		)
	);

	echo $carros['punto']['opicionais'];

	foreach ($carros as $modelo => $carro) {
		echo "<h1>" .$modelo. "</h1>";
		foreach ($carro as $chave => $detalhe) {
			echo "<b>" .$chave. "</b>= " .$detalhe. "<br>";
		}
	}
?>