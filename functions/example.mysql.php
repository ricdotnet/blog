<?php

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=database;host=localhost';
$user = 'user';
$password = 'password';

$dbh = new PDO($dsn, $user, $password);

// Check connection
if ($dbh->errorCode()) {
    die("Connection failed: " . $dbh->errorInfo());
}

?>