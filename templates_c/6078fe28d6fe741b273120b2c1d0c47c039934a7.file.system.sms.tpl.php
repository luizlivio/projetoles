<?php /* Smarty version Smarty-3.1.13, created on 2020-01-18 17:54:47
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243945cd15ac45ac319-18052371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6078fe28d6fe741b273120b2c1d0c47c039934a7' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms.tpl',
      1 => 1579380792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243945cd15ac45ac319-18052371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd15ac45e7831_63951500',
  'variables' => 
  array (
    'periodos' => 0,
    'periodo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd15ac45e7831_63951500')) {function content_5cd15ac45e7831_63951500($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>SMS</h1>
	
	<?php  $_smarty_tpl->tpl_vars['periodo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['periodo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periodos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['periodo']->key => $_smarty_tpl->tpl_vars['periodo']->value){
$_smarty_tpl->tpl_vars['periodo']->_loop = true;
?><?php } ?>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Módulo</th>
            <th>Acesso</th>
        </tr>
		</thead>
        <tr>
            <td>Painel</td>
            <td><a href="/info/sms/painel" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Enviar uma SMS</td>
            <td><a href="/info/sms/sms_enviar" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Envio de Várias SMS</td>
            <td><a href="/info/sms/sms_varias_enviar" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Mensagens Pendentes de Envio</td>
            <td><a href="/info/sms/sms_fila" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Mensagens Agendadas</td>
            <td><a href="/info/sms/sms_agendadas" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Estatísticas de Uso</td>
            <td><a href="/info/sms/sms_estatisticas/<?php echo $_smarty_tpl->tpl_vars['periodo']->value['mes'];?>
/<?php echo $_smarty_tpl->tpl_vars['periodo']->value['ano'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Histórico de SMS enviadas</td>
            <td><a href="/info/sms/sms_historico_ano" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Pagamentos</td>
            <td><a href="/info/sms/sms_pagamentos" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
		<tr>
            <td>Configurações</td>
            <td><a href="/info/sms/sms_configuracoes" class="btn btn-sm btn-primary">Acessar</a></td>
        </tr>
    </table>	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>