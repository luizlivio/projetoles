<?php /* Smarty version Smarty-3.1.13, created on 2019-08-23 10:32:27
         compiled from "engine\view\InfoPanel\pages\FichaClinica\system.fichaclinica_fukunari_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295575cd027d036c4f9-04769735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '696f028bf33ed94a3456766a719f7e27b9f1d1c1' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\FichaClinica\\system.fichaclinica_fukunari_edita.tpl',
      1 => 1565026478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295575cd027d036c4f9-04769735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd027d03c5682_97930636',
  'variables' => 
  array (
    'Anamneses' => 0,
    'Ana' => 0,
    'PATH' => 0,
    'laudoid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd027d03c5682_97930636')) {function content_5cd027d03c5682_97930636($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
/info/ficha_clinica/EditaAnamneseFukunari">
		
		<h3>Avaliação</h3>
		<div class="helper-display-none">
			<input type="text" name="laudoid" value="<?php echo $_smarty_tpl->tpl_vars['laudoid']->value;?>
">
		</div>
		
		<div>
			<label>Queixa e Duração</label>
			<textarea name="queixa" style="height:200px;width:100%;"><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Queixa'];?>
</textarea>
		</div>
		
		<div>
			<label>Escala de Dor (Antes do tratamento)</label>
			<select name="dorantes" class="form-control">
				<option value="sem dor">sem dor</option>
				<option value="dor leve" <?php if ($_smarty_tpl->tpl_vars['Ana']->value['DorAntes']=="dor leve"){?>selected<?php }?>>dor leve</option>
				<option value="dor moderada" <?php if ($_smarty_tpl->tpl_vars['Ana']->value['DorAntes']=="dor moderada"){?>selected<?php }?>>dor moderada</option>
				<option value="dor intensa" <?php if ($_smarty_tpl->tpl_vars['Ana']->value['DorAntes']=="dor intensa"){?>selected<?php }?>>dor intensa</option>
			</select>
		</div>
		
		<div>
			<label>Programação</label>
			<textarea name="programacao" style="height:200px;width:100%;"><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Programacao'];?>
</textarea>
		</div>
		
		<div class="helper-display-none">
			<label>Escala de Dor (Depois do tratamento)</label>
			<select name="dordepois" class="form-control">
				<option value="sem dor">sem dor</option>
				<option value="dor leve" <?php if ($_smarty_tpl->tpl_vars['Ana']->value['DorDepois']=="dor leve"){?>selected<?php }?>>dor leve</option>
				<option value="dor moderada" <?php if ($_smarty_tpl->tpl_vars['Ana']->value['DorDepois']=="dor moderada"){?>selected<?php }?>>dor moderada</option>
				<option value="dor intensa" <?php if ($_smarty_tpl->tpl_vars['Ana']->value['DorDepois']=="dor intensa"){?>selected<?php }?>>dor intensa</option>
			</select>
		</div>
		
		<br>
		<div>
		
		<button type="submit" class="btn btn-default">Salvar</button>
		</div>
		</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>