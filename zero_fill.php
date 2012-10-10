<?php
function zero_fill($num, $digit = 10) {
  return str_pad($num, $digit, '0', STR_PAD_LEFT);
}

echo zero_fill(493);
?>