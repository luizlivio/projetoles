<?php /* Smarty version Smarty-3.1.13, created on 2019-07-23 16:34:28
         compiled from "engine\view\InfoPanel\pages\SocialMedia\system.socialmedia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89935d376144091085-61160255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ad5c6f290bdfe82e9696f6d82a2c8f0a4e71ab2' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\SocialMedia\\system.socialmedia.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89935d376144091085-61160255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'Designers' => 0,
    'des' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d3761440f1824_55781207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d3761440f1824_55781207')) {function content_5d3761440f1824_55781207($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Adicionado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Excluído com sucesso!</div><?php }?>

<div class="step">
	<h1>Social Media</h1>
	
		<label>Designers</label>
		
		<div>
			<a href="/info/socialmedia/novodesigner" class="btn btn-sm btn-primary">Adicionar Designer</a>
		</div>
		
		<table class="table table-hover table-stripped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Opções</th>
				</tr>
			</thead>
			<?php  $_smarty_tpl->tpl_vars['des'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['des']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Designers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['des']->key => $_smarty_tpl->tpl_vars['des']->value){
$_smarty_tpl->tpl_vars['des']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['des']->value['Nome'];?>
</td>
					<td><a href="/info/socialmedia/contadesigner/<?php echo $_smarty_tpl->tpl_vars['des']->value['Id'];?>
" class="btn btn-sm btn-primary">Acessar Conta</a> <a data-toggle="modal" data-target="#Excluir<?php echo $_smarty_tpl->tpl_vars['des']->value['Id'];?>
" href="" class="btn btn-sm btn-danger">Excluir</a></td>
				</tr>
				
				<div class="modal fade" id="Excluir<?php echo $_smarty_tpl->tpl_vars['des']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<div class="row">
									<div class="col-md-12">
										<h3>Confirmar Exclusão</h3>
									</div>
								</div>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<label>Deseja realmente excluir o Designer <b><?php echo $_smarty_tpl->tpl_vars['des']->value['Nome'];?>
</b></label>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<a class="btn btn-danger" href="/info/socialmedia/excluidesigner/<?php echo $_smarty_tpl->tpl_vars['des']->value['Id'];?>
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