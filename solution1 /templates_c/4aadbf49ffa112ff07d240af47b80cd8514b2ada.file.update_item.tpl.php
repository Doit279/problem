<?php /* Smarty version Smarty-3.1.12, created on 2013-04-13 15:37:03
         compiled from "./templates/update_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1289647705168eeffe90013-23418696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aadbf49ffa112ff07d240af47b80cd8514b2ada' => 
    array (
      0 => './templates/update_item.tpl',
      1 => 1365826634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1289647705168eeffe90013-23418696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'item' => 0,
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5168eefff25a67_33210430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5168eefff25a67_33210430')) {function content_5168eefff25a67_33210430($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Items: Update item</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles/items.css">
</head>

<body>
<h1>Update item</h1>

<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
    <p class="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php }?>

<form method="post" action="update_item_action.php">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
<table>
    <tr>
	<td>Summary: </td>
	<td><input type="text" name="summary" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>
"></td>
    </tr>
    <tr>
	<td>Details: </td>
        <td><textarea name="details"><?php echo $_smarty_tpl->tpl_vars['item']->value['details'];?>
</textarea></td>
    </tr>
    <tr>
	<td>Category: </td?
	<td>
	    <select name="category">
	    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
	        <option value=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['category']->value['id']==$_smarty_tpl->tpl_vars['item']->value['category']){?> selected="selected" <?php }?> > <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
 </option> 
	    <?php } ?>
	    </select>
	</td>
    </tr>
    <tr>
        <td colrows=2>
	    <input type="submit" value="Update item">
	</td>
    </tr>
</table>
</form>

<p>
<a href="category_list.php">Home</a>
</body>
</html>
<?php }} ?>