<?php
$con = new mysqli('localhost', 'cpanelusername_databaseusername', 'password', 'cpanelusername_databasename');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>