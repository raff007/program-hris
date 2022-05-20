<?php
ob_start();
require_once 'Config/Config.php';

session_destroy();
echo"<script>alert('Logout Sukses'); window.location = ('login.php');</script>";

ob_end_flush();
?>