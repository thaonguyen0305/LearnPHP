<?php 
function count_values($array, $x) {
$count = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $x) {
        $count += 1;
}
}
return $count;
}
$x = 5;
$arr = [4, 5, 8, 11, 22, 3, 5, 5, 9, 4];
$result = count_values($arr, $x);
echo "So lan xuat hien cua " . $x . " trong mang la: " . $result;
?>
