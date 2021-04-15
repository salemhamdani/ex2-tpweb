<?php
function compare($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
$array = array('a' => 4, 'b' => 8, 'c' => -1,
    'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
print_r($array);
uasort($array, 'compare');
?>