<?php /* Smarty version Smarty-3.1.13, created on 2019-05-09 01:48:15
         compiled from "engine\view\InfoPanel\pages\FichaClinica\system.fichaclinica_anamneses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300785cd3b10febd890-06769382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58f1290b8cad3d85a3a75af911e4dd87fa13778' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\FichaClinica\\system.fichaclinica_anamneses.tpl',
      1 => 1557374453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300785cd3b10febd890-06769382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Pacientes' => 0,
    'Paciente' => 0,
    'Anamneses' => 0,
    'Ana' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd3b10ff16f46_57296290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd3b10ff16f46_57296290')) {function content_5cd3b10ff16f46_57296290($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Ficha do Paciente</h1>
	
	<?php  $_smarty_tpl->tpl_vars['Paciente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Paciente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pacientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Paciente']->key => $_smarty_tpl->tpl_vars['Paciente']->value){
$_smarty_tpl->tpl_vars['Paciente']->_loop = true;
?>
	<div class="row">
		<div class="col-md-9">
			<h3>Nome</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Paciente']->value['NomePaciente'];?>
</label>
		</div>

		<div class="col-md-3">
			<h3>Data de Nascimento</h3>
			<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Paciente']->value['DataNasc'],"%d/%m/%Y");?>
</label>
		</div>
	</div>
	<?php } ?>
	
	<hr />
	
	<h1>Anamneses</h1>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>ID</th>
			<th>Médico</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Ana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Ana']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Anamneses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Ana']->key => $_smarty_tpl->tpl_vars['Ana']->value){
$_smarty_tpl->tpl_vars['Ana']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['Ana']->value['AnamneseId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Nome'];?>
</td>
			<td><a href="/info/ficha_clinica/anamnese_usuario/<?php echo $_smarty_tpl->tpl_vars['Paciente']->value['PacienteId'];?>
/<?php echo $_smarty_tpl->tpl_vars['Ana']->value['MedicoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
		</tr>
		<?php } ?>
	</table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>