<?php
include 'koneksi.php';
session_start();
/* if (array_key_exists("loginStatus",$_SESSION) == false) {
    header('location:index.php');
} */

function validInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (array_key_exists("loginStatus",$_SESSION) == true) {
    session_destroy();
    header('location:index.php');
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["password"] == '123') {
        $email = validInput($_POST["email"]);
        $password = validInput($_POST["password"]);
        /* session_register('email');
        session_register('loginStatus');
        session_register('loginDate'); */
        $_SESSION['email'] = $email;
        $_SESSION['loginStatus'] = true;
        header('location:produk.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div>
                <label for="">Email : </label>
                <input type="email" name="email" id="email">
                <label for="">Password : </label>
                <input type="password" name="password" id="email">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>