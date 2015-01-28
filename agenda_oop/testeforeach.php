<?php
$a = array();

$a[0][0] = "a";

$a[0][1] = "b";

$a[1][0] = "y";

$a[1][1] = "z";



foreach ($a as $v1) {


	foreach ($v1 as $v2) {


		echo "$v2\n";
	}
}



$arr = array("one", "two", "three");
reset($arr);
while (list($key, $value) = each ($arr)) {
	echo "Chave: $key; Valor: $value<br />\n";
}

foreach ($arr as $key => $value) {
echo "Chave: $key; Valor: $value<br />\n";
}


<?
foreach($frutas as $tipo => $frutastipo)
{
	echo "<br>O TIPO DE FRUTA E: ".$tipo."<br>";
	foreach($frutastipo as $fruta)
	{
		echo "A fruta e: ". $fruta."<br>";
	}
}
/*
 RESULTADO DO FOREACH
O TIPO DE FRUTA E: vermelhas
A fruta e: maca
A fruta e: melancia
O TIPO DE FRUTA E: amarelas
A fruta e: banana
A fruta e: melao
A fruta e: abacaxi
O TIPO DE FRUTA E: verdes
A fruta e: pera
A fruta e: limao
A fruta e: abacate
*/


?>