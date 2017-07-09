<?php
//Соедините данные в массивы в один и вывести его на экран
$array_a = ['Pear', 'red' => 'Apple', 'Banana'] ;
$array_b = ['Carrot', 'Potato', 'red' => 'Strawberry'];
$array_c = array_merge($array_a, $array_b);
print_r($array_c);