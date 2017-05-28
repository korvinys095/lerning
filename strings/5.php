<?php
//Определить содержат ли следующие строки символ '@':
$needle = '@';
$values = array('example@text.com','test.example','@my_account',"test\\0x40");
foreach ($values as $haystack) {
    $pos = strripos($haystack, $needle);
    if ($pos === false) {
        echo "К сожалению, ($needle) не найдена в ($haystack)<br/><br/>";
    } else {
        echo "Поздравляем!<br/>";
        echo "Последнее вхождение ($needle) найдено в ($haystack) в позиции ($pos)<br/><br/>";
    }
}
?>