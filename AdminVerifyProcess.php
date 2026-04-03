<?php

include "connection.php";

$email = $_POST["em"];
$vcode = $_POST["vc"];

$admin_rs = Database::search("SELECT * FROM `admin` WHERE `email`='".$email."' ");
$admin_num = $admin_rs->num_rows;

if ($admin_num == 1) {
    $admin_data = $admin_rs->fetch_assoc();
    if ($admin_data["vcode"] == $vcode) {
        echo("success");
    } else {
        echo("oops! wrong code. please check your email");
    }
    
}

?>