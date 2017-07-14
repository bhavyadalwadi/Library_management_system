<?php
session_start();
session_destroy();
header("location: Book_Title.php");
?>