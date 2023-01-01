<?php
$lists = [3,32,4,32,2,3,7,4,7,89];
function fix_array($lists) {
    $sortList = sort($lists);
    $organizedData = array_unique($lists);
    return $organizedData;
}

print_r(fix_array($lists));
?>