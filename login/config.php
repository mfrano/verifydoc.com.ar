<?php
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
//define('DATABASE', '3809023_firmado');
define('DATABASE', '3809023_prueba');
//define('USER', '3809023_firmado');
//define('PASSWORD', 'unlz1234');
//define('HOST', 'pdb28.awardspace.net');
//define('DATABASE', '3809023_firmado');

try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>