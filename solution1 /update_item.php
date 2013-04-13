<?php
/*
 * Updates item with given id.
 */
require '/usr/local/Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$id = $_GET['id'];       # item id
$error = $_GET['error']; # for error reporting

$item = getItem($id);
$category = $item['category'];
$categories = getCategoryList();

$smarty = new Smarty;

$smarty->assign('item',$item);
$smarty->assign('category',$category);
$smarty->assign('categories',$categories);
$smarty->assign('error',$error);

$smarty->display('update_item.tpl');
?>
