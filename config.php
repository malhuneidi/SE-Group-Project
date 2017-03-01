<?php
$db_username = 'root';
$db_password = 'root';
$db_name = 'ThaiDb';
$db_host = 'localhost';

$shipping_cost      = 1.50; //shipping cost
$taxes              = array( //We can get rid of taxxes if you want to guys
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );                      
//connect to MySql                      
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);                        
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>

