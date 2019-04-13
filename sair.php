<?php
session_start();
unset($_SESSION['usu_id']);
header("location: index.php");
?>