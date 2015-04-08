<?php
$mysqli = new mysqli( 'localhost', 'root', '' );

$mysqli->query("CREATE DATABASE IF NOT EXISTS tedxtura");
$mysqli->query("CREATE TABLE IF NOT EXISTS userinv (
        id INT NOT NULL AUTO_INCREMENT,
        surname CHAR(100), 
        name CHAR(100), 
        email CHAR(100), 
        phone CHAR(100)
        ) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_bin;
        ");
echo "string";
?>
