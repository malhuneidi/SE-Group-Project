<?php

DEFINE ("HOSTNAME" , "Localhost");
DEFINE ("USERNAME" , "root");
DEFINE ("PASSWORD" , "root");
$database ="ThaiDb";
mysql_pconnect(HOSTNAME, USERNAME , PASSWORD ) or die("No Connection available.");
@mysql_Select_db($database)or die ("Unable to select database");




?>
