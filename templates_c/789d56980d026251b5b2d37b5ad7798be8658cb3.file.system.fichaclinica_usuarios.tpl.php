<?php /* Smarty version Smarty-3.1.13, created on 2019-05-09 01:48:18
         compiled from "engine\view\InfoPanel\pages\FichaClinica\system.fichaclinica_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246565cd3b112441ed2-93295615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '789d56980d026251b5b2d37b5ad7798be8658cb3' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\FichaClinica\\system.fichaclinica_usuarios.tpl',
      1 => 1557374453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246565cd3b112441ed2-93295615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Anamneses' => 0,
    'Ana' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd3b112486442_50698730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd3b112486442_50698730')) {function content_5cd3b112486442_50698730($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Ficha Clínica</h1>
	<br>
	<br>
	<?php  $_smarty_tpl->tpl_vars['Ana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Ana']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Anamneses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Ana']->key => $_smarty_tpl->tpl_vars['Ana']->value){
$_smarty_tpl->tpl_vars['Ana']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Anamnese'];?>
<?php } ?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>