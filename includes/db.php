<?php

require "config.php";

try 
{
    $con = new PDO(DSN, DBUSER, DBPASS);
} 
catch (PDOException $e) 
{
    die("Database connection failed: " . $e->getMessage());
}

?>