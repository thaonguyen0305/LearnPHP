<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhập số điện thoại: <input type="text" name="phone_number">
        <input type="submit" name="submit" value="Kiểm tra">
    </form>
</body>
</html>

<?php
function ValidateNameClass($phone_number) {  
    if (preg_match('/^[0-9]{2}-[0-9]{10}$/', $phone_number)) {
        return true; 
    } else {
        return false; 
    }
}
if (isset($_POST['submit'])) {
    $checkPhoneNumber = $_POST['phone_number'];
    if (ValidateNameClass($checkPhoneNumber)) {
        echo "$checkPhoneNumber  hợp lệ.";
    } else {
        echo "$checkPhoneNumber không hợp lệ.";
    }
}
?>
