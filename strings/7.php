<?php
//Используя шаблоны, сохраненные в переменных и функцию str_replace вывести на экран следующие фразы:
$results = 10;
$string1 = "Показано $results результатов на странице.";
$string2 = "Found $results results per page.";
echo "$string1 <br/>$string2<br/><br/>";
$values = array ($string1,$string2);
foreach ($values as  $string){
    $newstring = str_replace("\$results", 10, $string);
    echo "$newstring<br/>";
}
?>