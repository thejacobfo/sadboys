<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'postgres');
define('DBPASSWORD', 'jacobfolstrom5');
define('DBNAME', 'dbtest');

$db = mysqli.connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if($db === false){
    die("Error: connection error." . mysqli_connect_error());
}
?>