<?php
define('HOST', 'localhost');
define('DB', 'fill');
define('USER', 'paulemfag');
define('PASSWORD', 'xxxx');
$dsn = 'mysql:dbname=' . DB . '; host=' . HOST;
$db = new PDO($dsn, USER, PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
