<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $serverName = "localhost";
    $userName = "mohammad";
    $password = "159875320Mohammad123Joker$";
    $database = "colorlibWithCRUD";

    // Create connection
    $connection = new mysqli($serverName, $userName, $password, $database);

    $sql="DELETE FROM slider2 WHERE id=$id";
    $connection->query($sql);

    echo "Record removed successfully";
}



header("location:/admin.php");
exit;
?>