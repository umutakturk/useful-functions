<?php
function cc_no_mask($card_no) {
   $padsize = (strlen($card_no) < 8 ? 0 : strlen($card_no) - 8);
   return substr($card_no, 0, 4) . str_repeat('*', $padsize). substr($card_no, -4);
}

echo cc_no_mask('4532811691972144'); // Output: 4532********2144
?>