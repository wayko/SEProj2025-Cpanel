<?php
$con = new mysqli('localhost', 'cpanel-username_databaseusername', 'password', 'cpanel-username_databasename');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>