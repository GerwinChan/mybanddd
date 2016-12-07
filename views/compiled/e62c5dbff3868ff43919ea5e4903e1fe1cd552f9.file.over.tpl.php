<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 15:04:34
         compiled from "views\over.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160935819ef92dd59e9-52191650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e62c5dbff3868ff43919ea5e4903e1fe1cd552f9' => 
    array (
      0 => 'views\\over.tpl',
      1 => 1478095473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160935819ef92dd59e9-52191650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5819ef92dd7198_82751082',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5819ef92dd7198_82751082')) {function content_5819ef92dd7198_82751082($_smarty_tpl) {?><section>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>

<article>


<hr>
<img src=images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['overimage'];?>
 id="overimages" width="30%">
<p id="overtitel"> <b><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['overbio'];?>
</b></p>
<hr>

</article>


<?php } ?>



</section>
<?php }} ?>
