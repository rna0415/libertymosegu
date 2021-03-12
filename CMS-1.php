<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Logged out succesfully';
   header('Refresh: 1; URL = CMS0.php');
?>