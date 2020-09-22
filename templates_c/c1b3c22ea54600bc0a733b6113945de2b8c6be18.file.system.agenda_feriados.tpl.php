<?php /* Smarty version Smarty-3.1.13, created on 2019-07-02 17:03:27
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_feriados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41205cd3b0ed6507a4-48925411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b3c22ea54600bc0a733b6113945de2b8c6be18' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_feriados.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41205cd3b0ed6507a4-48925411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd3b0ed6c46c6_16118483',
  'variables' => 
  array (
    'status' => 0,
    'Feriados' => 0,
    'Feriado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd3b0ed6c46c6_16118483')) {function content_5cd3b0ed6c46c6_16118483($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Feriado Criado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Feriado Excluído com sucesso!</div><?php }?>

<div class="step">
	<h1>Feriados</h1>
	<a href="/info/agenda/agenda_feriados_novo" class="btn btn-sm btn-primary">Novo Feriado</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Data</th>
			<th>Descrição</th>
			<th>Tipo</th>
			<th>Ações</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Feriado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Feriado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Feriados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Feriado']->key => $_smarty_tpl->tpl_vars['Feriado']->value){
$_smarty_tpl->tpl_vars['Feriado']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Feriado']->value['Id'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['Feriado']->value['Tipo']=="1"){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Feriado']->value['Data'],"%d/%m");?>
<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Feriado']->value['Data'],"%d/%m/%Y");?>
<?php }?></td>
			<td><?php echo $_smarty_tpl->tpl_vars['Feriado']->value['Descricao'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['Feriado']->value['Tipo']=="1"){?>FIXO<?php }else{ ?>VARIÁVEL<?php }?></td>
			<td><a href="/info/agenda/agenda_feriados_exclui/<?php echo $_smarty_tpl->tpl_vars['Feriado']->value['Id'];?>
" class="btn btn-sm btn-danger">Excluir</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>