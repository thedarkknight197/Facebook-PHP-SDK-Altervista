<?php

session_start();
require_once "Facebook/autoload.php";

$app_id = 'your-app-id';
$app_secret = 'your-secret-app-id';

$FB = new \Facebook\Facebook([
  'app_id' => $app_id,
  'app_secret' => $app_secret,
  'default_graph_version' => 'v3.2'
]);

$helper = $FB->getRedirectLoginHelper();

?>
