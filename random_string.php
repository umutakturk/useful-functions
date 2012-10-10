<?php
/*

function random_string($length = 8) {
	return base_convert(mt_rand(pow(36, $length-1), pow(36, $length)-1), 10, 36);
}

*/

function random_string($length) {
  return substr(str_shuffle(implode(array_merge(range(0,9), range('A','Z'), range('a','z')))), 0, $length);
}

echo random_string(6);
?>