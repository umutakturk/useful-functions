<?php
function likes_count($name){
    $url  = "http://facebook.com/".$name;
    $fql  = "SELECT like_count FROM link_stat WHERE url='$url'";
    $data = json_decode(file_get_contents("http://api.facebook.com/method/fql.query?query=" . rawurlencode($fql) . "&format=json"));
    return $data[0]->like_count;
}

$likes = array(
    'Lana Del Rey'     => likes_count("lanadelrey"),
    'Coldplay'         => likes_count("coldplay"),
    'Skype'            => likes_count("Skype"),
    'The Hunger Games' => likes_count("thehungergamesmovie")
);

arsort($likes);

foreach($likes as $page => $count){
    printf('<p>%s has %d likes.</p>', $page, $count);
}

?>