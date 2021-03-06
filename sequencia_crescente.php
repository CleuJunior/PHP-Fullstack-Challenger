<?php

/*
 * Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia
 * crescente removendo apenas um elemento do array.
 *
 * Exemplos para teste
 *
 * Obs.:-  É Importante realizar todos os testes abaixo para garantir o funcionamento correto.
 *          -  Sequencias com apenas um elemento são consideradas como TRUE
 *
 * [1, 3, 2, 1]  false
 * [1, 3, 2]  true
 * [1, 2, 1, 2]  false
 * [3, 6, 5, 8, 10, 20, 15] false
 * [1, 1, 2, 3, 4, 4] false
 * [1, 4, 10, 4, 2] false
 * [10, 1, 2, 3, 4, 5] true
 * [1, 1, 1, 2, 3] false
 * [0, -2, 5, 6] true
 * [1, 2, 3, 4, 5, 3, 5, 6] false
 * [40, 50, 60, 10, 20, 30] false
 * [1, 1] true
 * [1, 2, 5, 3, 5] true
 * [1, 2, 5, 5, 5] false
 * [10, 1, 2, 3, 4, 5, 6, 1] false
 * [1, 2, 3, 4, 3, 6] true
 * [1, 2, 3, 4, 99, 5, 6] true
 * [123, -17, -5, 1, 2, 3, 12, 43, 45] true
 * [3, 5, 67, 98, 3] true
 */

function is_increasing(array $int_array) :bool
{
    if(count($int_array) == 2) return true;


    for ($i = 0; $i < count($int_array); $i++) {
        $new_array_value = $int_array;

        unset($new_array_value[$i]);

        $sorted_array_values = array_unique($new_array_value);
        sort($sorted_array_values);

        if($new_array_value === $sorted_array_values) return true;
    }

    return false;
}

var_dump(is_increasing([1, 3, 2, 1]));
var_dump(is_increasing([1, 3, 2]));
var_dump(is_increasing([1, 2, 1, 2]));
var_dump(is_increasing([3, 6, 5, 8, 10, 20, 15]));
