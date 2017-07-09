<?php
//Используя цикл, выведите на экран все значения массива из задания “2”.
$array_a = ["Apple", "Banana", "Carrot", "Pear", "Potato"];
unset($array_a[3]);
unset($array_a[4]);
$array_a[] = "Apricot";
foreach ($array_a as $value) {
    echo $value . "<br/>";
};