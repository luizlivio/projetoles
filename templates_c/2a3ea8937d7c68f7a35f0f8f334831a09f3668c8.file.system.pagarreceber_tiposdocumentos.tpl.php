<?php /* Smarty version Smarty-3.1.13, created on 2019-12-04 20:51:20
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_tiposdocumentos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93045de84678b21577-19972208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a3ea8937d7c68f7a35f0f8f334831a09f3668c8' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_tiposdocumentos.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93045de84678b21577-19972208',
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
  'unifunc' => 'content_5de84678b739f9_28774333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de84678b739f9_28774333')) {function content_5de84678b739f9_28774333($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Tipos de Documento</h1>
	<a href="/info/PagarReceber/pagarreceber_tiposdocumentos_novo" class="btn btn-sm btn-primary">Novo Tipo de Documento</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Descrição</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Documento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Documento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Documentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Documento']->key => $_smarty_tpl->tpl_vars['Documento']->value){
$_smarty_tpl->tpl_vars['Documento']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Documento']->value['TIPODOCUMENTOID'];?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Documento']->value['DESCRICAO']);?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_tiposdocumentos_ficha/<?php echo $_smarty_tpl->tpl_vars['Documento']->value['TIPODOCUMENTOID'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>