<?php
/**
 * Right triangles
 *
 * @author   KUA <http://umutakturk.com>
 * @date     September 20, 2012
 */

function right_triangles($hypotenuse) {
    for ($a = 1; $a <= $hypotenuse; $a++) {
        for ($b = $a; $b < $hypotenuse; $b++) { 
            $c = sqrt($a*$a+$b*$b);
            if ( ($c <= $hypotenuse) && ((int) $c == $c) ) {
                echo sprintf("%u-%u-%u\n", $a, $b, $c);
            }
        }
    }
}

right_triangles(50);
?>