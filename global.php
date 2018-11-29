<?php
if ($_SESSION["logged_in"]){
  if ($page != "home"){
    header("Location: /home.php");
  }
}else{
  if ($page != "login"){
    header("Location: /");
  }
}
 ?>
