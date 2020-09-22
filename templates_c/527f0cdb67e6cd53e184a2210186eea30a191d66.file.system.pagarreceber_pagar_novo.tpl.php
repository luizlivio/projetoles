<?php /* Smarty version Smarty-3.1.13, created on 2019-12-04 20:52:16
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_pagar_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182285de846b08b5be5-51004557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527f0cdb67e6cd53e184a2210186eea30a191d66' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_pagar_novo.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182285de846b08b5be5-51004557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'Favorecidos' => 0,
    'Fav' => 0,
    'PlanodeContas' => 0,
    'Contas' => 0,
    'Empresas' => 0,
    'Empresa' => 0,
    'TipoDocumento' => 0,
    'TipoDoc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5de846b093feb8_92108058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de846b093feb8_92108058')) {function content_5de846b093feb8_92108058($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">//<![CDATA[ 
			$(window).load(function(){
 
			document.getElementById('favorecidoid').addEventListener('change', function() {
			var value = this.value;
			var a1 = document.getElementById('b1');

			b1.style.display = 'none';

			switch(value) {
			case 'NENHUM': b1.style.display = 'block'; break;
			
			}
			})
			
			});
		</script>
		
<div class="step">
	<h1>Nova Despesa</h1>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoPagar">
	
	<div class="form-group">
		<label>Data de Vencimento</label>
		<input type="text" id="data" name="datavencimento" class="form-control">
    </div>
	
	<div class="form-group">
		<label>Favorecido</label>
		<select name="favorecidoid" id="favorecidoid" class="form-control">
			<option value="0" selected>Selecionar</option>
			<option value="NENHUM">Outro</option>
			<?php  $_smarty_tpl->tpl_vars['Fav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Favorecidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fav']->key => $_smarty_tpl->tpl_vars['Fav']->value){
$_smarty_tpl->tpl_vars['Fav']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FAVORECIDOID'];?>
"><?php echo utf8_encode($_smarty_tpl->tpl_vars['Fav']->value['NOME']);?>
</option>
			<?php } ?>
		</select>
	</div>
	
	<div class="form-group">
		<div id="b1" class="helper-display-none"> <!-- demtro do css estilo "hidden" apenas tem display:none que não deixa a div aparecer -->
			<div class="form-group">
				<label>Nome do Favorecido</label>
				<input type="text" name="nomefavorecido" class="form-control">
			</div>
			<div class="form-group">
				<label>CNPJ/CPF Favorecido</label>
				<input type="text" name="cnpjcpffavorecido" class="form-control">
			</div>
		</div>
	</div>
	
	<div class="form-group">
		<label>Plano de Contas</label>
		<select name="planodecontasid" class="form-control">
			<option value="0" selected>Selecionar</option>
			<?php  $_smarty_tpl->tpl_vars['Contas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas']->key => $_smarty_tpl->tpl_vars['Contas']->value){
$_smarty_tpl->tpl_vars['Contas']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['Contas']->value['CONTAMOVIMENTOID'];?>
"><?php echo utf8_encode($_smarty_tpl->tpl_vars['Contas']->value['NOME']);?>
</option>
			<?php } ?>
		</select>
	</div>
	
	<div class="form-group">
		<label>Histórico</label>
		<input type="text" name="historico" class="form-control">
    </div>
	
	<div class="form-group">
		<label>Empresa</label>
		<select name="empresaid" class="form-control">
			<option value="0" selected>Selecionar</option>
			<?php  $_smarty_tpl->tpl_vars['Empresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Empresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Empresas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Empresa']->key => $_smarty_tpl->tpl_vars['Empresa']->value){
$_smarty_tpl->tpl_vars['Empresa']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['Empresa']->value['EMPRESAID'];?>
"><?php echo utf8_encode($_smarty_tpl->tpl_vars['Empresa']->value['DESCRICAO']);?>
</option>
			<?php } ?>
		</select>
	</div>
	
	<div class="form-group">
		<label>Tipo Documento</label>
		<select name="tipodocumento" class="form-control">
			<option value="0" selected>Selecionar</option>
			<?php  $_smarty_tpl->tpl_vars['TipoDoc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TipoDoc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TipoDocumento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TipoDoc']->key => $_smarty_tpl->tpl_vars['TipoDoc']->value){
$_smarty_tpl->tpl_vars['TipoDoc']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['TipoDoc']->value['TIPODOCUMENTOID'];?>
"><?php echo utf8_encode($_smarty_tpl->tpl_vars['TipoDoc']->value['DESCRICAO']);?>
</option>
			<?php } ?>
		</select>
	</div>
	
	<div class="form-group">
		<label>Documento</label>
		<input type="text" name="documento" class="form-control">
    </div>
	
	<div class="form-group">
		<label>Valor: (R$)</label>
		<input type="text" name="valorreal" class="form-control">
    </div>
	
	<label>Impostos:</label>
	<div class="form-group">
	<table>
        <tr>
            <td><input type="checkbox" name="optionir" value="1"><br></td>
            <td><label>IR(R$)</label></td>
			<td><input type="text" name="numeroir" class="form-control" placeholder="IR"></td>
			<td></td>
			<td><input type="checkbox" name="optionpis" value="1"><br></td>
            <td><label>PIS(R$)</label></td>
			<td><input type="text" name="numeropis" class="form-control" placeholder="PIS"></td>
			<td></td>
			<td><input type="checkbox" name="optioncofins" value="1"><br></td>
            <td><label>COFINS(R$)</label></td>
			<td><input type="text" name="numerocofins" class="form-control" placeholder="COFINS"></td>
		</tr>
        <tr>
			<td><input type="checkbox" name="optioninss" value="1"><br></td>
            <td><label>INSS(R$)</label></td>
			<td><input type="text" name="numeroinss" class="form-control" placeholder="INSS"></td>
			<td></td>
			<td><input type="checkbox" name="optioniss" value="1"><br></td>
            <td><label>ISS(R$)</label></td>
			<td><input type="text" name="numeroiss" class="form-control" placeholder="ISS"></td>
			<td></td>
			<td><input type="checkbox" name="optioncsll" value="1"><br></td>
            <td><label>CSLL(R$)</label></td>
			<td><input type="text" name="numerocsll" class="form-control" placeholder="CSLL"></td>
        </tr>
	</table>
	</div>
	
		<button type="submit" class="btn btn-default">Continuar</button>
    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>