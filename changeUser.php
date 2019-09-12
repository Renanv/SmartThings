<?php
session_start();
require 'assets/inc/connection.php';
require 'assets/inc/db_functions.php';
$function = new db_functions();

if(!array_key_exists('usernameChange', $_POST) && !array_key_exists('mobilenumberChange', $_POST)){
    header("location: login.php");
    exit;
}
if(array_key_exists('usernameChange', $_POST)){
    $function->changeEmail($_POST["usernameChange"]);
    $_SESSION['username'] = $_POST["usernameChange"];
    $_SESSION['usernameGelukt'] = true;
    header("location: userProfile.php");
    exit;
} elseif (array_key_exists('mobilenumberChange', $_POST)){
    $function->changeMobileNumber($_POST["mobilenumberChange"]);
    $_SESSION['mobielnummer'] = $_POST["mobilenumberChange"];
    $_SESSION['numberGelukt'] = true;
    header("location: userProfile.php");
    exit;
}
