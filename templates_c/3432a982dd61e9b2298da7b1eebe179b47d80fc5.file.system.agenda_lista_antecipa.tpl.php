<?php /* Smarty version Smarty-3.1.13, created on 2019-07-18 15:03:59
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_lista_antecipa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269595cd04ea22a0cb8-97859602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3432a982dd61e9b2298da7b1eebe179b47d80fc5' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_lista_antecipa.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269595cd04ea22a0cb8-97859602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd04ea23130e8_17015404',
  'variables' => 
  array (
    'Livros' => 0,
    'Liv' => 0,
    'Agendamento' => 0,
    'Agen' => 0,
    'contagem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd04ea23130e8_17015404')) {function content_5cd04ea23130e8_17015404($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Lista de Pacientes que desejam antecipar</h1>
	
	<?php  $_smarty_tpl->tpl_vars['Liv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv']->key => $_smarty_tpl->tpl_vars['Liv']->value){
$_smarty_tpl->tpl_vars['Liv']->_loop = true;
?>
	<h3><?php echo $_smarty_tpl->tpl_vars['Liv']->value['Descricao'];?>
</h3>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Data</th>
			<th>Hora</th>
			<th>Paciente</th>
			<th>Telefone</th>
			<th>Procedimento</th>
			<th>Convênio</th>
			<th>Transferir</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Agen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Agen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Agendamento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Agen']->key => $_smarty_tpl->tpl_vars['Agen']->value){
$_smarty_tpl->tpl_vars['Agen']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['Liv']->value['LivroId']==$_smarty_tpl->tpl_vars['Agen']->value['LivroId']){?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Agen']->value['Id'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Agen']->value['Data'],"%d/%m/%Y");?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Agen']->value['Hora'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Agen']->value['NomePaciente'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['Agen']->value['Celular']==''){?><?php echo $_smarty_tpl->tpl_vars['Agen']->value['Telefone'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['Agen']->value['Celular'];?>
<?php }?></td>
			<td><?php echo $_smarty_tpl->tpl_vars['Agen']->value['Procedimento'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Agen']->value['Convenio'];?>
</td>
			<td><a href="/info/agenda/transferir/<?php echo $_smarty_tpl->tpl_vars['Agen']->value['Id'];?>
/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Agen']->value['Data'],"%d");?>
/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Agen']->value['Data'],"%m");?>
/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Agen']->value['Data'],"%Y");?>
/<?php echo $_smarty_tpl->tpl_vars['Agen']->value['LivroId'];?>
" class="btn btn-sm btn-primary">Transferir</a></td>
        </tr>
		<tr>
            <td colspan="8"><b>Observação:</b> <?php echo $_smarty_tpl->tpl_vars['Agen']->value['Observacoes'];?>
</td>
        </tr>
		<?php $_smarty_tpl->tpl_vars['contagem'] = new Smarty_variable($_smarty_tpl->tpl_vars['Agen']->value['Conta'], null, 0);?>
		<?php }?>
		<?php } ?>
    </table>
	
	<h4>Total de Pacientes: <?php echo $_smarty_tpl->tpl_vars['contagem']->value;?>
 desejam antecipar.</h4>
	</br>
	<?php } ?>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>