<?php /* Smarty version Smarty-3.1.13, created on 2020-10-06 13:47:26
         compiled from "engine\view\InfoPanel\pages\Usuarios\system.usuarios_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105085d38a2a9e25e31-15367914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67f8948310127bd790fc034cd9ab401540eab1bd' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Usuarios\\system.usuarios_novo.tpl',
      1 => 1602002841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105085d38a2a9e25e31-15367914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d38a2aa1499b9_94945812',
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d38a2aa1499b9_94945812')) {function content_5d38a2aa1499b9_94945812($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
    <h1>Novo Usuário</h1>
    <br />
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/usuarios/usuarioNovo">
		<label>Nome do Usuário</label>
		<input type="text" name="usuario" class="form-control">
		
		<label>Login</label>
		<input type="text" name="login" class="form-control">
		
		<label>Senha</label>
		<input type="password" name="senha" class="form-control">
		
		<br>
		<div>
		<button type="submit" class="btn btn-default">Salvar</button>
		</div>
		</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>