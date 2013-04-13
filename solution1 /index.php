<?php
/*
 * Displays a list of category names, 
 * each name a link to the item list for that category.
 */
require '/usr/local/Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$categories = getCategoryList();

$smarty = new Smarty;
$smarty->assign("categories",$categories);
$smarty->display("category_list.tpl");
?>

