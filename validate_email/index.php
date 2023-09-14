<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhập email: <input type="text" name="email">
        <input type="submit" name="submit" value="Kiểm tra">
    </form>
</body>
</html>

<?php
function isValidEmail($email) {  
    if (preg_match('/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)+$/', $email)) {
        return true; 
    } else {
        return false; 
    }
}
if (isset($_POST['submit'])) {
    $checkEmail = $_POST['email'];
    if (isValidEmail($checkEmail)) {
        echo "$checkEmail là một địa chỉ email hợp lệ.";
    } else {
        echo "$checkEmail không phải là địa chỉ email hợp lệ.";
    }
}
?>
