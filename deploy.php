<?php
require("sett.php")
$mysqli = new mysqli( dbs, dbl, dbp );

$mysqli->query("CREATE DATABASE IF NOT EXISTS tedxtura");
$mysqli->query("CREATE TABLE IF NOT EXISTS userinv (
        id INT NOT NULL AUTO_INCREMENT,
        surname VARCHAR(100),
        name VARCHAR(100),
        email VARCHAR(100),
        phone VARCHAR(100),
        PRIMARY KEY (`id`))
         ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
        ");
echo "string";
?>
