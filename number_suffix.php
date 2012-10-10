<?php
function number_suffix($number) {
  if ( !in_array( ($number % 100), array(11,12,13) ) ){
    switch ($number % 10) {
      case 1: return $number.'st';
      case 2: return $number.'nd';
      case 3: return $number.'rd';
    }
  }
  return $number.'th';
}

// Testing
echo number_suffix(33);

// Output : 33rd
?>