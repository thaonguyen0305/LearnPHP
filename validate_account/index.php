<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nhập tên đăng nhập: <input type="text" name="account">
        <input type="submit" name="submit" value="Kiểm tra">
    </form>
</body>
</html>

<?php
function ValidateAccount($account) {
    if (preg_match('/^[_a-z0-9]{6,}$/', $account)) {
        return true; 
    } else {
        return false; 
    }
}

if (isset($_POST['submit'])) {
    $checkAccount = $_POST['account'];
    if (ValidateAccount($checkAccount)) {
        echo "$checkAccount tên đăng nhập hợp lệ.";
    } else {
        echo "$checkAccount tên đăng nhập không hợp lệ.";
    }
}
?>
