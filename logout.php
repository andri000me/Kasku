<?php
include "core/init.php";
unset($_SESSION['nim']);
unset($_SESSION['password']);
unset($_SESSION['nama']);
session_destroy();
header('location:login.php');
