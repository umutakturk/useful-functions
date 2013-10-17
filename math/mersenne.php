<?php
/**
 * The Mersenne Numbers
 *
 * @author   KUA <http://umutakturk.com>
 * @date     October 07, 2012
 */

function mersenne_number($x) {
    return number_format(pow(2, $x) - 1, 0, '', '');
}

for ($i = 1; $i <= 10; $i++) {
    echo mersenne_number($i) . "\n";
}
?>