<?php

/**
  *  @author Pablo Salas Gelich
  *  @version 1.0
*/

/**
 * Función que suma dos números
 *
 * @param float $num1 Primer valor a sumar
 * @param float $num2 Segundo valor a sumar
 * @return float Valor con el resultado de la suma
 */
function sumar($num1, $num2){
    return $num1 + $num2;
}

/**
 * Función que resta dos números
 *
 * @param float $num1 Primer valor a restar
 * @param float $num2 Segundo valor a restar
 * @return float Valor con el resultado de la resta
 */
function restar($num1, $num2){
    return $num1 - $num2;
}


/**
 * Función que devuelve un saludo con el nombre pasado por argumento
 *
 * @internal
 * @param string $nombre nombre que contendrá el saludo
 * @return string Cadena con el nombre y saludo.
 *
 */
function saludar($nombre){
    return "Hola $nombre!, cómo estás?";
}

echo sumar(10, 10);
echo saludar("Ana");
?>
