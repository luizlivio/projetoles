<?php /* Smarty version Smarty-3.1.13, created on 2019-09-30 22:21:29
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms_configuracoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295575cd45cf4ddbcb5-91012994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1d9f1f5ce977338c01d47a2e7c185f5f9fabfe0' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms_configuracoes.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295575cd45cf4ddbcb5-91012994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd45cf4e50051_91892189',
  'variables' => 
  array (
    'status' => 0,
    'Dados' => 0,
    'PATH' => 0,
    'Dado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd45cf4e50051_91892189')) {function content_5cd45cf4e50051_91892189($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Configurações Salvas com sucesso!</div><?php }?>

<div class="step">
    <h1>Configurações de Envio e Recebimento</h1>
	<?php  $_smarty_tpl->tpl_vars['Dado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Dado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Dados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Dado']->key => $_smarty_tpl->tpl_vars['Dado']->value){
$_smarty_tpl->tpl_vars['Dado']->_loop = true;
?><?php } ?>
	<br>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/sms/SMS_salvaConfiguracoes">
		
	<div class="row">
	  <div class="col-lg-5">
		<label>Email de Recebimento de Respostas</label>
	  </div>
	  <div class="col-lg-7">
		  <input type="text" name="emailrecebidas" class="form-control" placeholder="Email de Recebimento" value="<?php echo $_smarty_tpl->tpl_vars['Dado']->value['emailrecebidas'];?>
">
	  </div>
	</div>
<hr />
	<div class="form-group">
		<table width="80%">
		  <tr>
			<td><input type="checkbox" name="optionsmsagendamento" value="1" <?php if ($_smarty_tpl->tpl_vars['Dado']->value['optionsmsagendamento']==1){?>checked<?php }?>></td>
			<td><label>SMS de Agendamento</label></td>
			<td><input type="text" name="smsagendamento" class="form-control" placeholder="Escreva o texto da SMS" value="<?php echo $_smarty_tpl->tpl_vars['Dado']->value['smsagendamento'];?>
"></td>
		  </tr>
		  <tr>
			<td><input type="checkbox" name="optionsmslembrete" value="1" <?php if ($_smarty_tpl->tpl_vars['Dado']->value['optionsmslembrete']==1){?>checked<?php }?>></td>
			<td><label>SMS de Confirmação</label></td>
			<td><input type="text" name="smslembrete" class="form-control" placeholder="Escreva o texto da SMS" value="<?php echo $_smarty_tpl->tpl_vars['Dado']->value['smslembrete'];?>
"></td>
		  </tr>
		  <tr>
			<td><input type="checkbox" name="optionsmsaniversario" value="1" <?php if ($_smarty_tpl->tpl_vars['Dado']->value['optionsmsaniversario']==1){?>checked<?php }?>></td>
			<td><label>SMS de Aniversário</label></td>
			<td><input type="text" name="smsaniversario" class="form-control" placeholder="Escreva o texto da SMS" value="<?php echo $_smarty_tpl->tpl_vars['Dado']->value['smsaniversario'];?>
"></td>
		  </tr>
		  <tr>
			<td><input type="checkbox" name="optionsmsfaltas" value="1" <?php if ($_smarty_tpl->tpl_vars['Dado']->value['optionsmsfaltas']==1){?>checked<?php }?>></td>
			<td><label>SMS de Pacientes que Faltaram</label></td>
			<td><input type="text" name="smsfaltas" class="form-control" placeholder="Escreva o texto da SMS" value="<?php echo $_smarty_tpl->tpl_vars['Dado']->value['smsfaltas'];?>
"></td>
		  </tr>
		  <tr>
			<td><input type="checkbox" name="optionsmsagradecimento" value="1" <?php if ($_smarty_tpl->tpl_vars['Dado']->value['optionsmsagradecimento']==1){?>checked<?php }?>></td>
			<td><label>SMS de Agradecimento</label></td>
			<td><input type="text" name="smsagradecimento" class="form-control" placeholder="Escreva o texto da SMS" value="<?php echo $_smarty_tpl->tpl_vars['Dado']->value['smsagradecimento'];?>
"></td>
		  </tr>
		</table>
	</div>
	<hr />
	<div class="row">
	  <div class="col-lg-5">
		<label>Horário de Envio dos Lembretes</label>
	  </div>
	  <div class="col-lg-7">
		  <input type="text" name="horariolembretes" class="form-control" placeholder="Horário de Envio" id="hora" value="<?php echo $_smarty_tpl->tpl_vars['Dado']->value['horariolembretes'];?>
">
	  </div>
	</div>
	<br>
	<button type="submit" class="btn btn-default">Salvar</button>
	</form>			
</div>

	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>