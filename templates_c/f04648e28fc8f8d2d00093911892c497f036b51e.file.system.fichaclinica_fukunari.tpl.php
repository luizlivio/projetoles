<?php /* Smarty version Smarty-3.1.13, created on 2019-08-06 13:42:15
         compiled from "engine\view\InfoPanel\pages\FichaClinica\system.fichaclinica_fukunari.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318415cd03216250f88-96582302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04648e28fc8f8d2d00093911892c497f036b51e' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\FichaClinica\\system.fichaclinica_fukunari.tpl',
      1 => 1565026462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318415cd03216250f88-96582302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd0321628b208_30656195',
  'variables' => 
  array (
    'Anamneses' => 0,
    'Ana' => 0,
    'PATH' => 0,
    'pacienteid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0321628b208_30656195')) {function content_5cd0321628b208_30656195($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
	<h3>Paciente: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['NomePaciente'];?>
</h3>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/ficha_clinica/NovaAnamneseFukunari" Onsubmit="btn.disabled=true">
		
		<h3>Avaliação</h3>
		<div class="helper-display-none">
			<input type="text" name="pacienteid" value="<?php echo $_smarty_tpl->tpl_vars['pacienteid']->value;?>
">
		</div>
		
		<div>
			<label>Queixa e Duração</label>
			<textarea name="queixa" style="height:200px;width:100%;"></textarea>
		</div>
		
		<div>
			<label>Escala de Dor (Antes do tratamento)</label>
			<select name="dorantes" class="form-control">
				<option value="sem dor">sem dor</option>
				<option value="dor leve">dor leve</option>
				<option value="dor moderada">dor moderada</option>
				<option value="dor intensa">dor intensa</option>
			</select>
		</div>
		
		<div>
			<label>Programação</label>
			<textarea name="programacao" style="height:200px;width:100%;"></textarea>
		</div>
		
		<div class="helper-display-none">
			<label>Escala de Dor (Depois do tratamento)</label>
			<select name="dordepois" class="form-control">
				<option value="sem dor">sem dor</option>
				<option value="dor leve">dor leve</option>
				<option value="dor moderada">dor moderada</option>
				<option value="dor intensa">dor intensa</option>
			</select>
		</div>
		
		<br>
		<div>
		
		<button name="btn" type="submit" class="btn btn-default">Salvar</button>
		</div>
		</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>