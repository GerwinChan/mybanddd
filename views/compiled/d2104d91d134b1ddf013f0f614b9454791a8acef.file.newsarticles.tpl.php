<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 12:16:48
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:846357f228b813f762-68014177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1478171807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '846357f228b813f762-68014177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f228b8176856_15585513',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f228b8176856_15585513')) {function content_57f228b8176856_15585513($_smarty_tpl) {?><section>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>

<article>
  <div class="test">
<h1 id="pepetitel"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
<hr>
<img src=images/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
 id="test4">
<hr>
<p id="test2"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p>
<h2 id="test3"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</h2>
</div>
</article>


<?php } ?>



</section>


<ul class="pagenr">
  <li><a href="?action=home&pagenr=1">1</a></li>
  <li><a href="?action=home&pagenr=2">2</a></li>
    <li><a href="?action=home&pagenr=3">3</a></li>
      <li><a href="?action=home&pagenr=4">4</a></li>

</ul>
<?php }} ?>
