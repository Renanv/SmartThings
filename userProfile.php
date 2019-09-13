<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if(isset($_SESSION['usernameGelukt'])){
    if( $_SESSION['usernameGelukt']){
        echo "<script>alert('Gelukt! Email verandert naar ". $_SESSION['username'] .".');</script>";
        $_SESSION['usernameGelukt'] = false;
    }
}
if(isset($_SESSION['numberGelukt'])){
    if($_SESSION['numberGelukt']){
        echo "<script>alert('Gelukt! Nummer verandert naar ". $_SESSION['mobielnummer'] .".');</script>";
        $_SESSION['numberGelukt'] = false;
}
}


?>
<!DOCTYPE html>
<html>
<?php require_once('assets/includes/header.html'); ?>
<body>
<div class="jumbotron">
    <h1>Ingelogd als: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
</div>
<p>

    <a href="logout.php"><button type="submit" class="btn btn-outline-danger"><i class="icon-signout"></i> Uitloggen</button></a>
    <a href="log.php"><button type="submit" class="btn btn-outline-info"><i class="icon-user"></i> Terug</button></a>
</p>

<table class="table">

    <tbody>
    <form action="changeUser.php" method="post">
        <tr>
            <th scope="row">Email</th>
            <td><input type="text" value="<?php echo $_SESSION["username"]; ?>"  name="usernameChange"/></td>
            <td><a href="#"><button type="submit" class="btn btn-success"><i class="icon-save"></i> Opslaan</button></a></td>
        </tr>
    </form>
    <form action="changeUser.php" method="post">
        <tr>
            <th scope="row">Mobiele nummer</th>
            <td><input type="number" value="<?php echo $_SESSION['mobielnummer']; ?>" name="mobilenumberChange"/></td>
            <td><a href="#"><button type="submit" class="btn btn-success"><i class="icon-save"></i> Opslaan</button></a></td>
        </tr>
    </form>


    </tbody>
</table>
</body>
</html>
