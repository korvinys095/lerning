<?php
//Переменная item может иметь следующие значения: (кошка, собака, крокодил, слон, бобр, конь, выхухоль, стол, стул ,
// диван, кровать, кресло, бра, ящик). Вывести “animal” если item - животное, “furniture” если item предмет
// интерьера и “unknown” в других случаях.
$array = ["кошка", "собака", "крокодил", "слон", "бобр", "конь", "выхухоль", "стол", "стул", "диван", "кровать", "кресло",
    "бра", "ящик"];
print_r($array); //вывод массива для удобства проверки
echo "<br/>";
$i = array_rand($array);
echo $i . "<br/>"; //вывод случайного ключа массива
$item = $array[$i];
echo "<br/>";
echo $item . "<br/>";
if ($i >= 0 and $i <= 6) {
    echo "animal";
} elseif ($i > 6 and $i <= 12) {
    echo "furniture";
} else {
    echo "unknown";
};