<?php

function simple_number($number) {
    if($number < 1000) {
            return $number;
    } elseif($number > 999 and $number < 1000000) {
        return number_format($number/1000, 1, '.', '') . 'K';
    } else {
        return number_format($number/1000000, 1) . 'M';
    }
}

/**
 * Output number < 1000 : Same
 *        6,346: 6.4K
 *        13,112: 13.1K
 *        327,381: 327.4K
 *        9,402,757: 9.4M
 */

?>