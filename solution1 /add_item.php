<?php
/*
 * Adds new ite, possibly to given category.
 */
require '/usr/local/Smarty/libs/Smarty.class.php';
require "includes/defs.php";

if (isset($_GET['error'])) {
    $error = $_GET['error']; # for error reporting
} else {
    $error = "";
}

$categories = getCategoryList();

$smarty = new Smarty;
$smarty->assign('error',$error);
$smarty->assign('categories',$categories);
$smarty->display('add_item.tpl');
?>


