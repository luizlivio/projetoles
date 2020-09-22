<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 22:11:24
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_unidades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207625e5470729eac66-41207068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '387297df83968c33b78ccc8a642542347554ebd4' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_unidades.tpl',
      1 => 1582593006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207625e5470729eac66-41207068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e547072a54806_18083523',
  'variables' => 
  array (
    'status' => 0,
    'Unidades' => 0,
    'Unidade' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e547072a54806_18083523')) {function content_5e547072a54806_18083523($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Nova Unidade Cadastrada com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Unidade Editada com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Unidade Excluída com sucesso!</div><?php }?>

<div class="step">
	<h1>Unidades</h1>
	<a href="/info/PagarReceber/pagarreceber_unidades_novo" class="btn btn-sm btn-primary">Nova Unidade</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Descrição</th>
			<th>Editar</th>
			<th>Excluir</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Unidade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Unidade']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Unidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Unidade']->key => $_smarty_tpl->tpl_vars['Unidade']->value){
$_smarty_tpl->tpl_vars['Unidade']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Unidade']->value['UnidadeId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Unidade']->value['Descricao'];?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_unidades_edita/<?php echo $_smarty_tpl->tpl_vars['Unidade']->value['UnidadeId'];?>
" class="btn btn-sm btn-primary">Editar</a></td>
			<td><a data-toggle="modal" data-target="#myExclui<?php echo $_smarty_tpl->tpl_vars['Unidade']->value['UnidadeId'];?>
" class="btn btn-sm btn-danger" href="">Excluir</a></td>
        </tr>
		<div class="modal fade" id="myExclui<?php echo $_smarty_tpl->tpl_vars['Unidade']->value['UnidadeId'];?>
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
								<label>Confirma a exclusão da Unidade <b><?php echo $_smarty_tpl->tpl_vars['Unidade']->value['Descricao'];?>
</b>?</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a class="btn btn-danger" href="/info/PagarReceber/excluiUnidade/<?php echo $_smarty_tpl->tpl_vars['Unidade']->value['UnidadeId'];?>
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