<?php /* Smarty version Smarty-3.1.13, created on 2020-04-28 16:33:50
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms_historico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23015cd1e2f034caa9-44483113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aff5a5d3e2b9ab42fa4997e34a755db77fb7dbef' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms_historico.tpl',
      1 => 1588102422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23015cd1e2f034caa9-44483113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd1e2f03da567_44045165',
  'variables' => 
  array (
    'tipo' => 0,
    'ano' => 0,
    'mes' => 0,
    'dia' => 0,
    'periodos' => 0,
    'periodo' => 0,
    'Respostas' => 0,
    'Resposta' => 0,
    'mensagem' => 0,
    'totalizadora' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd1e2f03da567_44045165')) {function content_5cd1e2f03da567_44045165($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>SMS - Histórico</h1>
	

	<center>
		<div class="btn-group" role="group" aria-label="...">
		  <button type="button" class="btn btn-<?php if ($_smarty_tpl->tpl_vars['tipo']->value==0){?>primary<?php }else{ ?>default<?php }?>" onclick="window.location.href='/info/sms/sms_historico/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/0'">Todas</button>
		  <button type="button" class="btn btn-<?php if ($_smarty_tpl->tpl_vars['tipo']->value==1){?>primary<?php }else{ ?>default<?php }?>" onclick="window.location.href='/info/sms/sms_historico/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/1'">Enviadas com sucesso</button>
		  <button type="button" class="btn btn-<?php if ($_smarty_tpl->tpl_vars['tipo']->value==2){?>primary<?php }else{ ?>default<?php }?>" onclick="window.location.href='/info/sms/sms_historico/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/2'">Mensagens com erro</button>
		</div>
	</center>

	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Id</th>
			<th>Destinatario</th>
            <th>Data</th>
			<th>Mensagem</th>
			<th>Status</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['periodo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['periodo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periodos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['periodo']->key => $_smarty_tpl->tpl_vars['periodo']->value){
$_smarty_tpl->tpl_vars['periodo']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['periodo']->value['LOGID'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['periodo']->value['DESTINATARIO'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['periodo']->value['DATA'],"%d/%m/%Y");?>
 <?php echo $_smarty_tpl->tpl_vars['periodo']->value['HORA'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['periodo']->value['CONTEUDOMSG'];?>
</td>
            <td><?php echo str_replace("Æ","a",utf8_encode($_smarty_tpl->tpl_vars['periodo']->value['MENSAGEM']));?>
</td>
        </tr>
		<?php  $_smarty_tpl->tpl_vars['Resposta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Resposta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Respostas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Resposta']->key => $_smarty_tpl->tpl_vars['Resposta']->value){
$_smarty_tpl->tpl_vars['Resposta']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['Resposta']->value['MSGID']==$_smarty_tpl->tpl_vars['periodo']->value['MSGID']){?>

			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("'",'',$_smarty_tpl->tpl_vars['Resposta']->value['MENSAGEM']), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|01","Ã",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|02","À",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|03","Á",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|04","Â",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|05","Ã",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|06","É",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|07","È",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|08","Ê",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|09","Í",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|10","Ì",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|11","Ó",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|12","Ò",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|13","Õ",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|14","Ô",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|15","Ù",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|16","Ú",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|17","Ç",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|18","à",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|19","á",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|20","â",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|21","ã",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|22","é",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|23","è",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|24","ê",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|25","í",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|26","ì",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|27","ó",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|28","ò",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|29","õ",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|30","ô",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|31","ù",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|32","ú",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['mensagem'] = new Smarty_variable(str_replace("|33","ç",$_smarty_tpl->tpl_vars['mensagem']->value), null, 0);?>

        <tr>
            <td></td>
			<td><img src="/styles/images/celular.png" alt="alternative text" title="Resposta"> Resposta:</td>
			<td valign="middle"><b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Resposta']->value['DATA'],"%d/%m/%Y");?>
 <?php echo $_smarty_tpl->tpl_vars['Resposta']->value['HORA'];?>
</b></td>
			<td valign="middle"><b><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</b></td>
            <td></td>
        </tr>
		<?php }?>
		<?php } ?>
		<?php } ?>
    </table>	
</div>
	
<div class="step">
	<h1>SMS - Totalizadora</h1>
	<label>Para este calculo são levados em conta somente as SMS sem erro no envio</label>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>SMS Enviadas Via Internet</th>
			<th>SMS Enviadas para Agendamento</th>
            <th>SMS Enviadas para Lembrete</th>
			<th>SMS Enviadas para Aniversários</th>
			<th>SMS Enviadas para Pac. Falta</th>
			<th>SMS Enviadas para Pac. Comp.</th>
			<th>Total</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['total'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['total']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['totalizadora']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['total']->key => $_smarty_tpl->tpl_vars['total']->value){
$_smarty_tpl->tpl_vars['total']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['total']->value['INTERNET'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['total']->value['AGENDAMENTO'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['total']->value['LEMBRETE'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['total']->value['ANIVERSARIO'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['total']->value['FALTOU'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['total']->value['COMPARECEU'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['total']->value['INTERNET']+$_smarty_tpl->tpl_vars['total']->value['AGENDAMENTO']+$_smarty_tpl->tpl_vars['total']->value['LEMBRETE']+$_smarty_tpl->tpl_vars['total']->value['ANIVERSARIO']+$_smarty_tpl->tpl_vars['total']->value['FALTOU']+$_smarty_tpl->tpl_vars['total']->value['COMPARECEU'];?>
</td>
        </tr>
		<?php } ?>
    </table>	
</div>	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>