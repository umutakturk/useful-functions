<?php
function mb_capitilize($word){
    $word          = mb_strtolower(trim($word), 'UTF-8');
    $capitalLetter = mb_strtoupper(mb_substr( $word, 0, 1, 'UTF-8'), 'UTF-8');
    $whatIsLeft    = mb_substr($word, 1, mb_strlen( $word, 'UTF-8') - 1, 'UTF-8');
    $word          = $capitalLetter.$whatIsLeft;

    return $word;
}
?>