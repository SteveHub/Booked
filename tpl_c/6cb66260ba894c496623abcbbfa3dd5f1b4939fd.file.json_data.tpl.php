<?php /* Smarty version Smarty-3.1.16, created on 2016-05-07 03:10:14
         compiled from "/var/www/html/booked/tpl/json_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178177390572d5c963dc286-04245914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cb66260ba894c496623abcbbfa3dd5f1b4939fd' => 
    array (
      0 => '/var/www/html/booked/tpl/json_data.tpl',
      1 => 1462023424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178177390572d5c963dc286-04245914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_572d5c963ecf40_34028739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572d5c963ecf40_34028739')) {function content_572d5c963ecf40_34028739($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?><?php }} ?>
