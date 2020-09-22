<?php /* Smarty version Smarty-3.1.13, created on 2019-07-07 02:01:00
         compiled from "engine\view\InfoPanel\pages\Faturamento\system.contas_filtro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58605cd5a8cdbdec85-70492043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6754a5bd943ef7fe89894704656a7ee2343b1e5' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Faturamento\\system.contas_filtro.tpl',
      1 => 1561603800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58605cd5a8cdbdec85-70492043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd5a8cdc61d22_63449202',
  'variables' => 
  array (
    'status' => 0,
    'contas' => 0,
    'conta' => 0,
    'mes' => 0,
    'ano' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd5a8cdc61d22_63449202')) {function content_5cd5a8cdc61d22_63449202($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Boleto Incluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-danger" role="alert">Erro no Envio do Boleto!</div><?php }?>

<div class="step">
	<h1>Contas Filtradas</h1>
	
    <table class="table table-hover table-stripped">
        <thead>
		<tr>
            <th>Usuário</th>
            <th>SMS Enviados</th>
			<th>Valor</th>
			<th>Acessar</th>
        </tr>
		</thead>
        <?php  $_smarty_tpl->tpl_vars['conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conta']->key => $_smarty_tpl->tpl_vars['conta']->value){
$_smarty_tpl->tpl_vars['conta']->_loop = true;
?>
        <tr>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['conta']->value['Nome']);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['conta']->value['envios'];?>
</td>
			<td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['conta']->value['envios']*$_smarty_tpl->tpl_vars['conta']->value['Valor'],2,',','.');?>
</td>
			<td><a href="/info/faturamento/geraFatura/<?php echo $_smarty_tpl->tpl_vars['conta']->value['UserId'];?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
" class="btn btn-sm btn-primary">Lançar</a></td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>