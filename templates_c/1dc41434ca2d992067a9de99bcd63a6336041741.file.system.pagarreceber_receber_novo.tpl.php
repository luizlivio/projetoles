<?php /* Smarty version Smarty-3.1.13, created on 2019-12-04 20:52:35
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_receber_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283105de846c3c4fc46-11293401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dc41434ca2d992067a9de99bcd63a6336041741' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_receber_novo.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283105de846c3c4fc46-11293401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'grupoempresaid' => 0,
    'Favorecidos' => 0,
    'Fav' => 0,
    'PlanodeContas' => 0,
    'Contas' => 0,
    'Empresas' => 0,
    'Empresa' => 0,
    'TipoDocumento' => 0,
    'TipoDoc' => 0,
    'Usuarios' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5de846c3cffd03_47511348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de846c3cffd03_47511348')) {function content_5de846c3cffd03_47511348($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoReceber/<?php echo $_smarty_tpl->tpl_vars['grupoempresaid']->value;?>
" method="post" enctype="multipart/form-data">
		<h1>Novo Recebimento</h1>
	
		<div class="form-group">
			<label>Data de Vencimento</label>
			<input type="text" name="datavencimento" id="data" class="form-control">
		</div>
	
		<div class="form-group">
			<label>Favorecido</label>
			<select name="favorecidoid" class="form-control">
				<option value="0" selected>Selecionar</option>
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
			<label>Valor</label>
			<input type="text" name="valorprevisto" class="form-control">
		</div>
	
		<label><input type="checkbox" name="optiontarifa" value="1"> Incluir taxa de geração de boleto (F2B)</label>
		<br>
		<label><input type="checkbox" name="optionboleto" id="optionboleto" value="1"> Lançar Boleto no sistema</label>
		
		<div id="boleto" class="helper-display-none">
			<div class="form-group">
				<label>Empresa</label>
				<select name="usuario" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['user']->value['LOGIN'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['NOME'];?>
</option>
				<?php } ?>
				</select>
			</div>
				
			<div class="form-group">
				<label>Descrição</label>
				<input type="text" name="descricao" class="form-control" value="FATURA MES/ANO">
			</div>
			
			<div class="form-group">
				<label>Boleto</label>
				<input type="file" name="arquivo" id="arquivo" class="form-control"/>
			</div>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-default">Salvar</button>
		</div>
    </form>		
</div>

<script type="text/javascript">//<![CDATA[ 
	$(window).load(function(){

	document.getElementById('optionboleto').addEventListener('click', function() {
	var value = this.checked;
	var boleto = document.getElementById('boleto');

	boleto.style.display = 'none';

	switch(value) {
	case true: boleto.style.display = 'block'; break;
	}
	})
	});
</script>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>