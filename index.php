<?php

session_start();
require "controller/navigation.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
      case 'home' :
          home();
          break;
      case 'displayLocation' :
          displayLocation();
          break;
      case 'register' :
          registerProcess($_POST);
      default :
          home();
      }
    }
else {
    home();
}