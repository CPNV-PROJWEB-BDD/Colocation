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
      case 'displayLocation' :
          displayLocation($_POST);
          break;
      case 'signUp' :
          signUp($_POST);
          break;
      case 'insertAdJSON':
          insertAdJSON($_POST);
          break;
       case 'Account':
            Account(); 
            break;  
      default :
          home();
      }
    }
else {
    home();
}