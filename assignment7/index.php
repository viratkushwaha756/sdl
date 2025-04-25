<?php
session_start();
include('conn.php'); // assumes you have DB connection in conn.php
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>

  
  <form method="POST" action="login.php">
    <h2>Login Form</h2>

    <label>Username:</label>
    <input type="text" name="username" value="<?php echo $_COOKIE['user'] ?? ''; ?>"><br><br>

    <label>Password:</label>
    <input type="password" name="password" value="<?php echo $_COOKIE['pass'] ?? ''; ?>"><br><br>

    <label>
      <input type="checkbox" name="remember" <?php if (isset($_COOKIE['user'])) echo 'checked'; ?>>
      Remember me
    </label><br><br>

    <input type="submit" name="login" value="Login">
  </form>

  <p style="color:red;">
    <?php
    if (isset($_SESSION['message'])) {
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    }
    ?>
  </p>

</body>
</html>
