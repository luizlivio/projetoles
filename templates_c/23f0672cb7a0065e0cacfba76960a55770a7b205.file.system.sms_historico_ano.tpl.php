<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 01:26:45
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms_historico_ano.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27445cd1e2dc76a853-53595665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23f0672cb7a0065e0cacfba76960a55770a7b205' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms_historico_ano.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27445cd1e2dc76a853-53595665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd1e2dc7c3774_77945148',
  'variables' => 
  array (
    'periodos' => 0,
    'periodo' => 0,
    'totalizadora' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd1e2dc7c3774_77945148')) {function content_5cd1e2dc7c3774_77945148($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>SMS - Histórico</h1>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Ano</th>
			<th>Envios</th>
            <th>Acesso</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['periodo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['periodo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periodos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['periodo']->key => $_smarty_tpl->tpl_vars['periodo']->value){
$_smarty_tpl->tpl_vars['periodo']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['periodo']->value['ano'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['periodo']->value['conta'];?>
 envio(s)</td>
            <td><a href="/info/sms/sms_historico_mes/<?php echo $_smarty_tpl->tpl_vars['periodo']->value['ano'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<?php } ?>
    </table>	
</div>

<div class="step">
	<h1>SMS - Totalizadora</h1>
	<label>Para este calculo são levados em conta somente as SMS sem erro no envio</label>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>SMS Enviadas Via Internet</th>
			<th>SMS Enviadas para Agendamento</th>
            <th>SMS Enviadas para Lembrete</th>
			<th>SMS Enviadas para Aniversários</th>
			<th>SMS Enviadas para Pac. Falta</th>
			<th>SMS Enviadas para Pac. Comp.</th>
			<th>Total</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['total'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['total']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['totalizadora']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['total']->key => $_smarty_tpl->tpl_vars['total']->value){
$_smarty_tpl->tpl_vars['total']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['total']->value['INTERNET'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['total']->value['AGENDAMENTO'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['total']->value['LEMBRETE'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['total']->value['ANIVERSARIO'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['total']->value['FALTOU'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['total']->value['COMPARECEU'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['total']->value['INTERNET']+$_smarty_tpl->tpl_vars['total']->value['AGENDAMENTO']+$_smarty_tpl->tpl_vars['total']->value['LEMBRETE']+$_smarty_tpl->tpl_vars['total']->value['ANIVERSARIO']+$_smarty_tpl->tpl_vars['total']->value['FALTOU']+$_smarty_tpl->tpl_vars['total']->value['COMPARECEU'];?>
</td>
        </tr>
		<?php } ?>
    </table>	
</div>	
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>