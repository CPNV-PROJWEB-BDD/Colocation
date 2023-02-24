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
      case 'register' :
          registerProcess($_POST);
          break;
      default :
          home();
      }
    }
else {
    home();
}