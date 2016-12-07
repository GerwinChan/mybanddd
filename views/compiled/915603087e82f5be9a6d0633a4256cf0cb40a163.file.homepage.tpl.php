<?php /* Smarty version Smarty-3.1.18, created on 2016-11-06 13:11:43
         compiled from "views\homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4423581af09e0658d0-05261346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '915603087e82f5be9a6d0633a4256cf0cb40a163' => 
    array (
      0 => 'views\\homepage.tpl',
      1 => 1478434302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4423581af09e0658d0-05261346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581af09e0d3744_33190797',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581af09e0d3744_33190797')) {function content_581af09e0d3744_33190797($_smarty_tpl) {?><section>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>

<article>



<img src="images/cristiano_ronaldo_real_madrid_football_104802_3840x2400.jpg" width="100%" height="100%">


</article>


<?php } ?>



</section>
<?php }} ?>
