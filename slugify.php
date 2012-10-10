<?php
function slugify($str) {
    $str = mb_strtolower(trim($str), 'UTF-8');

    $chars = array("æ", "ß");
    $replacements = array("ae", "ss");
    $str = str_replace($chars, $replacements, $str);

    $pattern = array(
        "/(α|ą|ā|à|á|â|ã|ä|å)/",
        "/(ç|ć|č)/",
        "/(è|é|ê|ë|ě|ę|ė|ē)/",
        "/(ı|ì|í|ï|ί|ϊ|į|ī|ι)/",
        "/(ö|ò|ó|ô|ő|ø)/",
        "/(ş|ś|š)/",
        "/(ü|ú|ù|û)/"
        );
    $replacements = array("a", "c", "e", "i", "o", "s", "u");
    $str = preg_replace($pattern, $replacements, $str);

    $pattern = array("/[^a-z0-9-]/", "/-+/");
    $str = preg_replace($pattern, "-", $str);

    return $str;
}

echo slugify("Héllø Wörld");
?>