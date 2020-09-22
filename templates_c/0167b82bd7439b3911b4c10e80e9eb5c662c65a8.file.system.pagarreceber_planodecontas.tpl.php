<?php /* Smarty version Smarty-3.1.13, created on 2019-12-04 20:50:29
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_planodecontas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177235de84645641228-67636861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0167b82bd7439b3911b4c10e80e9eb5c662c65a8' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_planodecontas.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177235de84645641228-67636861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PlanodeContas' => 0,
    'Contas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5de846456a8809_03226759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de846456a8809_03226759')) {function content_5de846456a8809_03226759($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Plano de Contas</h1>
	<a href="/info/PagarReceber/pagarreceber_planodecontas_novo" class="btn btn-sm btn-primary">Novo Plano de Contas</a>

	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Plano de Contas</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Contas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas']->key => $_smarty_tpl->tpl_vars['Contas']->value){
$_smarty_tpl->tpl_vars['Contas']->_loop = true;
?>
        <tr>
            <td><?php if ($_smarty_tpl->tpl_vars['Contas']->value['contagem']=="5"){?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['Contas']->value['contagem']=="10"){?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['Contas']->value['contagem']=="16"){?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php }?>
			<?php echo utf8_encode($_smarty_tpl->tpl_vars['Contas']->value['CODIGOCONTABIL']);?>
 - <?php echo utf8_encode($_smarty_tpl->tpl_vars['Contas']->value['NOME']);?>
</td>
            <td><a href="/info/PagarReceber/pagarreceber_planodecontas_ficha/<?php echo $_smarty_tpl->tpl_vars['Contas']->value['CONTAMOVIMENTOID'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>