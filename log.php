<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require 'assets/inc/connection.php';
require 'assets/inc/db_functions.php';

$function = new db_functions();

$movementvalues = $function->getMovementData();
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once('assets/includes/header.html'); ?>
<body>
<div class="jumbotron">
    <h1>Hoi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welkom.</h1>
</div>
<p>
    <a href="logout.php"><button type="button" class="btn btn-outline-danger"><i class="icon-signout"></i> Uitloggen</button></a>
    <a href="userProfile.php"><button type="button" class="btn btn-outline-info"><i class="icon-user"></i> Mijn profiel</button></a>
</p>
<?php foreach ($movementvalues as $movementdata) { ?>

    <p style="color: black;"><?php echo $movementdata->timestamp; ?></p>
    <img class="blockPic" src="assets/imagesCamera/<?php echo $movementdata->image ; ?>"> <br />



<?php }

$x = 0;
$time = 13;
$time2 = 12;

while ($x < 14){
    echo "INSERT INTO movementlog( timestamp, image) VALUES ( '". $time .":". $time2 ."', '". $x .".jpg');";
    $x ++;
    $time2 ++;
}
?>
</body>
</html>