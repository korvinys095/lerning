<?php
//Написать алгоритм построения таблицы сложения / умножения чисел от 1 до 9. Для реализации разрешается использовать операторы цикла for.
echo "<table border=1px>";
for ($a = 1; $a <= 9;){
    echo "<tr>";
    for ($b = 1; $b <= 9;){
        echo "<td>" . $a*$b . "</td>";
        $b++;
    }
    $a++;
    echo "</tr>";
}
echo "</table>";