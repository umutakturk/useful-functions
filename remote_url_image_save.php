<?php
function saveImage($url, $save_path) {
	$c = file_get_contents($url);
	$s = fopen($save_path, 'w');
	fwrite($s, $c);
	fclose($s);
}


// Usage
saveImage('http://domain.ltd/image.png', 'images/image.png');
?>