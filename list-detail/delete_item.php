<?php
/*
 * Deletes item with given id.
 */
require_once "Smarty.class.php";
require "includes/defs.php";

$id = $_GET['id'];
$item = getItem($id);
$category = $item['category'];

deleteItem($id);

header("Location: item_list.php?id=$category"); # alias for index.php
exit;
?>


