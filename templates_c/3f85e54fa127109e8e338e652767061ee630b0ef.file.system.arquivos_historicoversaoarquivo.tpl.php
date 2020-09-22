<?php /* Smarty version Smarty-3.1.13, created on 2019-11-08 23:11:10
         compiled from "engine\view\InfoPanel\pages\Arquivos\system.arquivos_historicoversaoarquivo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266215dc6203e8b9015-16425752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f85e54fa127109e8e338e652767061ee630b0ef' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Arquivos\\system.arquivos_historicoversaoarquivo.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266215dc6203e8b9015-16425752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Historico' => 0,
    'his' => 0,
    'Atual' => 0,
    'atu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dc6203e9855f4_53347306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc6203e9855f4_53347306')) {function content_5dc6203e9855f4_53347306($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Arquivos - Histórico de Versões</h1>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Id</th>
			<th>Data de Inclusão</th>
			<th>Dados da Versão</th>
            <th>Download</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['his'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['his']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Historico']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['his']->key => $_smarty_tpl->tpl_vars['his']->value){
$_smarty_tpl->tpl_vars['his']->_loop = true;
?>
		<tr>
            <td><label><?php echo $_smarty_tpl->tpl_vars['his']->value['Id'];?>
</label></td>
			<td><label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['his']->value['Data'],"%d/%m/%Y");?>
</label></td>
			<td><label><?php echo $_smarty_tpl->tpl_vars['his']->value['Descricao'];?>
</label></td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['his']->value['Link'];?>
" class="btn btn-sm btn-primary">Download</a></td>
        </tr>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['atu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['atu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Atual']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['atu']->key => $_smarty_tpl->tpl_vars['atu']->value){
$_smarty_tpl->tpl_vars['atu']->_loop = true;
?>
		<tr>
            <td><label><?php echo $_smarty_tpl->tpl_vars['atu']->value['Id'];?>
</label></td>
			<td><label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['atu']->value['Data'],"%d/%m/%Y");?>
</label></td>
			<td><label><?php echo $_smarty_tpl->tpl_vars['atu']->value['Descricao'];?>
</label></td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['atu']->value['Link'];?>
" class="btn btn-sm btn-primary">Download</a></td>
        </tr>
		<?php } ?>
	</table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>