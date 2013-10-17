<?php
/**
 * Factorial, permutation and combination functions.
 *
 * @author   KUA <http://umutakturk.com>
 * @date     October 07, 2012
 */

function factorial($number) {
    return ($number !== 0) ? number_format($number * factorial($number - 1), 0, '.', '') : 1;
}

function permutation($n, $r) {
    return factorial($n) / factorial($n - $r);
}

function combination($n, $r) {
    return factorial($n) / (factorial($n - $r) * factorial($r));
}

echo combination(8, 2);
?>