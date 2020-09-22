<?php /* Smarty version Smarty-3.1.13, created on 2019-07-07 02:00:42
         compiled from "engine\view\InfoPanel\pages\Faturamento\system.faturamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147385cd5a8a16e6c84-13664519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '652fed247f0e11738af288b3424792e947276bd0' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Faturamento\\system.faturamento.tpl',
      1 => 1561603800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147385cd5a8a16e6c84-13664519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd5a8a1730b60_55699654',
  'variables' => 
  array (
    'periodos' => 0,
    'per' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd5a8a1730b60_55699654')) {function content_5cd5a8a1730b60_55699654($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['per'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['per']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periodos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['per']->key => $_smarty_tpl->tpl_vars['per']->value){
$_smarty_tpl->tpl_vars['per']->_loop = true;
?><?php } ?>
<div class="step">
	<h1>Faturamento</h1>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Módulo</th>
            <th>Acesso</th>
        </tr>
		</thead>
        <tr>
            <td>Fechamento de Contas</td>
            <td><a href="/info/faturamento/contas" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Boletos em Aberto</td>
            <td><a href="/info/faturamento/boletos" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Estatísticas</td>
            <td><a href="/info/faturamento/estatisticas/<?php echo $_smarty_tpl->tpl_vars['per']->value['mes'];?>
/<?php echo $_smarty_tpl->tpl_vars['per']->value['ano'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>