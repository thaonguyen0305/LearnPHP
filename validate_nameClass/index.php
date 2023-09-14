<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhập tên lớp học: <input type="text" name="name_class">
        <input type="submit" name="submit" value="Kiểm tra">
    </form>
</body>
</html>

<?php
function ValidateNameClass($name_class) {  
    if (preg_match('/^[CAP][0-9]{4}[GHIKLM]$/', $name_class)) {
        return true; 
    } else {
        return false; 
    }
}
if (isset($_POST['submit'])) {
    $checkNameClass = $_POST['name_class'];
    if (ValidateNameClass($checkNameClass)) {
        echo "$checkNameClass  hợp lệ.";
    } else {
        echo "$checkNameClass không hợp lệ.";
    }
}
?>
