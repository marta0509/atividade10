<?php
$minha_multa['carro'] = 'Pálio';
$minha_multa['valor'] = 178.00;
//alterações de valores

$minha_multa['carro'] .= 'ED 1.0';
$minha_multa['valor'] += 20;
//exibe o array
foreach ($minha_multa as $chave => $carro) {
	echo $chave .' = ' .$carro .'<br>';
}
echo "<br>";
$comidas[] = 'Lazanha';
$comidas[] = 'Pizza';
$comidas[] = 'Macarrão';
//alateração de valores
$comidas[1] = 'Pizza Calabreza';
//exibe o array
foreach ($comidas as $chave => $comida) {
	echo $chave .' = ' .$comida .'<br>';
}
?>