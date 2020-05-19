<?php
include('serverconfig.php');


//Initialize database and buy function
$buy = new Shop($server_ip,$websender_password,$websender_port);
$buydb = new Shopdb($database_hosts, $database_user, $database_password, $database_name);
