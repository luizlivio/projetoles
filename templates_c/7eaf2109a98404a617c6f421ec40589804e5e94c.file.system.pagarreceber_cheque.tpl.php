<?php /* Smarty version Smarty-3.1.13, created on 2020-02-25 21:02:11
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_cheque.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38075e55b583c1db75-06859747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eaf2109a98404a617c6f421ec40589804e5e94c' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_cheque.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38075e55b583c1db75-06859747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Pagar' => 0,
    'PATH' => 0,
    'Paga' => 0,
    'Bancos' => 0,
    'Banco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e55b583cb48f5_53464280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e55b583cb48f5_53464280')) {function content_5e55b583cb48f5_53464280($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
<?php  $_smarty_tpl->tpl_vars['Paga'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Paga']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pagar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Paga']->key => $_smarty_tpl->tpl_vars['Paga']->value){
$_smarty_tpl->tpl_vars['Paga']->_loop = true;
?><?php } ?>
	<h1>Validar Pagamento</h1>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoCheque">
	
	<div class="helper-display-none">
		<label>Valor</label>
		<input type="text" name="valor" class="form-control" value="<?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['VALORREAL']);?>
">
    </div>
	
	<div class="helper-display-none">
		<label>Favorecido</label>
		<input type="text" name="favorecido" class="form-control" value="<?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['DESCFAVORECIDO']);?>
">
    </div>
	
	<div>
		<label>Data</label>
		<input type="text" name="data" id = "data" class="form-control" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Paga']->value['DATAVENCIMENTO'],"%d/%m/%Y");?>
">
    </div>
	
	<div class="helper-display-none">
		<label>MovimentoId</label>
		<input type="text" name="movimentoid" class="form-control" value="<?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['MOVIMENTOID']);?>
">
    </div>
	
	<div class="form-group">
		<label>Banco</label>
		<select name="banco" id="banco" class="form-control">
			<option value="0" selected>Selecionar</option>
			<?php  $_smarty_tpl->tpl_vars['Banco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Banco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Bancos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Banco']->key => $_smarty_tpl->tpl_vars['Banco']->value){
$_smarty_tpl->tpl_vars['Banco']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['Banco']->value['BANCOID'];?>
"><?php echo utf8_encode($_smarty_tpl->tpl_vars['Banco']->value['NOME']);?>
</option>
			<?php } ?>
		</select>
	</div>
	
	<div class="form-group">
		<label>Agência</label>
		<select name="agencia" id="agencia" class="form-control">
			<option disabled selected>Selecionar</option>
		</select>
	</div>
	
	<div class="form-group">
		<label>Conta Bancária</label>
		<select name="conta" id="conta" class="form-control">
			<option disabled selected>Selecionar</option>
		</select>
	</div>
	
	<div class="form-group">
		<label>Tipo de Operação</label>
		<select name="tipo" class="form-control">
			<option value="1" selected>Gerar Cheque</option>
			<option value="2">Apenas Liquidar</option>
		</select>
	</div>
	
	<br>
	<div>
		<button type="submit" class="btn btn-default">Salvar</button>
	</div>
    </form>
</div>



<script>
$(function() {
	$('#banco').change(function(){
		$.getJSON('/info/PagarReceber/getAgencia', {BancoId : $('#banco').val()}, function(data) {
			$('#agencia').html(" ");
			
			$('#agencia').append('<option disabled selected>Selecionar</option>');
			$.each(data, function(i, item) {
				$('#agencia').append('<option value="'+item.AGENCIAID+'">'+item.NOME+'</option>');
			});
		});
	});
});
</script>





<script>
$(function() {
	$('#agencia').change(function(){
		$.getJSON('/info/PagarReceber/getConta', {AgenciaId : $('#agencia').val()}, function(data) {
			$('#conta').html(" ");
			
			$('#conta').append('<option disabled selected>Selecionar</option>');
			$.each(data, function(i, item) {
				$('#conta').append('<option value="'+item.CONTABANCOID+'">'+item.NUMEROCONTA+'</option>');
			});
		});
	});
});
</script>



<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script src="http://www.datasantos.com.br/styles//js/jquery.maskedinput.min.js"></script> 
<script src="http://www.datasantos.com.br/styles//bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="/styles/js/jquery.validate.min.js"></script>
<script src="http://www.datasantos.com.br/styles//js/core.medic.cti.js"></script>
<script src="http://www.datasantos.com.br/styles/js/chart.js"></script>
<script src="http://www.datasantos.com.br/styles/js/c3.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>

<script type="text/javascript" src="/styles/js/info/moment.js"></script>
<script type="text/javascript" src="/styles/js/angularjs/angular.min.js"></script>
<script type="text/javascript" src="/styles/js/angularjs/resource.min.js"></script>
<script type="text/javascript" src="/styles/js/angularjs/sanitize.min.js"></script>
<script src="/styles/js/core.info.js"></script>
<script type="text/javascript" src="/styles/js/info/core.js"></script>

</body>
</html><?php }} ?>