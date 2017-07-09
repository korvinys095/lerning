<?php
//Дан массив: ['New York', 'Dallas', 'Boston', 'Washington', 'Los-Angeles']. Отсортируйте массив в порядке убывания
//и в порядке возрастания, используйте функцию сортировки массива.
$array = ['New York', 'Dallas', 'Boston', 'Washington', 'Los-Angeles'];
sort($array);
print_r($array);
echo '<br/>';
rsort($array);
print_r($array);