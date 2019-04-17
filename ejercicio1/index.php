<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */
for($tabla=2; $tabla<=2; $tabla++) 
{
 echo "<h3>Tabla del $tabla </h3>";
 
 for($i=1; $i<=12; $i++) 
 {
  echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
 }
}
?>