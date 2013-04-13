<?php /* Smarty version Smarty-3.1.12, created on 2013-04-13 15:37:02
         compiled from "./templates/item_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10539083605168eefe668b68-33105025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e42dead8a9632070fd5f182aa173d46480408a41' => 
    array (
      0 => './templates/item_detail.tpl',
      1 => 1365826634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10539083605168eefe668b68-33105025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5168eefe6cc7f6_88005761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5168eefe6cc7f6_88005761')) {function content_5168eefe6cc7f6_88005761($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Items: Show item details</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles/items.css">
</head>

<body>
<h1><?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>
</h1>
    
<p>
<?php echo $_smarty_tpl->tpl_vars['item']->value['details'];?>
 

<p>
(<a href="item_list.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>)

<p>
<a href="delete_item.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Delete this item</a>
<p>
<a href="update_item.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Update this item</a>
<p>
<a href="category_list.php">Home</a>
</body>
</html>
<?php }} ?>