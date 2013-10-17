<?php
/**
 * An Armstrong number is a number such that the sum
 * of its digits raised to the third power is equal
 * to the number itself.
 *
 * @author   KUA <http://umutakturk.com>
 * @date     September 25, 2012
 */

function armstrong_numbers($limit) {
    for ($i = 0; $i <= $limit; $i++) {
        $a = $i;
        $s = 0;

        while ($a > 0) {
            $r = $a % 10;
            $s = $s + pow($r, 3);
            $a = $a / 10;
        }

        if ($i == $s) {
            echo sprintf("%d\n", $i);
        }
    }
}

armstrong_numbers(500);
?>