<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 12:05:52
         compiled from "views\logo2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:658758172378a48974-30984553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9056c1de343c283823f2ba140735255623c34016' => 
    array (
      0 => 'views\\logo2.tpl',
      1 => 1477911936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '658758172378a48974-30984553',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58172378a9a337_47830133',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58172378a9a337_47830133')) {function content_58172378a9a337_47830133($_smarty_tpl) {?><section>

  <div class="mannie">
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>

<div class="mancity">
  <img src=images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['manimage'];?>
 id="mannie1">
<h1 id="mannie2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['manname'];?>
</h1>
<p id="mannie3"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['manbio'];?>
</p>

<hr>

</div>
<?php } ?>

</div>



</section>
<?php }} ?>
