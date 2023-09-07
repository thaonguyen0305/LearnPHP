<?php
require_once "./quadraticEquation.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = floatval($_POST["a"]);
    $b = floatval($_POST["b"]);
    $c = floatval($_POST["c"]);

    $equation = new QuadraticEquation($a, $b, $c);

    $delta = $equation->getDiscriminant();

    if ($delta > 0) {
        $x1 = $equation->getRoot1();
        $x2 = $equation->getRoot2();
        $result = "Phương trình có 2 nghiệm:<br>Nghiệm 1: $x1<br>Nghiệm 2: $x2<br>";
    } elseif ($delta == 0 && $a != 0) {
        $x = $equation->getRoot1();
        $result = "Phương trình có một nghiệm kép: $x<br>";
    } elseif ($a == 0) {
        $result = "Phương trình không phải là phương trình bậc hai.<br>";
    } else {
        $result = "Phương trình vô nghiệm.<br>";
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
        <input type="text" name="a" placeholder="a">x^2 + <input type="text" name="b" placeholder="b">x + <input type="text" name="c" placeholder="c"> = 0 <br><br>
        <input type="submit" value="Kết quả">
    </form>

    <?php echo $result; ?>
</body>
</html>
