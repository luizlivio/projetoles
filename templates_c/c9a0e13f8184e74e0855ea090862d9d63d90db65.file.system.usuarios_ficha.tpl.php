<?php /* Smarty version Smarty-3.1.13, created on 2020-10-06 13:50:00
         compiled from "engine\view\InfoPanel\pages\Usuarios\system.usuarios_ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140155cf956256c2568-12364276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9a0e13f8184e74e0855ea090862d9d63d90db65' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Usuarios\\system.usuarios_ficha.tpl',
      1 => 1602002996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140155cf956256c2568-12364276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cf956257456e0_16414648',
  'variables' => 
  array (
    'status' => 0,
    'usuarios' => 0,
    'usu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf956257456e0_16414648')) {function content_5cf956257456e0_16414648($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Usuário Editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==4){?><div class="alert alert-success" role="alert">Usuário Incluido com sucesso!</div><?php }?>

<div class="step">
	<h1>Ficha Cadastral</h1>
	
	<?php  $_smarty_tpl->tpl_vars['usu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usu']->key => $_smarty_tpl->tpl_vars['usu']->value){
$_smarty_tpl->tpl_vars['usu']->_loop = true;
?>
	<div><a href="/info/usuarios/usuarios_edita/<?php echo $_smarty_tpl->tpl_vars['usu']->value['userid'];?>
" class="btn btn-sm btn-primary">Editar Dados da Conta</a> </div>

	<div class="row">
		<div class="col-md-1">
			<h3>Id</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['userid'];?>
</label>
		</div>

		<div class="col-md-6">
			<h3>Nome</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['nome'];?>
</label>
		</div>

		<div class="col-md-5">
			<h3>Status</h3>
			<label><?php if ($_smarty_tpl->tpl_vars['usu']->value['inativo']=="T"){?>DESATIVADO<?php }else{ ?>ATIVO<?php }?></label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-2">
			<h3>Login</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['LOGIN'];?>
</label>
		</div>
	</div>
	
	
	<?php } ?>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>