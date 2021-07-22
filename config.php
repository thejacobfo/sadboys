<?php
$host = "localhost";
$port = "5432";
$dbname = "dbtest";
$user = "postgres";
$pass = "jacobfolstrom5"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass} ";
$dbconn = pg_connect($connection_string);
if($dbconn === false){
    die("Error: connection error.");
}
?>
