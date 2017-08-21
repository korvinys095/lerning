<?php
//Вывести на экран текущие дату и время в Париже, Москве и Мельбурне.
date_default_timezone_set('Europe/Paris');
echo "В Париже сейчас " . date('j n Y \- G \: i ') . ".<br/>";
date_default_timezone_set('Europe/Moscow');
echo "В Москве сейчас " . date('j n Y \- G \: i ') . ".<br/>";
date_default_timezone_set('Australia/Melbourne');
echo "В Мельбурне сейчас " . date('j n Y \- G \: i ') . ".<br/>";