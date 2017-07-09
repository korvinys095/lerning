<?php
//Используя массив из задания "1 a", вывести строку: "I like Apple, Banana, Carrot, Pear, Potato."
$array_a = array("Apple", "Banana", "Carrot", "Pear", "Potato");
echo 'I like ' .  implode(',',$array_a) . '.';