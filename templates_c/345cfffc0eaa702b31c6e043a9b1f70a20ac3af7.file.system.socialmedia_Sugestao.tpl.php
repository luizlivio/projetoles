<?php /* Smarty version Smarty-3.1.13, created on 2020-01-19 23:41:18
         compiled from "engine\view\InfoPanel\pages\SocialMedia\system.socialmedia_Sugestao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61625e25134e048e06-76979280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '345cfffc0eaa702b31c6e043a9b1f70a20ac3af7' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\SocialMedia\\system.socialmedia_Sugestao.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61625e25134e048e06-76979280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'Sugestoes' => 0,
    'sugestaoid' => 0,
    'nivel' => 0,
    'sug' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e25134e0d16d4_22397613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e25134e0d16d4_22397613')) {function content_5e25134e0d16d4_22397613($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Adicionado com sucesso!</div><?php }?>

<?php  $_smarty_tpl->tpl_vars['sug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Sugestoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sug']->key => $_smarty_tpl->tpl_vars['sug']->value){
$_smarty_tpl->tpl_vars['sug']->_loop = true;
?><?php } ?>

<div class="step">
	<h1>Sugestao #<?php echo $_smarty_tpl->tpl_vars['sugestaoid']->value;?>
</h1>
	<?php if ($_smarty_tpl->tpl_vars['nivel']->value==1){?><a data-toggle="modal" data-target="#Excluir<?php echo $_smarty_tpl->tpl_vars['sugestaoid']->value;?>
" href="" class="btn btn-sm btn-danger">Excluir Sugestão</a><?php }?>
	<br />
	<br />
	
	<div class="modal fade" id="Excluir<?php echo $_smarty_tpl->tpl_vars['sugestaoid']->value;?>
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
							<label>Deseja realmente excluir a Sugestão <b>#<?php echo $_smarty_tpl->tpl_vars['sugestaoid']->value;?>
</b></label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a class="btn btn-danger" href="/info/socialmedia/excluisugestao/<?php echo $_smarty_tpl->tpl_vars['sugestaoid']->value;?>
">Excluir</a>
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<img src="<?php echo $_smarty_tpl->tpl_vars['sug']->value['Modelo'];?>
" alt="Image" style="max-width:100%;">
		</div>
		
		<div class="col-md-6">
			<div>
				<center><a href="/info/socialmedia/alterasugestao/<?php echo $_smarty_tpl->tpl_vars['sugestaoid']->value;?>
" class="btn btn-sm btn-primary">Solicitar Alteração</a> <a href="/info/socialmedia/aprovasugestao/<?php echo $_smarty_tpl->tpl_vars['sugestaoid']->value;?>
" class="btn btn-sm btn-primary">Aceitar Sugestão</a></center>
			</div>
		</div>
	</div>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>