<?php
function readable_time($time) {
    $timestamp = (!is_int($time)) ? strtotime($time) : $time;
    $distance  = round(abs(time() - $timestamp) / 60);

    if( $distance <= 1 ){
        $return = ($distance == 0) ? 'less than a minute ago' : '1 minute ago';
    } elseif( $distance < 60 ){
        $return = $distance . ' minutes ago';
    } elseif( $distance < 119 ){
        $return = 'an hour ago';
    } elseif( $distance < 1440 ){
        $return = round(floatval($distance) / 60.0) . ' hours ago';
    } elseif( $distance < 2880 ){
        $return = 'Yesterday at ' . date('H:i', $timestamp );
    } elseif( $distance < 14568 ){
        $return = date('l', $timestamp ) . ' at ' . date('H:i', $timestamp );
    } else {
        $return = date('d F', $timestamp ) . ( ( date('Y') != date('Y', $timestamp ) ? ' ' . date('Y', $timestamp ) : '' ) ) . ' at ' . date('H:i', $timestamp );
    }
    return $return;
}
?>