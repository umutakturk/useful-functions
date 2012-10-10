<?php
function caesar_cipher($str, $offset = 3) {
    $max = strlen($str);
    for ($i = 0; $i < $max; $i++) {
        if (ord($str[$i]) >= 65 && ord($str[$i]) <= 90) { // If the letter is upper case, keep it uppercase.
            if ((ord($str[$i]) + $offset) > 90) {
                $crypt .= chr(65 + ((ord($str[$i]) + $offset) - 91));
            } else {
                $crypt .= chr(ord($str[$i]) + $offset);
            }
        } else if(ord($str[$i]) >= 97 && ord($str[$i]) <= 122) { // If the letter is lower case, keep it lower case.
            if((ord($str[$i]) + $offset) > 122) {
                $crypt .= chr(97 + ((ord($str[$i]) + $offset) - 123));
            } else {
                $crypt .= chr(ord($str[$i]) + $offset);
            }
        } else {
            $crypt .= chr(ord($str[$i]) + $offset);
        }
    }
    return strtoupper($crypt);
}

echo caesar_cipher('Mauris suscipit ultrices ipsum ut scelerisque.');
?>