<?php

date_default_timezone_set("Europe/Brussels");
$now = date('H:i');

switch ($name) {
    case ($name>='05:00' && $name<='09:00'):
        echo 'Good morning !';
        break;
    case ($name>='09:01' && $name<='12:00'):
        echo 'Good day !';
        break;
    case ($name>='16:01' && $name<='21:00'):
        echo 'Good afternoon !';
        break;

    case ($name>='21:01' && $name<='04:59'):
        echo 'Good night !';
        break;
}

?>