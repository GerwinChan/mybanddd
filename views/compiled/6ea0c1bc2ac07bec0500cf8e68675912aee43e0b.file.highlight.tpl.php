<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 14:51:12
         compiled from "views\highlight.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38975819cdd712ad17-20290803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ea0c1bc2ac07bec0500cf8e68675912aee43e0b' => 
    array (
      0 => 'views\\highlight.tpl',
      1 => 1478094671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38975819cdd712ad17-20290803',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5819cdd7170c20_74465471',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5819cdd7170c20_74465471')) {function content_5819cdd7170c20_74465471($_smarty_tpl) {?><section>


<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>


<div class="as" id="df">

<h1 id="laliga"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['highlightstitel'];?>
</h1>
<p id="ligadate"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['highlightsdate'];?>
</p>
<HR>
  <div id="videoinstelling">
<video width="500" height="200" controls>
    <source src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['video'];?>
" type="video/mp4">
</video>

</div>
</div>

</div>
<?php } ?>





</section>
<?php }} ?>
