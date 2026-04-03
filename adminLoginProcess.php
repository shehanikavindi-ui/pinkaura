<?php

include "connection.php";

$email = $_POST["em"];
$password = $_POST["pw"];

if (empty($email)) {
    echo("* Please enter your email *");
}else if (strlen($email) > 100) {
    echo("* Email must contain lower than 100 characters *");
}else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo("* Invalid Email Address *");
} else if (empty($password)) {
    echo("* Please enter your password *");
} else if (strlen($password) > 9 || strlen($password) < 4) {
    echo("* Password must be 5 to 8 characters *");
} else {
    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email`='".$email."' AND `password`='".$password."' ");
    $admin_num = $admin_rs->num_rows;
    if ($admin_num == 1) {
        echo("success");
    } else {
        echo("Invalid Email or Password");
    }
}


?>