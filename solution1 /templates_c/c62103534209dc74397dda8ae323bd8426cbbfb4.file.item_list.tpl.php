<?php /* Smarty version Smarty-3.1.12, created on 2013-04-13 16:04:29
         compiled from "./templates/item_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20144769855168e53461f535-41867257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c62103534209dc74397dda8ae323bd8426cbbfb4' => 
    array (
      0 => './templates/item_list.tpl',
      1 => 1365833065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20144769855168e53461f535-41867257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5168e5346bd7c0_74841384',
  'variables' => 
  array (
    'category' => 0,
    'summary' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5168e5346bd7c0_74841384')) {function content_5168e5346bd7c0_74841384($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>
<title>Items: Show search results</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles/items.css">
</head>

<body>
<?php if ($_smarty_tpl->tpl_vars['category']->value){?>
    <h1>Items in category '<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
'</h1>
<?php }else{ ?>
    <h1>Results of search for '<?php echo $_smarty_tpl->tpl_vars['summary']->value;?>
'</h1>
<?php }?>
    
<?php if ($_smarty_tpl->tpl_vars['items']->value){?>
<ul>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li><a href="item_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>
</a>
<?php } ?>
</ul>
<?php }else{ ?>
<p>No items.</p>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['category']->value){?>
    <p>
    <a href="add_item.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">Add a new item to this category</a>
<?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

<p>
<a href="category_list.php">Home</a>
</body>
</html>
<?php }} ?>