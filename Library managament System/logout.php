<?php
session_start();
session_destroy();
header("location: Login.html?msg=Successfully Logged out");
?>