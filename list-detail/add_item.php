<?php
/*
 * Adds new ite, possibly to given category.
 */
require_once "Smarty.class.php";
require "includes/defs.php";

$id = $_GET['id'];       # category id, if any
$error = $_GET['error']; # for error reporting

$categories = getCategoryList();

$smarty = new Smarty;
$smarty->assign('id',$id);
$smarty->assign('error',$error);
$smarty->assign('categories',$categories);
$smarty->display('add_item.tpl');
?>


