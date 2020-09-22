<?php /* Smarty version Smarty-3.1.13, created on 2019-12-04 20:51:57
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_unidades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144065de8469d4126c2-50761445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc3dd6164694bf1b61682a51d9c5fa29fa566ec' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_unidades.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144065de8469d4126c2-50761445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Unidades' => 0,
    'Unidade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5de8469d464808_98925481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de8469d464808_98925481')) {function content_5de8469d464808_98925481($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Unidades</h1>
	<a href="/info/PagarReceber/pagarreceber_unidades_novo" class="btn btn-sm btn-primary">Nova Unidade</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Descrição</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Unidade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Unidade']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Unidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Unidade']->key => $_smarty_tpl->tpl_vars['Unidade']->value){
$_smarty_tpl->tpl_vars['Unidade']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Unidade']->value['UNIDADEID'];?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['Unidade']->value['DESCRICAO']);?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_unidades_ficha/<?php echo $_smarty_tpl->tpl_vars['Unidade']->value['UNIDADEID'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>