<?php
include 'db.php';
session_destroy();
header("Location: student_login.php");
?>