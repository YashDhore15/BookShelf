<?php

define("DBHOST", "localhost");
define("DBNAME", "bookshelf");
define("DBUSER", "customer");
define("DBPASS", "customer123");

define("DSN_Local", "pgsql:host=".DBHOST.";dbname=".DBNAME);
define("DSN_Deployed", "pgsql:host="."100.71.3.101".";dbname=".DBNAME);

?>
