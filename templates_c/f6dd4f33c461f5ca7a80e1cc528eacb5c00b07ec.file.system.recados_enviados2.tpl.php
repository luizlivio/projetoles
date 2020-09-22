<?php /* Smarty version Smarty-3.1.13, created on 2019-07-07 02:15:38
         compiled from "engine\view\InfoPanel\pages\Recados\system.recados_enviados2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83655cec2b7d6f64a9-46682632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6dd4f33c461f5ca7a80e1cc528eacb5c00b07ec' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Recados\\system.recados_enviados2.tpl',
      1 => 1561603811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83655cec2b7d6f64a9-46682632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cec2b7d8da2e5_76948353',
  'variables' => 
  array (
    'convenios' => 0,
    'convenio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cec2b7d8da2e5_76948353')) {function content_5cec2b7d8da2e5_76948353($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Recados Enviados</h1>
    <table class="table table-hover table-stripped">
        <thead>
		<tr>
            <th>Destinatário</th>
            <th>Data de Envio</th>
			<th>Recado</th>
			<th>Status</th>
        </tr>
		</thead>
        <?php  $_smarty_tpl->tpl_vars['convenio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['convenio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['convenios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['convenio']->key => $_smarty_tpl->tpl_vars['convenio']->value){
$_smarty_tpl->tpl_vars['convenio']->_loop = true;
?>
        <tr>
            <td><?php echo utf8_encode($_smarty_tpl->tpl_vars['convenio']->value['destinatario']);?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['convenio']->value['data'],"%d/%m/%Y");?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['convenio']->value['recado'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['convenio']->value['status']=='0'){?>Apagado<?php }?><?php if ($_smarty_tpl->tpl_vars['convenio']->value['status']=='1'){?>Ativo<?php }?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>