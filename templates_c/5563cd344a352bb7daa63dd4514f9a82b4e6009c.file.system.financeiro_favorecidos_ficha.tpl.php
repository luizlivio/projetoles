<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 17:33:45
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_favorecidos_ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72985e52ef24309448-27046729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5563cd344a352bb7daa63dd4514f9a82b4e6009c' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_favorecidos_ficha.tpl',
      1 => 1582576421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72985e52ef24309448-27046729',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e52ef243db008_75460357',
  'variables' => 
  array (
    'status' => 0,
    'Favorecidos' => 0,
    'Fav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e52ef243db008_75460357')) {function content_5e52ef243db008_75460357($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Favorecido Editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Favorecido Excluído com sucesso!</div><?php }?>

<div class="step">
	<h1>Favorecidos</h1>
	
	<?php  $_smarty_tpl->tpl_vars['Fav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Favorecidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fav']->key => $_smarty_tpl->tpl_vars['Fav']->value){
$_smarty_tpl->tpl_vars['Fav']->_loop = true;
?>
	<div><a href="/info/PagarReceber/pagarreceber_favorecidos_edita/<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId'];?>
" class="btn btn-sm btn-primary">Editar</a> <a data-toggle="modal" data-target="#myExclui<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId'];?>
" class="btn btn-sm btn-danger" href="">Excluir</a></div>
	
	<div class="row">
		<div class="col-md-2">
			<h3>Código</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId'];?>
</label>
		</div>
		<div class="col-md-10">
			<h3>Nome do Favorecido</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Nome'];?>
</label>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h3>Contato</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Contato'];?>
</label>
		</div>

		<div class="col-md-4">
			<h3>CPF/CNPJ</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['CPFCNPJ'];?>
</label>
		</div>

		<div class="col-md-2">
			<h3>Inscrição Estadual/RG</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['IEstadual'];?>
</label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<h3>Endereço</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Endereco'];?>
</label>
		</div>

		<div class="col-md-2">
			<h3>Número</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Numero'];?>
</label>
		</div>

		<div class="col-md-6">
			<h3>Bairro</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Bairro'];?>
</label>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<h3>Cidade</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Cidade'];?>
</label>
		</div>

		<div class="col-md-4">
			<h3>Estado</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Estado'];?>
</label>
		</div>

		<div class="col-md-2">
			<h3>CEP</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['CEP'];?>
</label>
		</div>
		
		<div class="col-md-2">
			<h3>Telefone</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Telefone'];?>
</label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<h3>Email</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Email'];?>
</label>
		</div>
		
		<div class="col-md-4">
			<h3>Plano de Conta</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['PlanoConta'];?>
</label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<h3>Histórico Padrão</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Historico'];?>
</label>
		</div>

		<div class="col-md-2">
			<h3>Banco</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Banco'];?>
</label>
		</div>

		<div class="col-md-2">
			<h3>Agência</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Agencia'];?>
</label>
		</div>
		
		<div class="col-md-4">
			<h3>Conta Corrente</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Fav']->value['ContaCorrente'];?>
</label>
		</div>
	</div>

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

</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>