<?php
//Дан массив из десяти целых чисел. Найти количество положительных чисел в исходном наборе.
$i = 1;
$Positive = 0;
while ($i <= 10) {
    $array[] = rand(-1000, 1000);
    $i++;
};
print_r($array); //Узнаем наш массив.
echo "<br/>";
foreach ($array as $value) {
    if ($value >= 0) {
        $Positive = $Positive + 1;
    }
}
echo $Positive;