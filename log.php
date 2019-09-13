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
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<?php //require('assets/includes/header.html'); ?>
<body>
<div class="jumbotron">
    <h1>Hoi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welkom.</h1>
</div>
<p>
    <a href="logout.php"><button type="button" class="btn btn-danger"><i class="icon-signout"></i> Uitloggen</button></a>
    <a href="userProfile.php"><button type="button" class="btn btn-info"><i class="icon-user"></i> Mijn profiel</button></a>
</p>

<div class="centered">
    <h2 class="text-center">Movement Register</h2>
    <table class="table table-striped jambo_table">
        <thead>
        <tr>
            <th>Timestamp</th>
            <th>Acties</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($movementvalues as $movementdata) { ?>
        <tr class="edits block">
                <td><p style="color: black;"><?php echo $movementdata->timestamp; ?></p></td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs viewOption" data-id="<?php echo $movementdata->id; ?>" data-image="<?php echo $movementdata->image; ?>" data-toggle="modal" data-target="#changeOptionModal"><i style="color: white" class="icon-eye-open"></i></button>
                    <button type="button" class="btn btn-primary btn-xs removeAd" data-id2="<?php echo $movementdata->id; ?>" data-toggle="modal" data-target="#deleteOptionModal"><i style="color: white" class="icon-minus-sign"></i></button>
                </td>



                <?php }
                ?>
        </tbody>
    </table>
</div>
<div id="changeOptionModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form method="post" enctype="multipart/form-data">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">View Item</h4>
                </div>

                <div class="modal-body">
                    <input name="car_id" type="hidden" id="changeCarId">
                    <img src="test.jpg" id="optionPlate" >
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuleren</button>
                    <button type="submit" class="btn btn-success" name="saveOption">Wijzigen</button>
                </div>
            </div>
        </form>
    </div>
</div>



<?php

//$x = 0;
//$time = 13;
//$time2 = 12;
//
//while ($x < 14){
//    echo "INSERT INTO movementlog( timestamp, image) VALUES ( '". $time .":". $time2 ."', '". $x .".jpg');";
//    $x ++;
//    $time2 ++;
//}
//?>
</body>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/modal.js"></script>
<script>
    $(document).on('click', '.viewOption', function () {
        var id = $(this).data('id');
        var image = $(this).data('image');
        console.log(image);
        $('#changeCarId').val(id);
        document.getElementById('optionPlate').src = 'assets/imagesCamera/' + image;
    })
</script>
</html>