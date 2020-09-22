<?php /* Smarty version Smarty-3.1.13, created on 2019-06-28 09:26:23
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_abandonos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250735cdd6892168286-48129922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73d20a1c0cb641dc938ac8bbcf33eff0f1747cae' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_abandonos.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250735cdd6892168286-48129922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cdd689248dd97_67268975',
  'variables' => 
  array (
    'Abandonos' => 0,
    'Abandono' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdd689248dd97_67268975')) {function content_5cdd689248dd97_67268975($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Relatório de Abandono</h1>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Nome do Paciente</th>
			<th>Data</th>
			<th>Número de Faltas</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Abandono'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Abandono']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Abandonos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Abandono']->key => $_smarty_tpl->tpl_vars['Abandono']->value){
$_smarty_tpl->tpl_vars['Abandono']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Abandono']->value['PacienteId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Abandono']->value['NomePaciente'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Abandono']->value['Data'],"%d/%m/%Y");?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Abandono']->value['Faltas'];?>
</td>
        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>