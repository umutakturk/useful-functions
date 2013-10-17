<?php
/**
 * Perfect Numbers
 *
 * @author   KUA <http://umutakturk.com>
 * @date     October 10, 2012
 */

function perfect_number($number) {
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum_of_factors += $i;
        }
    }

    return ($number == $sum_of_factors) ? 'perfect number' : 'not perfect number';
}

$numbers = array(1, 6, 28, 75, 88, 200, 496, 666, 8128);
foreach ($numbers as $number) {
    echo sprintf("%d is %s.\n", $number, perfect_number($number));
}     
?>