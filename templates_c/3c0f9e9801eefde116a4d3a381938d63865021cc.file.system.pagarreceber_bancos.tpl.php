<?php /* Smarty version Smarty-3.1.13, created on 2019-11-17 23:30:49
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_bancos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175165dd20259f36696-88484749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c0f9e9801eefde116a4d3a381938d63865021cc' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_bancos.tpl',
      1 => 1561603810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175165dd20259f36696-88484749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grupoempresaid' => 0,
    'Bancos' => 0,
    'Banco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dd2025a394345_27249884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd2025a394345_27249884')) {function content_5dd2025a394345_27249884($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Bancos</h1>
	<a href="/info/PagarReceber/pagarreceber_bancos_novo/<?php echo $_smarty_tpl->tpl_vars['grupoempresaid']->value;?>
" class="btn btn-sm btn-primary">Novo Banco</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Descrição</th>
			<th>Número</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Banco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Banco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Bancos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Banco']->key => $_smarty_tpl->tpl_vars['Banco']->value){
$_smarty_tpl->tpl_vars['Banco']->_loop = true;
?>
        <tr>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Banco']->value['BANCOID']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Banco']->value['NOME']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Banco']->value['NUMERO']);?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_bancos_ficha/<?php echo $_smarty_tpl->tpl_vars['Banco']->value['BANCOID'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>