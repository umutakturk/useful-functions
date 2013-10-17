<?php
/**
 * Sum of all factors of given number. 
 *
 * @author   KUA <http://umutakturk.com>
 * @date     October 03, 2012
 */

function sum_of_factors($n) {
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $factors[] = $i;
        }
    }

    return array_sum($factors);
}


echo sum_of_factors(10);
?>