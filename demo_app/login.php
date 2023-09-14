<?php
// kiem tra method request
// $_REQUEST bien toan cuc, chua thong tin server
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get data from request
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

        if($email == 'admin@example.com' 
            && $password = '1234' 
            ) {
                // chuyen huong
                header ('Location: home.php');
            } {
                $eerMsg = 'Account not exist';
            }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <form action ="" method = 'post'>
        Email: <input type="email" id="email" name="email">
        Password: <input type="password" name="password">
        <button type="submit">Login</button>
        <?php
        // insert ham kiemtra ton tai
        if (isset($errMsg)) {
            echo $errMsg;
        }
        ?>
    </form>  
    <p>Create your Account? <a href="register.php">Create</p>  
</body>
</html>