<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 09:33:22
         compiled from "engine\view\InfoPanel\pages\Usuarios_Cliente\system.usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227685cd0848c22d684-28979201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094478129b87fca276555d826c6cdbb7c8ca1c9b' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Usuarios_Cliente\\system.usuarios.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227685cd0848c22d684-28979201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd0848c27f341_13568780',
  'variables' => 
  array (
    'status' => 0,
    'inf' => 0,
    'usuarios' => 0,
    'usu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0848c27f341_13568780')) {function content_5cd0848c27f341_13568780($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Usuário Incluído com sucesso!</div><?php }?>

<div class="step">					
		<h1>Usuários</h1>
		<div><a href="/info/usuarios_cliente/usuarios_novo" class="btn btn-sm btn-primary">Novo Usuario</a></div>
		
		<form method="post" action="/info/usuarios_cliente/PesquisaUsuarios">
		
		<br>
		<?php echo $_smarty_tpl->tpl_vars['inf']->value->Login;?>

		<div class="row">
		<div class="col-lg-12">
		
			<div class="input-group">
			<div>
				<input type="text" name="pesquisa" class="form-control" placeholder="Procurar por ...">
			</div>
			<span class="input-group-btn">
				<button class="btn btn-default" type="submit">Pesquisar</button>
			</span>
			</div>
			</div>
		</div>
		</form>
		
		<br>
		
		<table class="table table-hover table-stripped">
			<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Grupo</th>
				<th>Status</th>
				<th>Acessar</th>
			</tr>
			</thead>
			<?php  $_smarty_tpl->tpl_vars['usu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usu']->key => $_smarty_tpl->tpl_vars['usu']->value){
$_smarty_tpl->tpl_vars['usu']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['usu']->value['UserId'];?>
</td>
				<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['usu']->value['Nome']);?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['usu']->value['Tipo']=="M"){?>Médico/Fisioterapeuta<?php }elseif($_smarty_tpl->tpl_vars['usu']->value['Tipo']=="U"){?>Administrativo<?php }?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['usu']->value['Ativo']=='1'){?>ATIVO<?php }else{ ?>DESATIVADO<?php }?></td>
				<td><a href="/info/usuarios_cliente/usuarios_ficha/<?php echo $_smarty_tpl->tpl_vars['usu']->value['UserId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
			</tr>
			<?php } ?>
		</table>

</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>