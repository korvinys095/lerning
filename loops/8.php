<?php
//Бонус: Вывести на экран все шестизначные счастливые билеты. Билет называется счастливым, если сумма первых трех цифр
// в номере билета равна сумме последних трех цифр. Найдите количество счастливых билетов
// и процент от общего числа билетов.
$d = 0;
$e = 0;
for ($a = 100000; $a <1000000;){
    $d++;
    $b = substr($a, 0, 3);
    $c = substr($a, 3);
    $b1 = array_sum(str_split($b));
    $c1 = array_sum(str_split($c));
    if ($b1 = $c1){
        echo $a . "<br/>";
        $e++;
    }
    $a++;
}
echo "Всего счастливых билетов " . $e . " что составляет " . ($e/$d)*100 . "% от общего числа.";