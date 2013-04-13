<?php /* Smarty version Smarty-3.1.12, created on 2013-04-13 15:26:26
         compiled from "./templates/category_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1847226875168e4a9ed6496-10368657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78930e2cc617ec2e328748b372beec030ac26785' => 
    array (
      0 => './templates/category_list.tpl',
      1 => 1365830783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1847226875168e4a9ed6496-10368657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5168e4aa000173_47419088',
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5168e4aa000173_47419088')) {function content_5168e4aa000173_47419088($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>Items: Show categories</title>
<meta  charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/items.css">
</head>

<body>
<h1>Categories</h1>
    
<?php if ($_smarty_tpl->tpl_vars['categories']->value){?>
<ul>
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
    <li>
	<a href="item_list.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
	(<?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
)
    </li>
<?php } ?>
</ul>
<?php }else{ ?>
<p>No categories defined.</p>
<?php }?>

<p>
<a href="add_item.php">Add a new item</a>

</body>
</html>
<?php }} ?>