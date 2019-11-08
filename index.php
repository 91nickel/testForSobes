<?php
//echo 'Hello World';

$paragraph = array('1.', '2.', '3.', array('3.1.', '3.2.', '3.3.', array('3.3.1.', '3.3.2.', '3.3.3.')), '4.', '5.', array('5.1', '5.2'));

function printer($array, $int = '', $nomer = '')
{
    $printKey = 0;
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            printer($value, $int . "-", $nomer . $printKey . '.');
        } else {
            $printKey++;
            echo $int . $nomer . $printKey . '. ' . $value . '<br/>';
        }
    }
}

printer($paragraph);


function programmistPrinter($value)
{
    /*
    $word = 'программист';
    $wordOver = '';

    $arResult = str_split($value, 1);
    $lastInt = $arResult[count($arResult) - 1];
    $preLastInt = $value > 9 ? $arResult[count($arResult) - 2] : 0;

    if ($lastInt > 1 && $lastInt < 5 && $preLastInt != 1) {
        $wordOver = 'а';
    } else {
        $wordOver = 'ов';
    }
    if ($lastInt == 1 && $preLastInt == 0) {
        $wordOver = '';
    }

    echo $value . ' ' . $word . $wordOver . '<br/>';
    */

    $word = 'программист';
    $wordOver = '';

    $intResult = $value % 10;

    if ($intResult > 1 && $intResult < 5) {
        $wordOver = 'а';
    }
    if ($intResult > 4 || $value % 100 > 10 && $value % 100 < 15) {
        $wordOver = 'ов';
    }
    echo $value . ' ' . $word . $wordOver . '<br/>';
}

programmistPrinter(1);
programmistPrinter(2);
programmistPrinter(3);
programmistPrinter(4);
programmistPrinter(5);
programmistPrinter(11);
programmistPrinter(12);
programmistPrinter(121);
programmistPrinter(122);
programmistPrinter(123);
programmistPrinter(124);
programmistPrinter(125);
programmistPrinter(126);
programmistPrinter(127);
programmistPrinter(128);
