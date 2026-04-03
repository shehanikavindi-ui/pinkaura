<?php

include "connection.php";

$name = $_POST["name"];
$email = $_POST["em"];
$password = $_POST["pw"];
$repeatpw = $_POST["rpw"];

if (empty($name)) {
    echo("* Please Enter Your Full Name *");
} else if (strlen($name) > 100) {
    echo("* Full Name must contain lower than 100 characters *");
} else if (empty($email)) {
    echo("* Please Enter Your Email Address *");
} else if (strlen($email) > 100) {
    echo("* Email must contain lower than 100 characters *");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo("* Invalid Email address *");
} else if (empty($password)) {
    echo("* Please Enter Your Password *");
} else if (strlen($password) > 9 || strlen($password) < 4) {
    echo("* Password must be 5 to 8 characters *");
} else if(empty($repeatpw)) {
    echo ("* Please Re-enter Your Password *");
} else if($password != $repeatpw) {
    echo ("* Passwords do not match. Check again !! *");
} else {
    
    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email`='".$email."' ");
    $admin_num = $admin_rs->num_rows;

    if ($admin_num > 0) {
        echo("This Email is already registered");
    } else {
        $d = new DateTime();
        $tz = new DateTimeZone("Asia/Colombo");
        $d->setTimeZone($tz);
        $date = $d->format("Y-m-d H:i:s");

        Database::iud("INSERT INTO `admin` 
        (`email`,`fullname`,`password`,`role`,`status_id`,`created_at`)
        VALUES ('".$email."', '".$name."', '".$password."', 'admin', '1', '".$date."') ");

        echo("success");
    }
}

?>