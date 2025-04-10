<?php 

session_start();
unset($_SESSION['email']);
session_destroy();
header("location:userSignin.php");
mysqli_close($conn);

?>