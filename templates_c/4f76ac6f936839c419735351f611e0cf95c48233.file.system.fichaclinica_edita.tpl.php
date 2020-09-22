<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 15:04:05
         compiled from "engine\view\InfoPanel\pages\FichaClinica\system.fichaclinica_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104445cd076d4b36038-90447977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f76ac6f936839c419735351f611e0cf95c48233' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\FichaClinica\\system.fichaclinica_edita.tpl',
      1 => 1561603800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104445cd076d4b36038-90447977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd076d4b70996_38659924',
  'variables' => 
  array (
    'Anamneses' => 0,
    'PATH' => 0,
    'pacienteid' => 0,
    'Ana' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd076d4b70996_38659924')) {function content_5cd076d4b70996_38659924($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Ana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Ana']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Anamneses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Ana']->key => $_smarty_tpl->tpl_vars['Ana']->value){
$_smarty_tpl->tpl_vars['Ana']->_loop = true;
?><?php } ?>

<div ng-controller="PainelADMController" ng-cloak>
</div>
<div class="step">
    <h1>Anamnese</h1>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/ficha_clinica/EditaAnamnese">
		
		<div class="helper-display-none">
			<input type="text" name="pacienteid" value="<?php echo $_smarty_tpl->tpl_vars['pacienteid']->value;?>
">
		</div>
		
		<div>
			<textarea name="texto" style="height:500px;width:100%;"><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Anamnese'];?>
</textarea>
		</div>
		
		<br>
		<div>
		
		<button type="submit" class="btn btn-default">Salvar</button>
		</div>
		</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




</body>
</html><?php }} ?>