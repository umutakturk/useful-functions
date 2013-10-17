<?php
/**
 * Fibonacci Sequence
 *
 * @author   KUA <http://umutakturk.com>
 * @date     September 30, 2012
 */

function fibonacci($n) {
    return ($n <= 2) ? 1 : fibonacci($n - 1) + fibonacci($n - 2);
}

// Fibonacci Squence
for ($i = 1; $i <= 10; $i++) {
    echo fibonacci($i) . "\n";
}
?>