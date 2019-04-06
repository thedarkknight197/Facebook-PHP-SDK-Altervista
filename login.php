<?php

require_once './config.php';

$redirect_url = 'https://tuodominio.altervista.org/CMS/fb-callback.php';
$permssions = ['email'];

$loginURL = $helper->getLoginUrl($redirect_url, $permssions);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if (!isset($_SESSION['access_token'])){echo"Login";}else echo"Access OK!";?></title>
    <!-- link all the styles -->
    <?php include('./front-end/css/linkheader.php'); ?>
  </head>
  <body>
    <?php
		if (!isset($_SESSION['access_token'])){?>
    <form method="post">
      <input type="email" name="email" placeholder="email" value="">
      <input type="password" name="password" placeholder="password" value="">
      <input type="submit" class="button" name="Login" value="Log In">
      <button type="button" onclick="window.location = '<?php echo $loginURL?>'" name="button">Log In with Facebook</button>
    </form>
    <?php
  } else {
    header('location: ./index.php');
  } include('./front-end/js/linkjs.php'); ?>
  </body>
</html>
