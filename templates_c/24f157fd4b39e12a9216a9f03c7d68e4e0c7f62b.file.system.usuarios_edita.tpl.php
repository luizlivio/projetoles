<?php /* Smarty version Smarty-3.1.13, created on 2019-07-24 15:29:06
         compiled from "engine\view\InfoPanel\pages\Usuarios\system.usuarios_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126845cf95627494315-61249187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f157fd4b39e12a9216a9f03c7d68e4e0c7f62b' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Usuarios\\system.usuarios_edita.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126845cf95627494315-61249187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cf956274f9c16_94942233',
  'variables' => 
  array (
    'usuarios' => 0,
    'PATH' => 0,
    'usu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf956274f9c16_94942233')) {function content_5cf956274f9c16_94942233($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
    <h1>Edição de Usuário</h1>
    <br />
	
	<?php  $_smarty_tpl->tpl_vars['usu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usu']->key => $_smarty_tpl->tpl_vars['usu']->value){
$_smarty_tpl->tpl_vars['usu']->_loop = true;
?>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/usuarios/usuarioEdita">
	
	<div class="helper-display-none">
		<input type="text" name="userid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['userid'];?>
">
	</div>
	
		<label>Nome do Usuário</label>
		<input type="text" name="usuario" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['nome'];?>
">
		
		<label>Login</label>
		<input type="text" name="login" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['LOGIN'];?>
">
		
		<label>Senha</label>
		<input type="text" name="senha" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['senhasite'];?>
">
		
		<label>Status</label>
		<select name="status" class="form-control">
			<option value="F" <?php if ($_smarty_tpl->tpl_vars['usu']->value['inativo']=="F"){?>selected<?php }?>>ATIVO</option>
			<option value="T" <?php if ($_smarty_tpl->tpl_vars['usu']->value['inativo']=="T"){?>selected<?php }?>>DESATIVADO</option>
		</select>
		
		<label>Email</label>
		<input type="text" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['Email'];?>
">
		
		<label>Telefone</label>
		<input type="text" name="telefone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['Telefone'];?>
">
		
		<label>DDD de saída dos envios</label>
		<input type="text" name="ddd" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['DDD'];?>
">
		
		<label>Valor</label>
		<input type="text" name="valor" class="form-control" value="<?php echo number_format($_smarty_tpl->tpl_vars['usu']->value['Valor'],2,',','.');?>
">
		
		<br>
		<div>
		<button type="submit" class="btn btn-default">Salvar</button>
		</div>
	</form>
	<?php } ?>	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>