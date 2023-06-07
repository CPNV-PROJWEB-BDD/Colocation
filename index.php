<?php
session_start();
require "controller/navigation.php";
require "controller/user.php";
require "controller/account.php";
require "controller/goodDetail.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
      case 'home' :
          home();
          break;
      case 'displayLocation' :
          displayLocation($_POST);
          break;
      case 'signUp' :
          signUp($_POST);
          break;
      case 'account':
          account();
          break;
      case 'displayDetail' :
          displayDetail($_GET);
          break;
      case 'login' :
          login($_POST);
          break;
      case 'logout' :
          logout();
          break;
      case 'adModifyForm' :
          adModifyForm($_GET);
          break;
      case 'adActiveModify' :
          adActiveModify($_GET);
          break;
      case 'adAdd' :
          adAdd($_POST);
          break;
      default :
          home();
      }
    }
else {
    home();
}