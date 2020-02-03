<?php

// "1. ekrane atvazduokite teksta 'Šios dienos data - ' ir su php atvaizuokite šios dienos datą"

$string = 'Šios dienos data - ';
$date = date('Y/m/d');

$result = $string . $date;

print $result;