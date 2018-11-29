<?php

if ($_POST["username"] == "root"  && $_POST["password"] == "toor"){
  $_SESSION["logged_in"] = true;
  header("Location: /home.php");
}

 ?>
