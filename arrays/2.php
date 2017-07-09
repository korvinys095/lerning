<?php
//Используйте массив из задания “1 a”. Удалите элементы 3 и 4. Добавьте новый элемент “Apricot”.
//Выведите массив на экран
$array_a = ["Apple", "Banana", "Carrot", "Pear", "Potato"];
unset($array_a[3]);
unset($array_a[4]);
$array_a[] = "Apricot";
print_r($array_a);