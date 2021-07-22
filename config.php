<?php
$host = "localhost";
$port = "5432";
$dbname = "dbtest";
$user = "postgres";
$password = "jacobfolstrom5"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if($dbconn === false){
    die("Error: connection error." . pg_connect_error());
}
?>