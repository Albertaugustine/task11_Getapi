<?php

//database connection
$mysqli = new mysqli("localhost","root","","intern");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if(!mysqli_select_db($mysqli,'intern'))
{
  echo 'Not Selected the Database';
}

?>
