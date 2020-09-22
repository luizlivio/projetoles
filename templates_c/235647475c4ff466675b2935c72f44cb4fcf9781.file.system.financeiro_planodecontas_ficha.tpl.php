<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 16:06:14
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_planodecontas_ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289805e541d0ece0142-03366195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '235647475c4ff466675b2935c72f44cb4fcf9781' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_planodecontas_ficha.tpl',
      1 => 1582571171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289805e541d0ece0142-03366195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e541d0ed78740_81431497',
  'variables' => 
  array (
    'status' => 0,
    'PlanodeContas' => 0,
    'Contas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e541d0ed78740_81431497')) {function content_5e541d0ed78740_81431497($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Plano de Contas Editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Plano de Contas Excluído com sucesso!</div><?php }?>

<div class="step">
	<h1>Plano de Contas</h1>
	
	<?php  $_smarty_tpl->tpl_vars['Contas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas']->key => $_smarty_tpl->tpl_vars['Contas']->value){
$_smarty_tpl->tpl_vars['Contas']->_loop = true;
?>
	<div><a href="/info/PagarReceber/pagarreceber_planodecontas_edita/<?php echo $_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId'];?>
" class="btn btn-sm btn-primary">Editar</a> <a data-toggle="modal" data-target="#myExclui<?php echo $_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId'];?>
" class="btn btn-sm btn-danger" href="">Excluir</a></div>
	
	<div class="row">
		<div class="col-md-3">
			<h3>Código Contábil</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Contas']->value['CodigoContabil'];?>
</label>
		</div>
		<div class="col-md-9">
			<h3>Nome da Conta</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Contas']->value['Descricao'];?>
</label>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<h3>Classificação</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Contas']->value['Classificacao'];?>
</label>
		</div>

		<div class="col-md-4">
			<h3>Dependente de</h3>
			<label><?php if ($_smarty_tpl->tpl_vars['Contas']->value['Dependencia']=="0"){?>Conta Pai<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['Contas']->value['DependenciaDescricao'];?>
<?php }?></label>
		</div>

		<div class="col-md-4">
			<h3>Tipo</h3>
			<label><?php if ($_smarty_tpl->tpl_vars['Contas']->value['Tipo']=="D"){?>Despesas<?php }?><?php if ($_smarty_tpl->tpl_vars['Contas']->value['Tipo']=="R"){?>Receitas<?php }?></label>
		</div>
	</div>

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

</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>