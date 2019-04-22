<?php
/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */
$palabra = "acuifero";
$vocales = array('0' => "a", '1' => "e", '2' => "i", '3' => "o",'4' => "u" );
$separar = str_split($palabra);
//print_r($separar);
echo "<br>";
$longitud = strlen($palabra);
echo "<br>";
$contador = 0;
foreach ($separar as $posicion1 => $letra) {
	foreach ($vocales as $posicion2 => $vocal) {
		if ($separar[$posicion1] == $vocales[$posicion2]) {
			//echo "si <br>";
			$contador++;
			}else{
			//echo "no <br>";
			}
		}
			//echo "$contador <br>";
	}
if ($contador > 5) {
	echo "$palabra, tiene vocales repetidas";
} elseif ($contador == 5) {
	echo "$palabra, Si contiene las 5 vocales y su longitud es de $longitud";
} else{
	echo "$Palabra, No contiene las 5 vocales";
}
?>