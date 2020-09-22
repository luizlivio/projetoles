<?php /* Smarty version Smarty-3.1.13, created on 2019-07-25 16:21:20
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms_fila.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227985cd73ece1176f5-32079489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c1b90d84614098d82431523222897f1eac8fd3' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms_fila.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227985cd73ece1176f5-32079489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd73ece3fe054_99510235',
  'variables' => 
  array (
    'status' => 0,
    'Administradores' => 0,
    'admin' => 0,
    'PATH' => 0,
    'Usuarios' => 0,
    'Usu' => 0,
    'empresaid' => 0,
    'Conta' => 0,
    'Cont' => 0,
    'Pendentes' => 0,
    'Pendente' => 0,
    'periodo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd73ece3fe054_99510235')) {function content_5cd73ece3fe054_99510235($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Mensagem Editada com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Mensagem Excluida com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Mensagens Excluídas com sucesso!</div><?php }?>

<div class="step">
	<h1>SMS - Fila de Envios</h1>
	<?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Administradores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value){
$_smarty_tpl->tpl_vars['admin']->_loop = true;
?><?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['admin']->value['conta']==1){?>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/sms/PesquisaOutrasListas">
	
	<div class="row">
	  <div class="col-lg-3">
		<label>Exibir outro Usuário:</label>
	  </div>
	  <div class="col-lg-7">
		<select name="pesquisaid" class="form-control">
			<?php  $_smarty_tpl->tpl_vars['Usu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Usu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Usu']->key => $_smarty_tpl->tpl_vars['Usu']->value){
$_smarty_tpl->tpl_vars['Usu']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['Usu']->value['USERID'];?>
" <?php if ($_smarty_tpl->tpl_vars['Usu']->value['USERID']==$_smarty_tpl->tpl_vars['empresaid']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Usu']->value['NOME'];?>
</option>
			<?php } ?>
		</select>
	  </div>
	  <div class="col-lg-2">
			<button class="btn btn-default" type="submit">Pesquisar</button>
	  </div>
	</div>
	</form>
	<?php }?>
	
	
	<?php  $_smarty_tpl->tpl_vars['Cont'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Cont']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Conta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Cont']->key => $_smarty_tpl->tpl_vars['Cont']->value){
$_smarty_tpl->tpl_vars['Cont']->_loop = true;
?><?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['Cont']->value['Conta']==0){?><label>Não há mensagens a serem enviadas!</label><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Cont']->value['Conta']==1){?><label>Existe 1 mensagem pendente de envio</label><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Cont']->value['Conta']>1){?><label>Existem <?php echo $_smarty_tpl->tpl_vars['Cont']->value['Conta'];?>
 mensagens pendentes de envio</label><?php }?>
	
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Id</th>
			<th>Destinatario</th>
            <th>Data</th>
			<th>Mensagem</th>
			<th>Status</th>
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
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Pendente']->value['DATA'],"%d/%m/%Y");?>
 <?php echo $_smarty_tpl->tpl_vars['periodo']->value['HORA'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Pendente']->value['MENSAGEM'];?>
</td>
            <td>Aguardando Envio</td>
			<td><a href="/info/sms/sms_edita/<?php echo $_smarty_tpl->tpl_vars['Pendente']->value['MSGID'];?>
/<?php echo $_smarty_tpl->tpl_vars['empresaid']->value;?>
" class="btn btn-sm btn-primary">Editar</a></td>
			<td><a href="/info/sms/sms_exclui/<?php echo $_smarty_tpl->tpl_vars['Pendente']->value['MSGID'];?>
/<?php echo $_smarty_tpl->tpl_vars['empresaid']->value;?>
" class="btn btn-sm btn-danger">Excluir</a></td>
        </tr>
		<?php } ?>
    </table>	
	
	<br>
	<?php if ($_smarty_tpl->tpl_vars['Cont']->value['Conta']!=0){?><a href="/info/sms/sms_exclui_tudo/<?php echo $_smarty_tpl->tpl_vars['empresaid']->value;?>
" class="btn btn-sm btn-danger">Excluir Todas</a><?php }?>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>