<?php
//Your config file here.
$sql_Enabled = false;
$sql_host = "localhost";
$sql_username = "";
$sql_password = "";
$sql_database = "";


//----------------------------------------
if ($sql_Enabled == true)
{
  require_once("mysql.pdo.php");
}

 ?>
