<?php /* Smarty version Smarty-3.1.13, created on 2019-12-04 20:51:41
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_centrocustos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311535de8468d876879-40730645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a79bc4682d166bd14e1681bf23c7b6c39bb87f2' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_centrocustos.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311535de8468d876879-40730645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CCusto' => 0,
    'CC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5de8468d8cd116_78514228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de8468d8cd116_78514228')) {function content_5de8468d8cd116_78514228($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Centros de Custo</h1>
	<a href="/info/PagarReceber/pagarreceber_centrocustos_novo" class="btn btn-sm btn-primary">Novo Centro de Custos</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Descrição</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['CC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CCusto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CC']->key => $_smarty_tpl->tpl_vars['CC']->value){
$_smarty_tpl->tpl_vars['CC']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['CC']->value['CCUSTOID'];?>
</td>
			<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['CC']->value['DESCRICAO']);?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_centrocustos_ficha/<?php echo $_smarty_tpl->tpl_vars['CC']->value['CCUSTOID'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>