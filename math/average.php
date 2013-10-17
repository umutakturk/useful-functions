<?php
/**
 * Calculate the average of the set of numbers.
 *
 * @author   KUA <http://umutakturk.com>
 * @date     October 06, 2012
 */

function average($numbers) {
    return number_format(array_sum($numbers) / count($numbers), 2, '.', '');
}

$numbers = array(6378, 8688, 23626, 88529);
echo average($numbers);
?>