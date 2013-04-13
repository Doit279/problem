<?php
/*
 * Displays details of item with given id.
 */
require '/usr/local/Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$id = $_GET['id'];
$item = getItem($id);
$category = getCategory($item['category']);

$smarty = new Smarty;
$smarty->assign("item",$item);
$smarty->assign("category",$category);
$smarty->display("item_detail.tpl");
?>

