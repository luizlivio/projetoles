<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 16:06:47
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_favorecidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317945e37001b2c7487-83120683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '326a0674e7b35ff63b79dd031038593a70d59324' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_favorecidos.tpl',
      1 => 1582566063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317945e37001b2c7487-83120683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e37001b555d72_68084884',
  'variables' => 
  array (
    'status' => 0,
    'Favorecidos' => 0,
    'Fav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e37001b555d72_68084884')) {function content_5e37001b555d72_68084884($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Novo Favorecido Cadastrado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Favorecido Excluído com sucesso!</div><?php }?>

<div class="step">
	<h1>Favorecidos</h1>
	<a href="/info/PagarReceber/pagarreceber_favorecidos_novo" class="btn btn-sm btn-primary">Novo Favorecido</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Nome</th>
			<th>Contato</th>
			<th>Telefone</th>
			<th>Acessar</th>
			<th>Excluir</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Fav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Favorecidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fav']->key => $_smarty_tpl->tpl_vars['Fav']->value){
$_smarty_tpl->tpl_vars['Fav']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Nome'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Contato'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Telefone'];?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_favorecidos_ficha/<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
			<td><a data-toggle="modal" data-target="#myExclui<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId'];?>
" class="btn btn-sm btn-danger" href="">Excluir</a></td>
        </tr>

		<div class="modal fade" id="myExclui<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId'];?>
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
								<label>Confirma a exclusão do Favorecido <b><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Nome'];?>
</b>?</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a class="btn btn-danger" href="/info/PagarReceber/excluiFavorecido/<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId'];?>
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