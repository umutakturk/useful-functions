<?php
/**
 * A factorion is an integer which is equal
 * to the sum of factorials of its digits.
 *
 * @author   KUA <http://umutakturk.com>
 * @date     October 10, 2012
 */

function factorial($number) {
    return ($number == 0) ? 1 : $number * factorial($number - 1);
}

function factorion($number) {
    settype($number, "string");
    for ($i = 0; $i < strlen($number); $i++) {
        $result += factorial($number[$i]);
    }
    return ($number == $result) ? 'factorion' : 'not factorion';
}

$numbers = array(1, 2, 145, 834, 981, 18533, 40585);
foreach ($numbers as $number) {
    echo sprintf("%d is %s.\n", $number, factorion($number));
}
?>