<?php
session_start();
session_unset();
session_destroy();

session_start();
$_SESSION['toast'] = "You have been logged out.";
$_SESSION['toast_type'] = "alert-success";

header("Location: login.php");
exit;
?>
