<?php
/*
 * Adds new item from form data.
 */
require "/usr/local/Smarty/libs/Smarty.class.php";
require "includes/defs.php";

# Get form data
$summary = $_POST['summary'];
$details = $_POST['details'];
$category = $_POST['category'];

# Check data is valid
if (empty($summary)) {
    $error = "Summary must be nonempty.";
    header("Location: add_item.php?error=$error");
    exit;
}

# Add item with form data
$id = addItem($summary,$details,$category);

header("Location: item_detail.php?id=$id"); 
exit;
?>

