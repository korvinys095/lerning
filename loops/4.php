<?php
//Найти сумму чисел фибоначи, при условии, что на последней итерации число будет равно 610.
// Выполнить задачу с помощью циклов for, while, do while.
echo 'Используем цикл FOR</br>';
$b = 1;
$summ = 0;
for ($a = 0; $a <= 610;) {
    $summ = $summ + $a;
    echo $a . ' ';
    $c = $a + $b;
    $a = $b;
    $b = $c;
};
echo '</br> Сумма равна ' . $summ . ' ';
echo '</br></br>';
echo 'Используем цикл while</br>';
$b = 1;
$summ = 0;
$a = 0;
while ($a<=610){
    $summ = $summ + $a;
    echo $a . ' ';
    $c = $a + $b;
    $a = $b;
    $b = $c;
}
echo '</br> Сумма равна ' . $summ . ' ';
echo '</br></br>';
echo 'Используем цикл do while</br>';
$b = 1;
$summ = 0;
$a = 0;
do {
    $summ = $summ + $a;
    echo $a . ' ';
    $c = $a + $b;
    $a = $b;
    $b = $c;
} while ($a<=610);
echo '</br> Сумма равна ' . $summ . ' ';