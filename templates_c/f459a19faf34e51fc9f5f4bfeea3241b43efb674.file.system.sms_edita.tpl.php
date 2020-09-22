<?php /* Smarty version Smarty-3.1.13, created on 2019-12-27 13:20:32
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191695e062f50c0dee6-28894772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f459a19faf34e51fc9f5f4bfeea3241b43efb674' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms_edita.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191695e062f50c0dee6-28894772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'Edita' => 0,
    'PATH' => 0,
    'Edit' => 0,
    'empresaid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e062f5105deb5_09663799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e062f5105deb5_09663799')) {function content_5e062f5105deb5_09663799($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Mensagem Incluída com sucesso!</div><?php }?>

<div class="step">
    <h1>Editar SMS</h1>
	
	<?php  $_smarty_tpl->tpl_vars['Edit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Edit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Edita']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Edit']->key => $_smarty_tpl->tpl_vars['Edit']->value){
$_smarty_tpl->tpl_vars['Edit']->_loop = true;
?>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/sms/SMS_editaEnvio/<?php echo $_smarty_tpl->tpl_vars['Edit']->value['MSGID'];?>
/<?php echo $_smarty_tpl->tpl_vars['empresaid']->value;?>
">
		
		<label>Número de Envio</label>
		<input type="text" name="numero" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Edit']->value['DESTINATARIO'];?>
">
		
		<label>Texto</label>
		<input type="text" name="texto" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Edit']->value['MENSAGEM'];?>
">
		
		<br>
		<button type="submit" class="btn btn-default">Enviar</button>	
	</form>
	<?php } ?>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>