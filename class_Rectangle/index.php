<?php
include_once "rectangle.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])) {
    $width = $_GET['width'];
    $height = $_GET['height'];
    $action = $_GET['action'];

    $rect = new Rectangle($width, $height);

    if ($action === 'perimeter') {
        $result = "Perimeter: " . $rect->getPerimeter();
    }else {
        $result = "Area: " . $rect->getArea();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET">
    <label>Width:
        <input type="number" name="width" value="<?php echo $width ?? 0 ?>">
    </label>
     <label>Height:
        <input type="number" name="height" value="<?php echo $height ?? 0  ?>">
    </label>
    <select name="action" id="">
        <option
            <?php if (isset($action) && $action == 'perimeter'):  ?>
                selected
            <?php endif; ?>
                value="perimeter">Perimeter</option>
        <option
                <?php if (isset($action) && $action == 'area'):  ?>
                selected
                <?php endif; ?>
                value="area">Area</option>
    </select>
    <button type="submit">Result</button>
</form>
<?php
if (isset($result)) {
    echo $result;
}
?>
</body>
</html>