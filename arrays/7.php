<?php
//Создать массив, содержащий этот элемент, дополнить массив еще двумя аналогичных элементами.
//Для каждого элемента массива вывести информацию
$array_a = [['name' => 'John', 'surname' => 'Smith', 'age' => 20]];
$array_a[] = ['name' => 'Bill', 'surname' => 'Murray', 'age' => 60];
$array_a[] = ['name' => 'Robert', 'surname' => 'Fucker', 'age' => 30];
foreach ($array_a as $person) {
    echo "Person: " . $person['name'] . " " . $person['surname'] . " (age: " . $person['age'] . ").<br/>";
};