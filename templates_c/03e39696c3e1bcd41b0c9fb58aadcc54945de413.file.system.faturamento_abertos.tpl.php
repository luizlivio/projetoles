<?php /* Smarty version Smarty-3.1.13, created on 2019-11-03 22:16:37
         compiled from "engine\view\InfoPanel\pages\Faturamento\system.faturamento_abertos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242835dbf7bf5cf2a90-93120784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03e39696c3e1bcd41b0c9fb58aadcc54945de413' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Faturamento\\system.faturamento_abertos.tpl',
      1 => 1561603800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242835dbf7bf5cf2a90-93120784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'contas' => 0,
    'conta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dbf7bf6194483_20944911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbf7bf6194483_20944911')) {function content_5dbf7bf6194483_20944911($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Boleto Alterado com Sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Boleto Excluido com Sucesso!</div><?php }?>

<div class="step">
	<h1>Boletos em Aberto</h1>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Id</th>
            <th>Descrição</th>
			<th>Data de Vencimento</th>
			<th>Opções</th>
			<th></th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conta']->key => $_smarty_tpl->tpl_vars['conta']->value){
$_smarty_tpl->tpl_vars['conta']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['conta']->value['Id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['conta']->value['Descricao'];?>
 - <?php echo $_smarty_tpl->tpl_vars['conta']->value['EmpresaId'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['conta']->value['Vencimento'],"%d/%m/%Y");?>
</td>
            <td><a href="/info/faturamento/statusboleto/<?php echo $_smarty_tpl->tpl_vars['conta']->value['Id'];?>
" class="btn btn-sm btn-primary">Processar</a></td>
			<td><a href="/info/faturamento/excluiboleto/<?php echo $_smarty_tpl->tpl_vars['conta']->value['Id'];?>
" class="btn btn-sm btn-danger">Excluir</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>