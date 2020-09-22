<?php /* Smarty version Smarty-3.1.13, created on 2020-02-26 23:10:45
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_documentos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158975e545af3e13202-00869071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef874c6f4f7b85735e9fda32ec3abcb07b747eb5' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_documentos.tpl',
      1 => 1582590626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158975e545af3e13202-00869071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e545af3e56555_95974474',
  'variables' => 
  array (
    'status' => 0,
    'Documentos' => 0,
    'Documento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e545af3e56555_95974474')) {function content_5e545af3e56555_95974474($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Novo Tipo de Documento Cadastrado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Tipo de Documento Editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Tipo de Documento Excluído com sucesso!</div><?php }?>

<div class="step">
	<h1>Tipos de Documento</h1>
	<a href="/info/PagarReceber/pagarreceber_tiposdocumentos_novo" class="btn btn-sm btn-primary">Novo Tipo de Documento</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Descrição</th>
			<th>Editar</th>
			<th>Excluir</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Documento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Documento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Documentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Documento']->key => $_smarty_tpl->tpl_vars['Documento']->value){
$_smarty_tpl->tpl_vars['Documento']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Documento']->value['DocumentoId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Documento']->value['Descricao'];?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_tiposdocumentos_edita/<?php echo $_smarty_tpl->tpl_vars['Documento']->value['DocumentoId'];?>
" class="btn btn-sm btn-primary">Editar</a></td>
			<td><a data-toggle="modal" data-target="#myExclui<?php echo $_smarty_tpl->tpl_vars['Documento']->value['DocumentoId'];?>
" class="btn btn-sm btn-danger" href="">Excluir</a></td>
        </tr>

		<div class="modal fade" id="myExclui<?php echo $_smarty_tpl->tpl_vars['Documento']->value['DocumentoId'];?>
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
								<label>Confirma a exclusão do Tipo de Documento <b><?php echo $_smarty_tpl->tpl_vars['Documento']->value['Descricao'];?>
</b>?</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a class="btn btn-danger" href="/info/PagarReceber/excluiDocumento/<?php echo $_smarty_tpl->tpl_vars['Documento']->value['DocumentoId'];?>
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