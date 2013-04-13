<?php
/*
 * Updates item from form data.
 */
require '/usr/local/Smarty/libs/Smarty.class.php';
require "includes/defs.php";

# Get form data
$id = $_POST['id'];
$summary = $_POST['summary'];
$details = $_POST['details'];
$category = $_POST['category'];

# Check data is valid
if (empty($summary)) {
    $error = "Summary must be nonempty.";
    header("Location: update_item.php?id=$id&error=$error");
    exit;
}

# Perform update with data
updateItem($id, $summary,$details,$category);

header("Location: item_detail.php?id=$id"); 
exit;
?>


