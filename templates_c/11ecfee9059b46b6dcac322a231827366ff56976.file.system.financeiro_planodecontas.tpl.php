<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 15:57:14
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_planodecontas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231125e54083e7e39e8-81414098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11ecfee9059b46b6dcac322a231827366ff56976' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_planodecontas.tpl',
      1 => 1582570406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231125e54083e7e39e8-81414098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e54083e85a195_56083154',
  'variables' => 
  array (
    'status' => 0,
    'PlanodeContas' => 0,
    'Contas' => 0,
    'Contas2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e54083e85a195_56083154')) {function content_5e54083e85a195_56083154($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Novo Plano de Contas Cadastrado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Plano de Contas Excluído com sucesso!</div><?php }?>

<div class="step">
	<h1>Plano de Contas</h1>
	<a href="/info/PagarReceber/pagarreceber_planodecontas_novo" class="btn btn-sm btn-primary">Novo Plano de Contas</a>

	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Plano de Contas</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Contas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas']->key => $_smarty_tpl->tpl_vars['Contas']->value){
$_smarty_tpl->tpl_vars['Contas']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['Contas']->value['Dependencia']=="0"){?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Contas']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Contas']->value['Descricao'];?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_planodecontas_ficha/<?php echo $_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
			<td><a data-toggle="modal" data-target="#myExclui<?php echo $_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId'];?>
" class="btn btn-sm btn-danger" href="">Excluir</a></td>
        </tr>

		<?php  $_smarty_tpl->tpl_vars['Contas2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas2']->key => $_smarty_tpl->tpl_vars['Contas2']->value){
$_smarty_tpl->tpl_vars['Contas2']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['Contas2']->value['Dependencia']==$_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId']){?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['Contas']->value['CodigoContabil'];?>
.<?php echo $_smarty_tpl->tpl_vars['Contas2']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Contas2']->value['Descricao'];?>
</td>
					<td><a href="/info/PagarReceber/pagarreceber_planodecontas_ficha/<?php echo $_smarty_tpl->tpl_vars['Contas2']->value['PlanoContaId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
					<td><a data-toggle="modal" data-target="#myExclui<?php echo $_smarty_tpl->tpl_vars['Contas2']->value['PlanoContaId'];?>
" class="btn btn-sm btn-danger" href="">Excluir</a></td>
				</tr>
			<?php }?>
		<?php } ?>

		<?php }?>
		<div class="modal fade" id="myExclui<?php echo $_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<div class="row">
							<div class="col-md-12">
								<h3>Confirmação de Exclusão</h3>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<label>Confirma a exclusão do Plano de Contas <b><?php echo $_smarty_tpl->tpl_vars['Contas']->value['Descricao'];?>
</b>?</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a class="btn btn-danger" href="/info/PagarReceber/excluiPlanoContas/<?php echo $_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId'];?>
">Excluir</a>
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>