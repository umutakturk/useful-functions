<?php
function proxy($url, $proxy){
     $useragent = 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)';
     $referer = 'http://www.google.com';
     $c = curl_init();
     curl_setopt($c, CURLOPT_URL, $url);
     curl_setopt($c, CURLOPT_HEADER, 0);
     curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($c, CURLOPT_REFERER, $referer);
     curl_setopt($c, CURLOPT_USERAGENT, $useragent);
     curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($c, CURLOPT_HTTPPROXYTUNNEL, 0);
     curl_setopt($c, CURLOPT_PROXY, $proxy);
     $r = curl_exec($c);
     curl_close($c);
     return $r;
}

// Usage : proxy('http://www.find-ip-address.org/', '92.63.5.181:8080');
?>