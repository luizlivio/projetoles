<?php /* Smarty version Smarty-3.1.13, created on 2019-07-07 02:00:53
         compiled from "engine\view\InfoPanel\pages\Faturamento\system.contas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:313515cd5a8c28fb9d8-59047476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42cb3abdf53e0ca64b7e287543408d68e6f512ec' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Faturamento\\system.contas.tpl',
      1 => 1561603800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313515cd5a8c28fb9d8-59047476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd5a8c2977126_08633696',
  'variables' => 
  array (
    'PATH' => 0,
    'mes' => 0,
    'm' => 0,
    'ano' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd5a8c2977126_08633696')) {function content_5cd5a8c2977126_08633696($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Fechamento de Contas</h1>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/faturamento/novoFiltro">
		<div class="form-group">
            <label>Período do Filtro</label>
			
			<table>
				<tr>
				<td><label>Mês</label></td>
				<td><select name="mes"" class="form-control">
						<option value="">Selecionar</option>
					<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>	
						<option value="<?php echo $_smarty_tpl->tpl_vars['m']->value['Mes'];?>
"><?php if ($_smarty_tpl->tpl_vars['m']->value['Mes']==1){?>Janeiro
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==2){?>Fevereiro
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==3){?>Março
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==4){?>Abril
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==5){?>Maio
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==6){?>Junho
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==7){?>Julho
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==8){?>Agosto
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==9){?>Setembro
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==10){?>Outubro
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==11){?>Novembro
						<?php }elseif($_smarty_tpl->tpl_vars['m']->value['Mes']==12){?>Dezembro<?php }?></option>
					<?php } ?>
					</select></td>
					
				<td><label>Ano</label></td>
				<td><select name="ano" class="form-control">
						<option value="">Selecionar</option>
						<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ano']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>	
							<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['Ano'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['Ano'];?>
</option>
						<?php } ?>	
					</select></td>
				</tr>
			</table>
        </div>
		
		<button type="submit" class="btn btn-default">Gerar</button>
	</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>