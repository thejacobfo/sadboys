<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME', 'postgres');
define('DBPASSWORD', 'jacobfolstrom5');
define('DBNAME', 'dbtest');

$db_connection = pg_connect('DBSERVER', 'DBUSERNAME', 'DBPASSWORD', 'DBNAME');

if($db === false){
    die("Error: connection error." . pg_connect_error());
}
?>