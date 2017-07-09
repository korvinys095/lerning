<?php
//Используя массив задания “1 e”, для каждого элемента вывести на экран строку: "{Фрукт} is colored {цвет}."
$array_a = ['red' => 'Apple', 'yellow' => 'Banana', 'orange' => 'Orange'];
foreach ($array_a as $key => $value) {
    echo "\"" . $value . " is colored " . $key . ".\"<br/>";
};