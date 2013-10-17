<?php
function compress($_file) {
    $_file = preg_replace(array("/((?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:\/\/.*))/","!/\*[^*]*\*+([^/][^*]*\*+)*/!"), "", $_file); /* remove comments */
    $_file = str_replace(array('\r\n','\r','\t','\n','  ','    ','     '), '', $_file); /* remove tabs, spaces, newlines, etc. */
      /* remove spaces before/after certain characters */
    $_file = preg_replace(array('(( )+\))','(\)( )+)'), ')', $_file);
    $_file = preg_replace(array('(( )+\()','(\(( )+)'), '(', $_file);
    $_file = preg_replace(array('(( )+\})','(\}( )+)'), '}', $_file);
    $_file = preg_replace(array('(( )+\{)','(\{( )+)'), '{', $_file);
    $_file = preg_replace(array('(( )+\:)','(\:( )+)'), ':', $_file);
    $_file = preg_replace(array('(( )+\;)','(\;( )+)'), ';', $_file);
    $_file = preg_replace(array('(( )+\,)','(\,( )+)'), ',', $_file);
    return $_file;
}
?>