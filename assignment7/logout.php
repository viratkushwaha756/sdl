<?php
session_start();
session_destroy();

// Remove cookies if they exist
setcookie("user", "", time() - 3600);
setcookie("pass", "", time() - 3600);

header("Location: index.php");
exit;
?>
