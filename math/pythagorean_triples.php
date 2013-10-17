<?php
/**
 * Pythagorean triples
 *
 * @author   KUA <http://umutakturk.com>
 * @date     September 21, 2012
 */

function pythagorean_triples($limit) {
    for ($a = 1; $a <= $limit; $a++) {
        for ($b = $a; $b < $limit; $b++) { 
            (double) $c = sqrt($a*$a+$b*$b);
            if ( (int) $c == $c ) {
                echo sprintf("%u-%u-%0.0f\n", $a, $b, $c);
            }
        }
    }
}

pythagorean_triples(50);
?>