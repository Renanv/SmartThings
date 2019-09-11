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
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="page-header">
    <h1>Hoi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welkom.</h1>
</div>
<p>
    <a href="logout.php" class="btn btn-danger">Uitloggen</a>
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