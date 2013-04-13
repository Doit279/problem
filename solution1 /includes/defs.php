<?php

// Read HOST, USER, PASSWORD, DATABASE from file

/* Show MySQL error. */
function showerror() {
  die("Error ". mysql_errno() . " : " . mysql_error());
}

/* Open connection and select database. */
function mysql_open() {
  $connection = @ mysql_connect("   ","   ", "    ")
      or die("Could not connect");
  mysql_select_db("   ", $connection)
      or showerror();
  return $connection;
}

/* Gets the list of categories. */
function getCategoryList() {
    $connection = mysql_open();
    
    $query = "select * from categories";
    $results = mysql_query($query,$connection) or showerror();
    $categories = array();
    while ($row = mysql_fetch_array($results)) {
        $categories[] = $row;
    }
    mysql_close($connection) or showerror();

    return $categories;
}

/* Gets the category with a given id */
function getCategory($id) {
    $connection = mysql_open();
    
    $query = "select * from categories where id = $id";
    $results = mysql_query($query,$connection) or showerror();
    $category = mysql_fetch_array($results);
    
    mysql_close($connection) or showerror();
    
    return $category;
}


/* Adds a new item from form data and returns its id. */
function add_item($summary,$details,$category) {
    // Sanitise input data
    $summary = mysql_escape_string($summary);
    $details = mysql_escape_string($details);

    // Execute query
    $connection = mysql_open();
    
    $query = "insert into items " .
             "value (null, '$summary', '$details', $category)";
    $results = mysql_query($query,$connection) or showerror();
    $id = mysql_insert_id();
    
    mysql_close($connection) or showerror();
    
    return $id;
}


/* Gets the item with a given id */
function getItem($id) {
    $connection = mysql_open();
    
    $query = "select * from items where id = $id";
    $results = mysql_query($query,$connection) or showerror();
    $item = mysql_fetch_array($results);
    
    mysql_close($connection) or showerror();
    
    return $item;
}


/* Gets the list of items with a given category id. */
function getItemList($id) {
    $connection = mysql_open();
    
    $query = "select * from items where category = $id";
    $results = mysql_query($query,$connection) or showerror();
    $items = array();
    while ($row = mysql_fetch_array($results)) {
        $items[] = $row;
    }
    mysql_close($connection) or showerror();

    return $items;
}


/* Gets the list of items that match a given query. */
function getResultList($summary) {
    // Sanitise input data
    $summary = mysql_escape_string($summary);

    // Execute query
    $connection = mysql_open();
    
    $query = "select * from items where summary like '%$summary%'";
    $results = mysql_query($query,$connection) or showerror();
    $items = array();
    while ($row = mysql_fetch_array($results)) {
        $items[] = $row;
    }
    mysql_close($connection) or showerror();
    
    return $items;
}


/* Deletes the item with a given id. */
function deleteItem($id) {
    $connection = mysql_open();
    
    $query = "delete from items where id = $id";
    $results = mysql_query($query,$connection) or showerror();
    mysql_close($connection) or showerror();
    
    return $results; # unused
}


/* Updates the item with a given id using given values. */
function updateItem($id, $summary,$details,$category) {
    // Sanitise input data
    $summary = mysql_escape_string($summary);
    $details = mysql_escape_string($details);
    
    // Execute query
    $connection = mysql_open();
    
    $query = "update items " .
             "set summary = '$summary', " .
                 "details = '$details', " .
                 "category = $category " .
             "where id = $id";
    $results = mysql_query($query,$connection) or showerror();
    mysql_close($connection) or showerror();
    
    return id;
}
