<?php
require_once 'config.php';
if ($_POST['logout']==1) {
  // code...
  session_destroy();
}
header('location: ./index.php');
?>
