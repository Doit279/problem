<?php
/*
 * Adds new item from form data.
 */
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
$id = add_item($summary,$details);

header("Location: item_detail.php?id=$id"); 
exit;
?>

