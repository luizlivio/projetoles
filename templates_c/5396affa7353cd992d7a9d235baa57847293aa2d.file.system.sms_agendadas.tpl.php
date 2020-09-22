<?php /* Smarty version Smarty-3.1.13, created on 2019-09-02 19:10:46
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms_agendadas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20125d6d9366a01722-09084058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5396affa7353cd992d7a9d235baa57847293aa2d' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms_agendadas.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20125d6d9366a01722-09084058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'Conta' => 0,
    'Cont' => 0,
    'Pendentes' => 0,
    'Pendente' => 0,
    'empresaid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d6d9366d9fbd9_70701619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d6d9366d9fbd9_70701619')) {function content_5d6d9366d9fbd9_70701619($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Mensagem Editada com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Mensagem Excluida com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Mensagens Excluídas com sucesso!</div><?php }?>

<div class="step">
	<h1>SMS - Agendadas</h1>	
	
	<?php  $_smarty_tpl->tpl_vars['Cont'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Cont']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Conta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Cont']->key => $_smarty_tpl->tpl_vars['Cont']->value){
$_smarty_tpl->tpl_vars['Cont']->_loop = true;
?><?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['Cont']->value['Conta']==0){?><label>Não há mensagens Agendadas!</label><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Cont']->value['Conta']==1){?><label>Existe 1 mensagem Agendada</label><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Cont']->value['Conta']>1){?><label>Existem <?php echo $_smarty_tpl->tpl_vars['Cont']->value['Conta'];?>
 mensagens Agendas</label><?php }?>
	
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Id</th>
			<th>Destinatario</th>
			<th>Mensagem</th>
			<th>Data/Hora Agendada</th>
			<th>Editar</th>
			<th>Excluir</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Pendente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Pendente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pendentes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Pendente']->key => $_smarty_tpl->tpl_vars['Pendente']->value){
$_smarty_tpl->tpl_vars['Pendente']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Pendente']->value['MSGID'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Pendente']->value['DESTINATARIO'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Pendente']->value['MENSAGEM'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Pendente']->value['DATAENVIO'],"%d/%m/%Y");?>
 <?php echo $_smarty_tpl->tpl_vars['Pendente']->value['HORAENVIO'];?>
</td>
			<td><a href="/info/sms/sms_agendada_edita/<?php echo $_smarty_tpl->tpl_vars['Pendente']->value['MSGID'];?>
/<?php echo $_smarty_tpl->tpl_vars['empresaid']->value;?>
" class="btn btn-sm btn-primary">Editar</a></td>
			<td><a href="/info/sms/sms_agendade_exclui/<?php echo $_smarty_tpl->tpl_vars['Pendente']->value['MSGID'];?>
/<?php echo $_smarty_tpl->tpl_vars['empresaid']->value;?>
" class="btn btn-sm btn-danger">Excluir</a></td>
        </tr>
		<?php } ?>
    </table>	
	
	<br>
	<?php if ($_smarty_tpl->tpl_vars['Cont']->value['Conta']!=0){?><a href="/info/sms/sms_agendada_exclui_tudo/<?php echo $_smarty_tpl->tpl_vars['empresaid']->value;?>
" class="btn btn-sm btn-danger">Excluir Todas</a><?php }?>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>