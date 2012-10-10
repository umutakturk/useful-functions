<?php
/**
 * comma_list_ended()
 * returns a string list of the items in an array, using
 * a specified last word to substitute the last comma.
 *
 * eg. a, b, c, d and e
 *     1, 2, 3, 4 or 5
 *
 * @author: Andy Thomas (forrst@antom.co.uk)
 * @date: 03/11/2010
 */

function comma_list_ended($arr,$last = 'and') {
    return preg_replace("/,([^,]*)$/", " {$last} $1", join($arr,', '));
}
?>