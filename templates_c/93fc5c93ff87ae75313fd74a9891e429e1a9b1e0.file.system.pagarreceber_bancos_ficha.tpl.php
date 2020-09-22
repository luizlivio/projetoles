<?php /* Smarty version Smarty-3.1.13, created on 2019-11-17 23:30:54
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_bancos_ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149015dd2025ec9ae09-43978277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93fc5c93ff87ae75313fd74a9891e429e1a9b1e0' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_bancos_ficha.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149015dd2025ec9ae09-43978277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Bancos' => 0,
    'Banco' => 0,
    'Agencias' => 0,
    'Agencia' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dd2025ed0d0d8_92456778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd2025ed0d0d8_92456778')) {function content_5dd2025ed0d0d8_92456778($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Bancos</h1>
	
	<?php  $_smarty_tpl->tpl_vars['Banco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Banco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Bancos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Banco']->key => $_smarty_tpl->tpl_vars['Banco']->value){
$_smarty_tpl->tpl_vars['Banco']->_loop = true;
?>
	<div><a href="/info/PagarReceber/pagarreceber_bancos_edita/<?php echo $_smarty_tpl->tpl_vars['Banco']->value['BANCOID'];?>
" class="btn btn-sm btn-primary">Editar</a> <a href="/info/PagarReceber/pagarreceber_bancos_exclui/<?php echo $_smarty_tpl->tpl_vars['Banco']->value['BANCOID'];?>
" class="btn btn-sm btn-danger">Excluir</a></div>
	
	<div class="row">
		<div class="col-md-2">
			<h3>Código</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Banco']->value['BANCOID']);?>
</label>
		</div>
		<div class="col-md-4">
			<h3>Descrição</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Banco']->value['NOME']);?>
</label>
		</div>
		<div class="col-md-6">
			<h3>Número do Banco</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Banco']->value['NUMERO']);?>
</label>
		</div>
	</div>
	<?php } ?>
	<br>
	<hr>
	<h3>Agências</h3>
	<div><a href="/info/PagarReceber/pagarreceber_bancos_agencia_novo/<?php echo $_smarty_tpl->tpl_vars['Banco']->value['BANCOID'];?>
" class="btn btn-sm btn-primary">Adicionar Agência</a></div>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Agência</th>
			<th>Descrição</th>
			<th>Endereço</th>
			<th>Contato</th>
			<th>Telefone</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Agencia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Agencia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Agencias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Agencia']->key => $_smarty_tpl->tpl_vars['Agencia']->value){
$_smarty_tpl->tpl_vars['Agencia']->_loop = true;
?>
        <tr>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['AGENCIAID']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['NUMEROAGENCIA']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['NOME']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['ENDERECO']);?>
, <?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['NROENDERECO']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['CONTATO']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['TELEFONE']);?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_bancos_agencias_ficha/<?php echo $_smarty_tpl->tpl_vars['Agencia']->value['AGENCIAID'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>