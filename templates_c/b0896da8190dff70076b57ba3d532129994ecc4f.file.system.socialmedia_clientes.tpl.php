<?php /* Smarty version Smarty-3.1.13, created on 2020-06-15 20:33:27
         compiled from "engine\view\InfoPanel\pages\SocialMedia\system.socialmedia_clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61435ee8054786ce23-00269467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0896da8190dff70076b57ba3d532129994ecc4f' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\SocialMedia\\system.socialmedia_clientes.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61435ee8054786ce23-00269467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'designer' => 0,
    'Funcionarios' => 0,
    'func' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ee80547939569_80757681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee80547939569_80757681')) {function content_5ee80547939569_80757681($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
    <h1>Novo Designer</h1>
    <br>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/socialmedia/clienteNovo">
	
	<div>
		<label>Escolha o cliente que deseja adicionar à esta conta?</label>
	</div>
	
	<div class="helper-display-none">
		<input type="text" name="designerid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['designer']->value;?>
">
	</div>
	
	<div class="form-group">
		<select name="clienteid" class="form-control">
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
		<label>Plano da Conta</label>
		<select name="planoid" class="form-control">
			<option disable selected>Selecionar</option>
				<option value="4">4 artes por mês</option>
				<option value="8">8 artes por mês</option>
				<option value="12">12 artes por mês</option>
		</select>
    </div>
	
	<div class="form-group">
		<label>Valor</label>
		<input type="text" name="valor" class="form-control">
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