<?php /* Smarty version Smarty-3.1.13, created on 2019-12-04 20:49:55
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_favorecidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81385de84623c4aa91-57954333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f598351f4757751cd7de49f374f525c360c85bc1' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_favorecidos.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81385de84623c4aa91-57954333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Favorecidos' => 0,
    'Fav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5de84623caae06_26117659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de84623caae06_26117659')) {function content_5de84623caae06_26117659($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Favorecidos</h1>
	<a href="/info/PagarReceber/pagarreceber_favorecidos_novo" class="btn btn-sm btn-primary">Novo Favorecido</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Nome</th>
            <th>Endereço</th>
			<th>Contato</th>
			<th>Telefone</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Fav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Favorecidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fav']->key => $_smarty_tpl->tpl_vars['Fav']->value){
$_smarty_tpl->tpl_vars['Fav']->_loop = true;
?>
        <tr>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Fav']->value['FAVORECIDOID']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Fav']->value['NOME']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Fav']->value['ENDERECO']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Fav']->value['CONTATO']);?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Fav']->value['TELEFONE']);?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_favorecidos_ficha/<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FAVORECIDOID'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>