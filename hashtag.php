<?php
function hashtag($str) {
    return preg_replace('/(^|\s)#(\w*[a-zA-Z0-9_ÇçÖöİıÜüĞğŞş]+\w*)/', ' <a href="http://www.google.com/search?q=%23$2">#$2</a>', $str);
}
?>