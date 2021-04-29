<?php

session_start();
unset($_SESSION['userid']);
header("location:index1.php");

?>