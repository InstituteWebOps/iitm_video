
<?php
@session_start();

require 'config/OAuth_config.php';
require 'libs/OAuth.php';

$oauth = new OAuth();
$oauth->init();
if($oauth->authCode){
  $_SESSION['authcode'] = $oauth->authCode;
}
if($oauth->user['loggedIn']){
  $_SESSION['user'] = $oauth->user;
$url  = rtrim($_GET['url'],'/');
$url = explode('/', $url);
if($url[0]==''){
  $url[0]='index';
}

require('pages/'.$url[0].'.php');
}
