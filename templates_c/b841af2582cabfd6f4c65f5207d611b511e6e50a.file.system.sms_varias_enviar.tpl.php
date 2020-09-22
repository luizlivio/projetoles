<?php /* Smarty version Smarty-3.1.13, created on 2019-07-01 14:34:09
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms_varias_enviar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275225cd18cdb0713c6-11727296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b841af2582cabfd6f4c65f5207d611b511e6e50a' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms_varias_enviar.tpl',
      1 => 1561603811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275225cd18cdb0713c6-11727296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd18cdb0b64a9_90558860',
  'variables' => 
  array (
    'enviado' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd18cdb0b64a9_90558860')) {function content_5cd18cdb0b64a9_90558860($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['enviado']->value==1){?><div class="alert alert-success" role="alert">Mensagens Incluidas com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==2){?><div class="alert alert-danger" role="alert">Erro na Inclusao de Mensagens!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==3){?><div class="alert alert-danger" role="alert">Erro no formato do Arquivo, Favor enviar em Arquivo de Texto (txt)!</div><?php }?>

<script type="text/javascript">//<![CDATA[ 
			$(window).load(function(){
 
			document.getElementById('tipo').addEventListener('change', function() {
			var value = this.value;
			var a1 = document.getElementById('a1');

			a1.style.display = 'none';

			switch(value) {
			case '2': a1.style.display = 'block'; break;
			
			}
			})
			
			});
		</script>
		
<div class="step">
    <h1>Upload de Documentos</h1>
    <br />
	
		<form action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/sms/SMS_MultiplosEnviar" method="post" enctype="multipart/form-data">
			
			<div >
				<label>Mensagem</label>
				<input type="text" name="texto" maxlength="160" class="form-control">
			</div>
			
			<label for="arquivo">Arquivo:</label> 
			
			<input type="file" name="arquivo" id="arquivo" class="form-control"/>
			
			<label for="tipo">Tipo</label>
			<select name="tipo" id="tipo" class="form-control">
				<option value="1" selected>Enviar Agora</option>
				<option value="2">Envio Agendado</option>
			</select>
		
			<div id="a1" class="helper-display-none">
				<label>Data Agendada</label>
				<input type="text" name="dataagendada" class="form-control" placeholder="Data Agendada" id="data">

				<label>Hora Agendada</label>
				<input type="text" name="horaagendada" class="form-control" placeholder="Hora Agendada" id="hora">
			</div>
			
			<br />
			<br />
			
			<input type="submit" value="Enviar" />
			
		</form>
<div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>