<?php
try {
$conn = new PDO("mysql:host=$sql_host;dbname=$sql_database", $sql_username, $sql_password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  echo "<b style='background: red;'>Connection failed: \n" . $e->getMessage() . "</b>";
}
?>
