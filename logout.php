<?php
require_once 'admin/config/config.php';
require_once 'admin/config/helper.php';
session_start();
session_destroy();
header('location:index.php');
exit;
?>