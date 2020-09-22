<?php /* Smarty version Smarty-3.1.13, created on 2019-07-18 01:43:51
         compiled from "engine\view\InfoPanel\pages\Modulos\system.modulos_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286505d2ff9074a2495-00167493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '199a0ba8962eb3717a2fbe841d174cc6febf192a' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Modulos\\system.modulos_novo.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286505d2ff9074a2495-00167493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d2ff9074ec749_51898389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2ff9074ec749_51898389')) {function content_5d2ff9074ec749_51898389($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
    <h1>Novo Módulo da Intranet</h1>
    <br />
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/modulos/novoModulo">
		<label>Nome do Módulo</label>
		<input type="text" name="modulo" class="form-control" placeholder="Nome do Módulo">
		
		<label>Link</label>
		<input type="text" name="link" class="form-control" placeholder="Link">
		
		<br>
		<div>
		<button type="submit" class="btn btn-default">Enviar</button>
		</div>
		</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>