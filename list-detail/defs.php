<?php
/*
 * Function definitions for list-detail example.
 */

require "includes/db_defs.php";

/* Adds a new item from form data and returns its id. */
function add_item($summary,$details) {
    // Sanitise input data
    $summary = mysql_escape_string($summary);
    $details = mysql_escape_string($details);
    
    $connection = mysql_open();
    
    // Execute query
    $query = "insert into ld_items (summary,details) " .
             "values ('$summary','$details')";
    $results = mysql_query($query,$connection) or show_error();
    $id = mysql_insert_id();
    
    mysql_close($connection) or show_error();
    return $id;
}

/* Gets list of items that match $str, if present, in databse. */
function get_items($str) {
    $connection = mysql_open();

    $query = "select id, summary from ld_items ";
    if ($str) {
        $query .= "where summary like '%$str%' or details like '%$str%' ";
    }
    $query .=  "order by id";
    // print "$query<br>\n";
    $result = mysql_query($query,$connection) or show_error();

    $items = array();
    while ($item = mysql_fetch_array($result)) {
        $items[] = $item;
    }

    mysql_close($connection) or show_error();
    return $items;
}

/* Gets item with the given id. */
function get_item($id) {
    $connection = mysql_open();

    $query = "select id, summary, details from ld_items where id = $id";
    $result = mysql_query($query,$connection) or show_error();

    if (mysql_num_rows($result) != 1) {
        echo "Invalid query or result: $query\n";
        die();
    }
    $item = mysql_fetch_array($result);

    mysql_close($connection) or show_error();
    return $item;
}

/* Updates an item with the given id using the given summary and details. */
	function update_item($id,$summary,$details) {
    $connection = mysql_open();
    $summary = mysql_escape_string($summary);
    $details = mysql_escape_string($details);
    $query = "update ld_items " .
             "set summary = '$summary', details = '$details' " .
             "where id = $id";
    $result = mysql_query($query, $connection) or show_error();
    mysql_close($connection) or show_error();
}

/* Deletes the item with the given id. */
	function delete_item($id) {
    $connection = mysql_open();
    $query = "delete from items where id = $ld_items";
    $result = mysql_query($query, $connection) or show_error();
    mysql_close($connection) or show_error();
}

