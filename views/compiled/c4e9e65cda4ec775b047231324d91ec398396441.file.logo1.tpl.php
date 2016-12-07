<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 11:08:57
         compiled from "views\logo1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1880858170bab933244-21186456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4e9e65cda4ec775b047231324d91ec398396441' => 
    array (
      0 => 'views\\logo1.tpl',
      1 => 1477908536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1880858170bab933244-21186456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58170bab97f4c1_97494863',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58170bab97f4c1_97494863')) {function content_58170bab97f4c1_97494863($_smarty_tpl) {?><section>

  <div class="reus">
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>

<div class="reus1">
  <img src=images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['borussiaimage'];?>
 id="reussie">
<h1 id="reussietext"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['borussianame'];?>
</h1>
<p id="reussiebio"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['borussiabio'];?>
</p>

<hr>

</div>
<?php } ?>

</div>



</section>
<?php }} ?>
