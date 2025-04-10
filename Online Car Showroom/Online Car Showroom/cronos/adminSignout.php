<?php 

session_start();
unset($_SESSION['adminName']);
session_destroy();
header("location:adminSignin.php");
mysqli_close($conn);

?>