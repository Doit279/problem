<?php
/* 
 * Database access functions. 
 */

// Include your database access constants here
// require /* to be inserted /*;

/* Show MySQL error. */
function show_error() {
  die("Error ". mysql_errno() . " : " . mysql_error());
}

/* Open connection and select database. */
function mysql_open() {
  $connection = @ mysql_connect("lelelellele", "lelelellel", "lelelelel")
      or die("Could not connect");
  mysql_select_db("lelelel", $connection)
      or show_error();
  return $connection;
}
?>
