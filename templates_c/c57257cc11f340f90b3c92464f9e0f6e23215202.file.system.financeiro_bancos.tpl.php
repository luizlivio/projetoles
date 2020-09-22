<?php /* Smarty version Smarty-3.1.13, created on 2019-11-17 23:53:54
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_bancos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75325dd20562df6ec4-69745919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c57257cc11f340f90b3c92464f9e0f6e23215202' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_bancos.tpl',
      1 => 1574045619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75325dd20562df6ec4-69745919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dd20562e38e46_80491693',
  'variables' => 
  array (
    'Bancos' => 0,
    'Banco' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd20562e38e46_80491693')) {function content_5dd20562e38e46_80491693($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Bancos</h1>
	<a href="/info/PagarReceber/pagarreceber_bancos_novo" class="btn btn-sm btn-primary">Novo Banco</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Id</th>
			<th>Banco</th>
			<th>Agência</th>
			<th>Conta</th>
			<th>Saldo</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Banco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Banco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Bancos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Banco']->key => $_smarty_tpl->tpl_vars['Banco']->value){
$_smarty_tpl->tpl_vars['Banco']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Banco']->value['ContaId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Descricao'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Agencia'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Numeroconta'];?>
</td>
			<td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['Banco']->value['SaldoInicial'],2,',','.');?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_bancos_ficha/<?php echo $_smarty_tpl->tpl_vars['Banco']->value['ContaId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>