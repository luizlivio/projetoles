<?php /* Smarty version Smarty-3.1.13, created on 2019-08-05 14:41:43
         compiled from "engine\view\InfoPanel\pages\FichaClinica\system.fichaclinica_fukunari_salva.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312365cd0199bd21047-95708404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ec264eeaf0ac5a55a521da4ede573ae129545e8' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\FichaClinica\\system.fichaclinica_fukunari_salva.tpl',
      1 => 1565026526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312365cd0199bd21047-95708404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd0199bd7cc15_44473694',
  'variables' => 
  array (
    'Anamneses' => 0,
    'Ana' => 0,
    'Evolucoes' => 0,
    'Evolucao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0199bd7cc15_44473694')) {function content_5cd0199bd7cc15_44473694($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php  $_smarty_tpl->tpl_vars['Ana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Ana']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Anamneses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Ana']->key => $_smarty_tpl->tpl_vars['Ana']->value){
$_smarty_tpl->tpl_vars['Ana']->_loop = true;
?><div class="step">	<h1>Ficha do Atendimento</h1>	<div><a href="/info/ficha_clinica/fukunariedita/<?php echo $_smarty_tpl->tpl_vars['Ana']->value['Id'];?>
" class="btn btn-sm btn-warning">Editar Avaliação</a></div>		<div class="row">		<div class="col-md-1">			<h3>Id</h3>			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
</label>		</div>		<div class="col-md-11">			<h3>Nome</h3>			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['NomePaciente'];?>
</label>		</div>	</div>		<div class="row">		<div class="col-md-8">			<h3>Queixa</h3>			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Queixa'];?>
</label>		</div>				<div class="col-md-4">			<h3>Classificação da Dor (Antes do Tratamento)</h3>			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['DorAntes'];?>
</label>		</div>			</div>		<div class="row">		<div class="col-md-8">			<h3>Programacao</h3>			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Programacao'];?>
</label>		</div>		<div class="helper-display-none">			<h3>Classificação da Dor (Depois do Tratamento)</h3>			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['DorDepois'];?>
</label>		</div>	</div>		<h1>Evolução</h1>	<div><a href="/info/ficha_clinica/fukunarinovaevolucao/<?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
" class="btn btn-sm btn-primary">Nova Evolução</a></div>		<table class="table table-hover table-stripped">		<thead>        <tr>            <th>ID</th>            <th>Data</th>			<th>Queixa</th>			<th>Dor (Antes)</th>			<th>Programação</th>			<th>Editar</th>        </tr>		</thead>		<?php  $_smarty_tpl->tpl_vars['Evolucao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Evolucao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Evolucoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Evolucao']->key => $_smarty_tpl->tpl_vars['Evolucao']->value){
$_smarty_tpl->tpl_vars['Evolucao']->_loop = true;
?>		<tr>			<td><?php echo $_smarty_tpl->tpl_vars['Evolucao']->value['Id'];?>
</td>			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Evolucao']->value['Data'],"%d/%m/%Y");?>
</td>			<td><?php echo $_smarty_tpl->tpl_vars['Evolucao']->value['Queixa'];?>
</td>			<td><?php echo $_smarty_tpl->tpl_vars['Evolucao']->value['DorAntes'];?>
</td>			<td><?php echo $_smarty_tpl->tpl_vars['Evolucao']->value['Programacao'];?>
</td>			<td><a href="/info/ficha_clinica/fukunariedita/<?php echo $_smarty_tpl->tpl_vars['Evolucao']->value['Id'];?>
" class="btn btn-sm btn-warning">Editar</a></td>		</tr>		<?php } ?>	</table>		<hr /></div></br></br><?php } ?><?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>