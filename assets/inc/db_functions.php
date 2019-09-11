<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 13-12-2017
 * Time: 11:44
 */

class db_functions
{
    function getMovementData()
    {
        global $conn;

        $sql = $conn->prepare("SELECT * FROM movementlog");
        $sql->execute(array());
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
}