<?php
//Отсортировать массив случайных чисел по возрастанию. Не используя функцию сортировки массивов.
$size = rand(2, 20);
for ($i = 0; $i < $size; $i++) {
    $array[] = rand(0, 100);
};
print_r($array);
echo '</br>';
for ($i = 0; $i < $size - 1; $i++) {
    for ($j = 0; $j < $size - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j + 1];
            $array[$j + 1] = $array[$j];
            $array[$j] = $temp;
        };
    };
};
print_r($array);