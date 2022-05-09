<?php

/* Crie uma função que receba como parâmetro 2 números inteiros (inicial e final) e retorne um array com os números primos
 * estão compreendidos entre o valor inicial e o final, desprezando o número inicial e final recebidos como parâmetro.

 * Exemplo para teste:

 * Numero Inicial = 10
 * Número Final = 29
 * Resposta: Array [11,13,17,19,23]
 */


/*
 * Check if a number is a prime number
 * Take as integer as argument
 * Return true or false
 */
function is_prime(int $number) : bool
{
    for ($i = 2; $i < $number; $i++) {
        if(fmod($number , $i) == 0) return false;
    }

    return true;
}

function primeArray(int $start, int $final) :array
{
    $list_of_primes = array();

    for ($i = ($start+1); $i < $final; $i++) {
        if(is_prime($i)) $list_of_primes[] = $i;
    }

    return $list_of_primes;
}


var_dump(primeArray(10, 29));