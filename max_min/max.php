<?php 
function findMin($array) : int {
    $max = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
}
    }
return $max;
}
$arrs = [-2, 0, 5, 7, 9, -5, 30, 100];
// hiển thị lại mảng ban đầu 
foreach ($arrs as $arr) {
    echo $arr . " ";
}
echo "<br>";
// hiển thị kết quả
$maxValue = findMin($arrs);
echo "The minimum value is " . $maxValue;
?>