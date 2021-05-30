<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "cocktails_site";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if($conn) {

}
else 
{
    die("Database connection failed");
}

?>