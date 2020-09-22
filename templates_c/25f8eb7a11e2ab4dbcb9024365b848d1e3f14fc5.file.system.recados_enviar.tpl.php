<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 01:03:12
         compiled from "engine\view\InfoPanel\pages\Recados\system.recados_enviar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250195ce807555e6959-71594282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25f8eb7a11e2ab4dbcb9024365b848d1e3f14fc5' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Recados\\system.recados_enviar.tpl',
      1 => 1561603811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250195ce807555e6959-71594282',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ce8075648afa4_26939431',
  'variables' => 
  array (
    'enviado' => 0,
    'PATH' => 0,
    'convenios' => 0,
    'convenio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce8075648afa4_26939431')) {function content_5ce8075648afa4_26939431($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['enviado']->value==1){?><div class="alert alert-success" role="alert">Recado Enviado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==2){?><div class="alert alert-danger" role="alert">Erro no envio. Faltou informar o destinatário</div><?php }?>

<div class="step">
    <h1>Enviar Recados</h1>
	<a href="/info/recados_enviar/recados_enviados" class="btn btn-sm btn-primary">Recados Enviados</a>
    <br>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/recados_enviar/enviarRecado">

		<label>Destinatário</label>
		<select name="destinatario" class="form-control">
		<option value="">Selecionar</option>
		<option value="0">Todos</option>
			<?php  $_smarty_tpl->tpl_vars['convenio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['convenio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['convenios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['convenio']->key => $_smarty_tpl->tpl_vars['convenio']->value){
$_smarty_tpl->tpl_vars['convenio']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['convenio']->value['nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['convenio']->value['nome'];?>
</option>
			<?php } ?>
		</select>
		
		<div>
			<label>Recado</label>
			<textarea name="texto" class="form-control"></textarea>
		</div>
		
		<br>
		<div>
		
		<button type="submit" class="btn btn-default">Enviar</button>
		</div>
		</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>