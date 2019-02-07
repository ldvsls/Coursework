<?php
require('sql.php')
$errorMsg = "";
$validUser = $_SESSION["login"] === true;
if (isset($_POST["sublogin"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = $mysqli->real_escape_string($username);
    $password = $mysqli->real_escape_string($password);
    if ($result = $mysqli->query("SELECT * FROM `user_details` WHERE username = '$username'")) {
        //printf("Select returned %d rows.\n", $result->num_rows);
        $row = $result->fetch_array();
        $hash = $row['password'];
        if ($row['username'] == $username && password_verify($password, $hash)) {
          $_SESSION["param"] = $row['param'];
          $validUser = true;
        } else {
            $validUser = false;
        }
        $result->close();
    } else {
        die();
    }
    if (!$validUser) {
        $errorMsg = "Invalid username or password.";
    } else {
        $_SESSION["login"] = true;
        $_SESSION["current-user"] = $_POST["username"];
    }
}
if ($validUser) {
    session_regenerate_id(true);
    header("Location: success");
    die();
}
?>
