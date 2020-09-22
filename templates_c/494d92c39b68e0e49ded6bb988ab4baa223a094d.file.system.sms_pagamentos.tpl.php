<?php /* Smarty version Smarty-3.1.13, created on 2020-07-28 12:17:19
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms_pagamentos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51995f20417f8dc972-65937134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '494d92c39b68e0e49ded6bb988ab4baa223a094d' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms_pagamentos.tpl',
      1 => 1561603811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51995f20417f8dc972-65937134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagamentos' => 0,
    'pag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f20417fc84434_35393355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f20417fc84434_35393355')) {function content_5f20417fc84434_35393355($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Pagamentos</h1>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Id</th>
			<th>Descrição</th>
			<th>Valor</th>
            <th>Status</th>
			<th>Ações</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['pag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagamentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pag']->key => $_smarty_tpl->tpl_vars['pag']->value){
$_smarty_tpl->tpl_vars['pag']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['pag']->value['Id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['pag']->value['Descricao'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['pag']->value['Valor'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['pag']->value['Status']=="0"){?>Em Aberto<?php }else{ ?>Processada<?php }?></td>
            <td><?php if ($_smarty_tpl->tpl_vars['pag']->value['Status']=="0"){?><a href="<?php echo $_smarty_tpl->tpl_vars['pag']->value['Botao'];?>
" class="btn btn-sm btn-primary">Visualizar Boleto</a><?php }?></td>
        </tr>
		<?php } ?>
    </table>	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>