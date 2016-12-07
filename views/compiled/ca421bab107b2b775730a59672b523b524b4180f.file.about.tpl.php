<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 14:59:34
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:793357fb5983b4fe01-46101056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1477659561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '793357fb5983b4fe01-46101056',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fb5983cb9d59_82248067',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fb5983cb9d59_82248067')) {function content_57fb5983cb9d59_82248067($_smarty_tpl) {?><section>

<img src="images/UEFA_Champions_League_logo_2.svg.png" id="champ" alt="error44">
<div class="Speelschema">


<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<div class="opmaak">

    <p id="titel"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['nummer'];?>
</p>

<p id="over"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Land'];?>
</p>
<hr id="hr1">
<p id="over"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Clubs'];?>
</p>
<hr id="hr1">

<p id="over"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Wedstrijden'];?>
</p>
<hr id="hr1">
<p id="over"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date'];?>
</p>
<hr id="hr1">
</div>



<?php } ?>


</div>



</section>
<?php }} ?>
