<?php
/**
 * Fermat Numbers
 *
 * @author   KUA <http://umutakturk.com>
 * @date     October 07, 2012
 */

function fermat_number($x) {
    return number_format(pow(2, pow(2, $x)) + 1, 0, '', '');
}

for ($i = 1; $i < 10; $i++) {
    echo fermat_number($i) . "\n";
}
?>