<?php /* Smarty version Smarty-3.1.13, created on 2019-07-03 00:19:13
         compiled from "engine\view\InfoPanel\pages\Modulos\system.modulos_vinculoFuncionarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37125cde1e844ab0c1-36958136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '794ccaa9baea9ffeb28b7defc8f756612430df16' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Modulos\\system.modulos_vinculoFuncionarios.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37125cde1e844ab0c1-36958136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cde1e844fb7c1_58215390',
  'variables' => 
  array (
    'PATH' => 0,
    'moduloid' => 0,
    'Funcionarios' => 0,
    'func' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cde1e844fb7c1_58215390')) {function content_5cde1e844fb7c1_58215390($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
    <h1>Permissões do Módulo</h1>
    <br>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/modulos/vinculaFuncionarios">
	
	<div>
		<label>A qual Funcionário deseja vincular o Módulo?</label>
	</div>
	
	<div class="helper-display-none">
		<input type="text" name="moduloid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['moduloid']->value;?>
">
	</div>
	
	<div class="form-group">
		<select name="funcionarioid" class="form-control">
			<option disable selected>Selecionar</option>
			<?php  $_smarty_tpl->tpl_vars['func'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['func']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Funcionarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['func']->key => $_smarty_tpl->tpl_vars['func']->value){
$_smarty_tpl->tpl_vars['func']->_loop = true;
?>
				<option value="<?php echo utf8_encode($_smarty_tpl->tpl_vars['func']->value['Userid']);?>
"><?php echo utf8_encode($_smarty_tpl->tpl_vars['func']->value['Nome']);?>
</option>
			<?php } ?>
		</select>
    </div>
	
	<div class="form-group">
		<label>Qual o nível de permissão?</label>
		<select name="permissao" class="form-control">
			<option disable selected>Selecionar</option>
			<option value="0">Somente Leitura</option>
			<option value="1">Administrador</option>
		</select>
    </div>
	
	<div>
	<button type="submit" class="btn btn-default">Vincular</button>
	<input type="button" value="Cancelar" onclick="window.history.go(-1)" class="btn btn-default">
	</div>
	
	</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>