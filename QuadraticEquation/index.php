<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị a, b và c từ biểu mẫu HTML
    $a = floatval($_POST["a"]);
    $b = floatval($_POST["b"]);
    $c = floatval($_POST["c"]);
    // Tính delta
    $delta = ($b * $b) - (4 * $a * $c);
    // Tính các nghiệm
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có 2 nghiệm:<br>";
        echo "Nghiệm 1: $x1<br>";
        echo "Nghiệm 2: $x2<br>";
    } else if ($delta == 0) {
        $x = -$b / (2 * $a);
        echo "Phương trình có một nghiệm kép: $x<br>";
    } elseif ($a == 0) {
        echo "Phương trình không phải là phương trình bậc hai.<br>";
    } else {
        echo "Phương trình vô nghiệm.<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giải phương trình bậc hai</title>
</head>
<body>
    <h1>Giải phương trình bậc hai</h1>
    <form method="post" action="">
        <input type="text" name="a" placeholder="a"> x^2 + <input type="text" name="b" placeholder="b"> x + <input type="text" name="c" placeholder="c"> = 0 <br><br>
        <input type="submit" value="Kết quả">
    </form>
</body>

</html>