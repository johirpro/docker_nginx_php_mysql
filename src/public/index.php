<?php
//MySQL connection test
$pdo = new PDO('mysql:dbname=demp_example_db;host=mysql', 'dempuser', 'userentry', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];


phpinfo();
