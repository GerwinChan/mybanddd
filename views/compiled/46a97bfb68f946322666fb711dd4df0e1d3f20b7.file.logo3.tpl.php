<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 12:18:24
         compiled from "views\logo3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20368581727fc40c798-36320991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a97bfb68f946322666fb711dd4df0e1d3f20b7' => 
    array (
      0 => 'views\\logo3.tpl',
      1 => 1477912655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20368581727fc40c798-36320991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_581727fc45ccf8_80931566',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581727fc45ccf8_80931566')) {function content_581727fc45ccf8_80931566($_smarty_tpl) {?><section>

  <div class="paris">
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>

<div class="mancity">
  <img src=images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['parisimage'];?>
 id="paris1">
<h1 id="paris2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['parisname'];?>
</h1>
<p id="paris3"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['parisbio'];?>
</p>

<hr>

</div>
<?php } ?>

</div>



</section>
<?php }} ?>
