<?php
/*
 * Displays a list of item summaries, 
 * each summary a link to the items's details.
 * The list may be for a particular category,
 * or the result of a particular query.
 */
require '/usr/local/Smarty/libs/Smarty.class.php';
require "includes/defs.php";

$id = $_GET['id'];           # category id

$smarty = new Smarty;

if (! empty($id)) {
    $category = getCategory($id);
    $items = getItemList($id);
    $smarty->assign("category",$category);
} else if (! empty($summary)) {
    $items = getResultList($summary);
    $smarty->assign("summary",$summary);    
} else {
    $items = array();
}

$smarty->assign("items",$items);
$smarty->display("item_list.tpl");
?>
