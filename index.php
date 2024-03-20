<?php
/*
 * Escribe una función que reciba dos palabras (String) y retorne
 * verdadero o falso (Bool) según sean o no anagramas.
 * - Un Anagrama consiste en formar una palabra reordenando TODAS
 *   las letras de otra palabra inicial.
 * - NO hace falta comprobar que ambas palabras existan.
 * - Dos palabras exactamente iguales no son anagrama.
 */

function esAnagrama($string_1, $string_2)
{
    $validarIgualdad = $string_1 == $string_2 ? 1 : 0;
    if (!$validarIgualdad) {
        if (count_chars($string_1, 1) == count_chars($string_2, 1)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

print_r(esAnagrama("programa", "gramapro") . "\n");
print_r(esAnagrama("card", "cart") . "\n");
print_r(esAnagrama("cart", "cart") . "\n");
?>