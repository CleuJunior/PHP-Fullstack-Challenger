<?php

/*
 * Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual ou
 * quais número(s) não se repetiram.
 *
 * Exemplo
 * Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
 * Os números que não se repetem são o 4, 7 e 9.
 */


function not_repeat(array $int_array) :array
{
    $set_array_count = array_count_values($int_array);
    $return_value_array = array();

    foreach ($set_array_count as $key => $value) {
        if($value == 1)  $return_value_array[] = $key;
    }

    sort($return_value_array);
    return $return_value_array;
}

$array_valueOne = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1];
$array_valueTwo = [2,2,2,2,2,2,2,2,2,2,3,4,6];
print_r(not_repeat($array_valueOne));
print_r(not_repeat($array_valueTwo));