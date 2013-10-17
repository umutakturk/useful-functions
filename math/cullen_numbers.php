<?php
/**
 * Cullen Numbers
 *
 * @author   KUA <http://umutakturk.com>
 * @date     September 24, 2012
 */

function cullen_number($i) {
    return ($i * pow(2, $i) + 1);
}

// Cullen Numbers
for ($i = 1; $i <= 10; $i++) {
    echo cullen_number($i) . "\n";
}
?>