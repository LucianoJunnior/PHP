<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
    <title> Titulo </title>  
	<style> 	
	</style>

</head>

<body>
<div>
	<h1> Aula 5</h1>
	
	<?php
	$n1 = $_GET["a"];
	$n2 = $_GET["b"];
	$m = ($n1+$n2)/2;
	$soma = $n1*$n2;
	echo "<h1> <br/>$n1 e $n2</h1>";
	echo "<br/> A soma vale $soma ";
	echo "<br/> A Subtração vale ".($n1-$n2);
	echo "<br/> A Multiplicação vale ".($n1*$n2);
	echo "<br/> A Divisão vale ".($n1/$n2);
	echo "<br/> A Soma vale ".($n1+$n2);
	echo "<br/> o Modulo Vale ".($n1%$n2);
	echo "<br/> A média vale ".($m);
	echo "<br/> O valor de $n1<sup>$n2</sup> é = ".pow($n1,$n2);
	echo "<br/> A Raiz de $n1 é = ".sqrt($n1);
	echo "<br/> O valor de $n2 arrendondado é = ".round($n2);
	echo "<br/> A parte inteira de $n2 é = ".intval($n2);
	echo "<br/> O valor de $n1 em Moeda é R$ = ".number_format($n1,2,",",".");
		 
	?>
	</div>
</body>
</html>