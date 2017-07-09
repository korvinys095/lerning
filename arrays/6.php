<?php
//Создать двумерный массив для следующих значений
$array_a = ['red' => ['Apple', 'Strawberry'], 'yelllow' => ['Banana', 'Lemon'], 'orange' => ['Orange']];
foreach ($array_a as $key => $value_1) {
    foreach ($value_1 as $value) {
        echo "\"" . $value . " is colored " . $key . ".\"<br/>";
    };
};