<?php
session_start();
require "controller/navigation.php";
require "controller/user.php";
require "controller/location.php";


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
      case 'displayDetail' :
          displayDetail($_GET);
          break;
      case 'login' :
          login($_POST);
          break;
      case 'logout' :
          logout();
          break;
      default :
          home();
      }
    }
else {
    home();
}