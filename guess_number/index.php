<?php 
function binarySearch($array, $x) {
    $left = 0;
    $right = count($array) -1;
    while ($left <= $right) {
        $mid = ceil(($left + $right)/2);
        if ($array[$mid] == $x) {
            return $mid; 
        } else if ($array[$mid] < $x) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return -1; 
}
$numbers = [2,9,15,35,48,50,66,74,82];
$x = 66;
$arr = binarySearch($numbers, $x);
if ($arr != -1) {
    echo "Phần tử $x được tìm thấy tại vị trí $arr trong danh sách.";
} else {
    echo "Phần tử $x không tồn tại trong danh sách.";
}
?>