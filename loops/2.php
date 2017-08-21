<?php
//Вывести 10 раз фразу "Noveo. Internship - 2016" с помощью всех перечисленных видов циклов.
// (Не забывайте переводить вывод на новую строку, перед очередной итерацией).
echo 'С использованием цикла for</br>';
for($i=1; $i<=10; $i++){
    echo 'Noveo. Internship - 2016</br>';
};
echo 'С использованием цикла while</br>';
$i=0;
while (true){
    echo 'Noveo. Internship - 2016</br>';
    $i++;
    if ($i==10){
        break;
    }
}
echo 'С использованием цикла do ... while</br>';
$i=0;
do {
    echo 'Noveo. Internship - 2016</br>';
    $i++;
}while($i<10);