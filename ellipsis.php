<?php
function ellipsis($string, $max_length) {
    return (strlen($string) > $max_length) ? substr($string,0,strrpos(substr($string, 0, $max_length), ' '))."…" : $string;
}
?>