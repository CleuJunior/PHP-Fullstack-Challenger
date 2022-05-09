<?php

/*
 * Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. O primeiro
 * século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.
 *
 * Exemplos para teste:
 *
 * Ano 1905 = século 20
 * Ano 1700 = século 17
 */

function age_year(int $year) :int
{
    $result_rest = intdiv($year,  100);

    return fmod($year,  100) == 0 ? $result_rest : ceil($result_rest);

}


var_dump(age_year(1905));
var_dump(age_year(1700));