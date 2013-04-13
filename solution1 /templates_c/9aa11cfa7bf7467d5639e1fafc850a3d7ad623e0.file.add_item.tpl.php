<?php /* Smarty version Smarty-3.1.12, created on 2013-04-13 14:55:31
         compiled from "./templates/add_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6534580555168e54384f8d9-32477692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa11cfa7bf7467d5639e1fafc850a3d7ad623e0' => 
    array (
      0 => './templates/add_item.tpl',
      1 => 1365828577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6534580555168e54384f8d9-32477692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5168e54389f1e6_67859850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5168e54389f1e6_67859850')) {function content_5168e54389f1e6_67859850($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>Add item</title>
<meta  charset="utf-8">
<link rel="stylesheet" type="text/css" href="../wp.css">
</head>

<body>
<h1>Add new item</h1>

<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php }?>

<form method="post" action="add_item_action.php">
    <table>
    <tr><td>Summary:</td> <td><input type="text" name="summary"></td></tr>
    <tr><td>Details:</td> <td><textarea name="details"></textarea></td></tr>
    <tr><td colspan=2><input type="submit" value="Add item">
    </table>
</form>
</body>
</html>
<?php }} ?>