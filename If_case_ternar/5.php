<?php
//Дано целое число (от 1 до 12) представляющее порядковый номер месяца в году. Вывести на экран название этого месяца.
// Использовать оператор case.
$a = rand(1, 12);
echo $a . '<br/>';
switch ($a) {
    case 1 : {
        echo 'January';
        break;
    }
    case 2 : {
        echo 'February';
        break;
    }
    case 3 : {
        echo 'March';
        break;
    }
    case 4 : {
        echo 'April';
        break;
    }
    case 5 : {
        echo 'May';
        break;
    }
    case 6 : {
        echo 'June';
        break;
    }
    case 7 : {
        echo 'July';
        break;
    }
    case 8 : {
        echo 'August';
        break;
    }
    case 9 : {
        echo 'September';
        break;
    }
    case 10 : {
        echo 'October';
        break;
    }
    case 11 : {
        echo 'November';
        break;
    }
    default: {
        echo 'December';
    }
};