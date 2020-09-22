<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 20:33:20
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_tiposdocumentos_ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266905e545d401ddeb4-37452872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69b1ac0f9f655f4ec7aed6373e16df64bb66274f' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_tiposdocumentos_ficha.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266905e545d401ddeb4-37452872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Documentos' => 0,
    'Documento' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e545d4023b766_54554123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e545d4023b766_54554123')) {function content_5e545d4023b766_54554123($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Tipo de Documento</h1>
	
	<?php  $_smarty_tpl->tpl_vars['Documento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Documento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Documentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Documento']->key => $_smarty_tpl->tpl_vars['Documento']->value){
$_smarty_tpl->tpl_vars['Documento']->_loop = true;
?>
	<div><a href="/info/PagarReceber/pagarreceber_tiposdocumentos_edita/<?php echo $_smarty_tpl->tpl_vars['Documento']->value['TIPODOCUMENTOID'];?>
" class="btn btn-sm btn-primary">Editar</a> <a href="/info/PagarReceber/pagarreceber_tiposdocumentos_exclui/<?php echo $_smarty_tpl->tpl_vars['Documento']->value['TIPODOCUMENTOID'];?>
" class="btn btn-sm btn-danger">Excluir</a></div>
	
	<div class="row">
		<div class="col-md-2">
			<h3>Código</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Documento']->value['TIPODOCUMENTOID'];?>
</label>
		</div>
		<div class="col-md-10">
			<h3>Descrição</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Documento']->value['DESCRICAO']);?>
</label>
		</div>
	</div>
	<?php } ?>	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>