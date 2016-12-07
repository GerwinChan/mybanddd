<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 11:08:21
         compiled from "views\logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2124358163f7615ea87-43081755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9a702009e656795b4157a8c318b041643041019' => 
    array (
      0 => 'views\\logo.tpl',
      1 => 1477908500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2124358163f7615ea87-43081755',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58163f7633ab89_80870249',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58163f7633ab89_80870249')) {function content_58163f7633ab89_80870249($_smarty_tpl) {?><section>

  <div class="ron">
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>

<div class="ron1">
  <img src=images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['pictures'];?>
 id="ronnie">

<h1 id="ronnietext"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['playername'];?>
</h1>
<p id="ronniebio"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['bio'];?>
</p>
<hr>


</div>
<?php } ?>

</div>



</section>
<?php }} ?>
