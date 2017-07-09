<?php
//Даны два массива: ['Pear', 'Apple'] и ['Orange']. Соедините данные в массивы в один и вывести его на экран.
$array_a = ['Pear', 'Apple'];
$array_b = ['Orange'];
$array_c = array_merge($array_a, $array_b);
print_r($array_c);