<?php

require "config.php";

try 
{
    $con = new PDO(DSN_Local, DBUSER, DBPASS);
} 
catch (PDOException $e) 
{
    //die("Database connection failed: " . $e->getMessage());

    $con = new PDO(DSN_Deployed, DBUSER, DBPASS);
}

?>