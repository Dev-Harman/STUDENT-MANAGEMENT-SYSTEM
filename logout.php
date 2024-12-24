<?php
session_start();
session_destroy(); // used for session destroy
header('location:userlogin.php');
?>