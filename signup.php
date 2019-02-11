<?php
require 'sql.php';

$postToServer = $mysqli->query("INSERT INTO `user`(`email`, `username`, `password`) VALUES ($_POST["email"], $_POST["email"], $_POST["psw"])");
header("HTTP/1.0 Loaction: index.php");
 ?>
