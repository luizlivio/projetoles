<?php /* Smarty version Smarty-3.1.13, created on 2019-11-17 23:31:48
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_bancos_agencias_ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118565dd20294ee5772-72353805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aeb4e1f686304ce5233b6756b40a79b50e25bd4' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_bancos_agencias_ficha.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118565dd20294ee5772-72353805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Agencias' => 0,
    'Agencia' => 0,
    'Contas' => 0,
    'Conta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dd20295028cc8_39453897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd20295028cc8_39453897')) {function content_5dd20295028cc8_39453897($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Agência</h1>
	
	<?php  $_smarty_tpl->tpl_vars['Agencia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Agencia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Agencias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Agencia']->key => $_smarty_tpl->tpl_vars['Agencia']->value){
$_smarty_tpl->tpl_vars['Agencia']->_loop = true;
?>
	<div><a href="/info/PagarReceber/pagarreceber_bancos_agencia_edita/<?php echo $_smarty_tpl->tpl_vars['Agencia']->value['AGENCIAID'];?>
" class="btn btn-sm btn-primary">Editar</a> <a href="/info/PagarReceber/pagarreceber_bancos_agencia_exclui/<?php echo $_smarty_tpl->tpl_vars['Agencia']->value['AGENCIAID'];?>
" class="btn btn-sm btn-danger">Excluir</a></div>
	
	<div class="row">
		<div class="col-md-4">
			<h3>ID</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['AGENCIAID']);?>
</label>
		</div>
		<div class="col-md-4">
			<h3>Descrição</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['NOME']);?>
</label>
		</div>
		<div class="col-md-4">
			<h3>Número da Agência</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['NUMEROAGENCIA']);?>
</label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<h3>Endereço</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['ENDERECO']);?>
, <?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['NROENDERECO']);?>
</label>
		</div>
		<div class="col-md-2">
			<h3>Bairro</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['BAIRRO']);?>
</label>
		</div>
		<div class="col-md-2">
			<h3>Cidade</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['CIDADE']);?>
</label>
		</div>
		<div class="col-md-2">
			<h3>Estado</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['ESTADO']);?>
</label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<h3>Contato</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['CONTATO']);?>
</label>
		</div>
		<div class="col-md-4">
			<h3>Telefone</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['TELEFONE']);?>
</label>
		</div>
		<div class="col-md-4">
			<h3>Email</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Agencia']->value['OBSERVACAO']);?>
</label>
		</div>
	</div>
	<?php } ?>
	<hr>
	<h3>Contas</h3>
	<div><a href="/info/PagarReceber/pagarreceber_bancos_agencia_conta_novo/<?php echo $_smarty_tpl->tpl_vars['Agencia']->value['AGENCIAID'];?>
" class="btn btn-sm btn-primary">Adicionar Conta</a></div>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Número da Conta</th>
			<th>Descrição</th>
			<th>Saldo</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Contas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Conta']->key => $_smarty_tpl->tpl_vars['Conta']->value){
$_smarty_tpl->tpl_vars['Conta']->_loop = true;
?>
        <tr>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Conta']->value['CONTABANCOID']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Conta']->value['NUMEROCONTA']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Conta']->value['DESCRICAO']);?>
</td>
			<td>R$ <?php echo $_smarty_tpl->tpl_vars['Conta']->value['RECEBIDO']-$_smarty_tpl->tpl_vars['Conta']->value['GASTO'];?>
</td>
        </tr>
		<?php } ?>
    </table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>