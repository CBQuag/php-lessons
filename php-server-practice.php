<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "roost";
$db_pass = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}
echo 'bringus';

