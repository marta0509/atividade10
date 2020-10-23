<?php
$Dados=array(2,5,10,"Maria",2.5,"Rui",8, "A",3, "B");//array com 10 posições preenchidas
echo "Valores do array: ";
for ($i=0; $i <10 ; $i++) //contador
echo $Dados[$i]. " "; //imprime todo o conteudo da array (10 posições) na horizontal
echo "<br>-------------------------------------------------------------------------";
echo "<br> Vlores da array <br>";
for($i=0; $i<10; $i++) //contador
echo $Dados[$i]. "<br>"; //imprime todo o conteudo da array (10 posições) na vertical
echo "-----------------------------------------------------------------------------";
$Dados[]=7;				//Na posição $a[11] consta agora o valor 7
$Dados[]="Carlos";		//Na posição $a[12] consta agora o a string Carlos
$Dados[1]="Pedro";		//Na posição $a[1] consta agora o a string Pedro
$Dados[4]=50;			//Na posição $a[4] consta agora o valor 50
$Dados[5]="Ruizinho";	//Na posição $a[5] consta agora o a string Ruizinho
$Dados[7]=" ";			//Apaga o conteudo da posição $a[7]
echo "Valores do array: ";
for ($i=0; $i <12 ; $i++) //contador
echo $Dados[$i]. " "; //imprime todo o conteudo da array (12 posições) na horizontal
echo "<br>";
echo "--------------------------------------------------------------------------<br>";
$Dados[2]." ";			//Imprime o conteudo da posição 2 do array, ou seja o numero 10
$Dados[5]." ";			//Imprime o conteudo da posição 5 do array, ou seja Ruizinho
$Dados[9]." ";			//Imprime o conteudo da posição 9 do array, ou seja B
echo "------------------------------------------------------------------------------";
?>