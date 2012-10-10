<?php
function age_calculator($month, $day, $year) {
    $dob   = mktime(0, 0, 0, $month, $day, $year);
    $delta = (time() - $dob);
    $age   = floor($delta / (365 * 86400));

    return $age;
}
?>