<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 22:12:01
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_centrocustos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212365e546d540923c1-01106202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '544904a66495a9fa9f3d9817d6c2a10ec716b6ed' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_centrocustos.tpl',
      1 => 1582593004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212365e546d540923c1-01106202',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e546d540f5f48_02928040',
  'variables' => 
  array (
    'status' => 0,
    'CCusto' => 0,
    'CC' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e546d540f5f48_02928040')) {function content_5e546d540f5f48_02928040($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Novo Centro de Custos Cadastrado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Centro de Custos Editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Centro de Custos Excluído com sucesso!</div><?php }?>

<div class="step">
	<h1>Centros de Custo</h1>
	<a href="/info/PagarReceber/pagarreceber_centrocustos_novo" class="btn btn-sm btn-primary">Novo Centro de Custos</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Descrição</th>
			<th>Editar</th>
			<th>Excluir</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['CC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CCusto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CC']->key => $_smarty_tpl->tpl_vars['CC']->value){
$_smarty_tpl->tpl_vars['CC']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['CC']->value['CentroCustoId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['CC']->value['Descricao'];?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_centrocustos_edita/<?php echo $_smarty_tpl->tpl_vars['CC']->value['CentroCustoId'];?>
" class="btn btn-sm btn-primary">Editar</a></td>
			<td><a data-toggle="modal" data-target="#myExclui<?php echo $_smarty_tpl->tpl_vars['CC']->value['CentroCustoId'];?>
" class="btn btn-sm btn-danger" href="">Excluir</a></td>
        </tr>

		<div class="modal fade" id="myExclui<?php echo $_smarty_tpl->tpl_vars['CC']->value['CentroCustoId'];?>
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
								<label>Confirma a exclusão do Centro de Custo <b><?php echo $_smarty_tpl->tpl_vars['CC']->value['Descricao'];?>
</b>?</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a class="btn btn-danger" href="/info/PagarReceber/excluiCentroCustos/<?php echo $_smarty_tpl->tpl_vars['CC']->value['CentroCustoId'];?>
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