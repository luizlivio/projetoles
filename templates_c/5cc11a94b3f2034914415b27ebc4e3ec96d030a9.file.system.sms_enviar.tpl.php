<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 14:32:45
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms_enviar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201555cd15ac7383e80-44652784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cc11a94b3f2034914415b27ebc4e3ec96d030a9' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms_enviar.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201555cd15ac7383e80-44652784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd15ac73bae22_93996147',
  'variables' => 
  array (
    'status' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd15ac73bae22_93996147')) {function content_5cd15ac73bae22_93996147($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Mensagem Incluída com sucesso!</div><?php }?>

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
    <h1>Enviar SMS</h1>
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/sms/SMS_novoEnvio">
		
		<label>Número de Envio</label>
		<input type="text" name="numero" class="form-control" id="celular">
		
		<label>Texto</label>
		<input type="text" name="texto" maxlength="160" class="form-control">
		
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
	
		<br>
		<button type="submit" class="btn btn-default">Enviar</button>	
		</form>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>