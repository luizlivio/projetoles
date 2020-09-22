<?php /* Smarty version Smarty-3.1.13, created on 2019-09-30 22:28:04
         compiled from "engine\view\InfoPanel\pages\Configuracoes\system.configuracoes_modem_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79985d92aba4b931f7-35764802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a13fe6eb248f0481433d0264d96a0c89a6839e9a' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Configuracoes\\system.configuracoes_modem_edita.tpl',
      1 => 1561603800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79985d92aba4b931f7-35764802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Modens' => 0,
    'PATH' => 0,
    'modem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d92aba4be7157_11088789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d92aba4be7157_11088789')) {function content_5d92aba4be7157_11088789($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
    <h1>Novo Modem</h1>
    <br />
	
	<?php  $_smarty_tpl->tpl_vars['modem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['modem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Modens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['modem']->key => $_smarty_tpl->tpl_vars['modem']->value){
$_smarty_tpl->tpl_vars['modem']->_loop = true;
?><?php } ?>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/configuracoes/modemEditar">
		<div class="helper-display-none">
			<input type="text" name="modemid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['modem']->value['ModemId'];?>
">
		</div>
	
		<label>Número da Porta Serial</label>
		<input type="text" name="portaserial" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['modem']->value['PortaSerial'];?>
">
		
		<label>Número do Chip</label>
		<input type="text" name="numero" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['modem']->value['Numero'];?>
">
		
		<br>
		<div>
		<button type="submit" class="btn btn-default">Salvar</button>
		</div>
		</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>