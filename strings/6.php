<?php
//Заменить строку 'apple' на 'orange' в строках:
$search = array('apple','Apple');
$replace = array('orange','Orange');
$values = array("I like an apple.","Apple is a fruit.");
foreach ($values as $phrase){
    $newphrase = str_replace($search,$replace,$phrase);
    echo "$newphrase <br/>";
};
?>