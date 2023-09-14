<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phone"];
    $password = $_POST["password"];

    if (
        $name == ''
        &&$email == ''
        && $phonenumber == ''
        && $password == ''
    ) {
        // chuyen huong
        header("Location: login.php");
    } else {
        $errMsg = 'Please fill in all information';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account page</title>
</head>

<body>
    <form method="post" action="">
        Tên: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        Phone number: <input type="text" name="phone"><br><br>
        Password: <input type="password" name="password"><br><br>
        <button type="submit">Register</button><br><br>
        <?php
         if (isset($errMsg)) {
            echo $errMsg;
        }
        ?>
    </form>
</body>
</html>