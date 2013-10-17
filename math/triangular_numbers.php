<?php
/**
 * Triangular Numbers
 *
 * @author   KUA <http://umutakturk.com>
 * @date     September 29, 2012
 */

function triangular_number($n) {
    return ($n * ($n + 1) / 2);
}

// Triangular Numbers
for ($i = 1; $i <= 10; $i++) {
    echo triangular_number($i) . "\n";
}
?>