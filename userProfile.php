<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$function = new db_functions();


?>
<!DOCTYPE html>
<html>
<?php require_once('assets/includes/header.html'); ?>
<body>
<div class="jumbotron">
    <h1>Ingelogd als: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
</div>
<p>
    <a href="logout.php"><button type="button" class="btn btn-outline-danger"><i class="icon-signout"></i> Uitloggen</button></a>
    <a href="log.php"><button type="button" class="btn btn-outline-info"><i class="icon-user"></i> Terug</button></a>
</p>

<table class="table">

    <tbody>
    <tr>
        <th scope="row">Email</th>
        <td><input type="text" value="<?php echo $_SESSION["username"]; ?>" /></td>
        <td><a href="#"><button type="button" class="btn btn-success"><i class="icon-save"></i> Opslaan</button></a></td>
    </tr>
    <tr>
        <th scope="row">Mobiele nummer</th>
        <td><input type="number" value="<?php echo $_SESSION['mobielnummer']; ?>" /></td>
        <td><a href="#"><button type="button" class="btn btn-success"><i class="icon-save"></i> Opslaan</button></a></td>
    </tr>
    </tbody>
</table>
</body>
</html>
