<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

include('conn.php');
$result = mysqli_query($conn, "SELECT * FROM user WHERE userid = '{$_SESSION['id']}'");
$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
</head>
<body>

  <h2>Login Successful</h2>
  <p>Welcome, <?php echo $user['fullname']; ?>!</p>
  <a href="logout.php">Logout</a>

</body>
</html>
