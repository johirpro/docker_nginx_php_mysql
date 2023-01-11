<?php
//MySQL connection test
$pdo = new PDO('mysql:dbname=example_db;host=mysql', 'dbuser', 'userentry', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];


phpinfo();
