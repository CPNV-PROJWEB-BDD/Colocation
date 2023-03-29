<?php

session_start();
require "controller/navigation.php";
require "controller/user.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
      case 'home' :
          home();
          break;
      case 'signUp' :
          signUp($_POST);
          break;
      case 'displaySendFormRequest' :
          displaySendFormRequest();
          break;
      case 'sendFormRequest':
          sendFormRequest();
          break;
      case 'displayLogin' :
          displayLogin();
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