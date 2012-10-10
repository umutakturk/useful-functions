<?php
/*
 * http://briancray.com/posts/estimated-reading-time-web-design/
 */

function est($content) {
    $word = str_word_count(strip_tags($content));
    $m = floor($word / 200);
    $s = floor($word % 200 / (200 / 60));
    $est = $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' second' . ($s == 1 ? '' : 's');
    return $est;
}
 
$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque magna vel purus gravida nec bibendum magna eleifend. Integer elit neque, commodo tincidunt blandit eu, porttitor ac neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut at sem et dolor feugiat condimentum non a magna. Donec mauris massa, condimentum a faucibus ut, luctus nec sapien. Nulla ac ligula a tortor mattis gravida sed at libero. Quisque id elementum risus. Morbi nisi lacus, pellentesque sed pretium a, gravida ut risus. Aliquam erat volutpat. Suspendisse magna ante, accumsan in laoreet non, mollis non risus.Praesent porttitor nulla at mi euismod id malesuada leo sodales. Maecenas gravida magna vestibulum metus cursus laoreet. Donec mollis mi eu diam sodales tempus. Maecenas in ante in lectus hendrerit congue nec et ligula. Proin cursus posuere risus. Aenean ut ipsum diam. Sed vitae leo quam, vel viverra dolor. Quisque vitae elementum diam. Proin vel risus eget felis fringilla tincidunt at et tortor. Proin sagittis diam ac odio interdum ut commodo sapien aliquam. Aliquam erat volutpat. Donec sed scelerisque lectus. Phasellus pellentesque facilisis dignissim. Ut varius fringilla felis, non condimentum massa rhoncus sit amet.';
 
echo 'Estimated reading time around ' . est($content);
?>