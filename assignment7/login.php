<?php
session_start();
include('conn.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check user in database
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        // Set cookies if "remember me" is checked
        if (isset($_POST['remember'])) {
            setcookie("user", $row['username'], time() + (86400 * 30));
            setcookie("pass", $row['password'], time() + (86400 * 30));
        }

        $_SESSION['id'] = $row['userid'];
        header("Location: success.php");
    } else {
        $_SESSION['message'] = "Login Failed. User not found!";
        header("Location: index.php");
    }
} else {
    $_SESSION['message'] = "Please login!";
    header("Location: index.php");
}
?>
