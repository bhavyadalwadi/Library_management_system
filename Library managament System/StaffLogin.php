<?php
require 'connect.inc.php';

if(isset($_GET['SID']) && isset($_GET['SPA'])) {
$SID = $_GET['SID'];
$SPA = $_GET['SPA'];
 if (!empty($SID) && !empty($SPA)) {
$result = mysql_query("SELECT * FROM Staff_Login WHERE Susername='$SID' AND Spassword='$SPA'");
    if ($result === FALSE) {
    die(mysql_error());
    }
      $count=mysql_num_rows($result);

      if($count==1){
                    session_start();
                    $_SESSION['SUsername']= $SID;
                   header('location:AfterLoginF.php');
      }
      else {
        echo 'Invalid Username and Password';
      }
   } else {
    echo 'Invalid Username and Password';
  }
}
?>

