<?php
//Для следующих строк вычислить количество символов:
$values = array("Apple", "Hello, World!", "Здравствуй, мир!", "实识食石");
foreach ($values as  $string){
    $str = strlen($string);
    echo "strlen говорит нам, что в строке: <br/>
    $string - $str символов<br/>";
};
echo "<br/>";
foreach ($values as  $string){
    $str1 = mb_strlen($string);
    echo "mb_strlen говорит нам, что в строке:<br/>
    $string - $str1 символов<br/>";
};
?>