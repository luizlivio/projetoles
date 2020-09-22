<?php /* Smarty version Smarty-3.1.13, created on 2019-12-04 20:53:19
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_filtro2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117805de846efdbd2e6-03357026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcadf143403e4087c49a2ae47ac7eff92d05af00' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_filtro2.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117805de846efdbd2e6-03357026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'grupoempresaid' => 0,
    'Empresas' => 0,
    'Empresa' => 0,
    'CentrodeCustos' => 0,
    'CCustos' => 0,
    'PlanodeContas' => 0,
    'Contas' => 0,
    'Favorecidos' => 0,
    'Fav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5de846efe2dd37_76863829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5de846efe2dd37_76863829')) {function content_5de846efe2dd37_76863829($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Novo Filtro</h1>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoFiltro2">
</div>

<div class="step">
	<h3>Período</h3>
	<div class="helper-display-none">
		<input type="text" name="grupoempresaid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['grupoempresaid']->value;?>
">
    </div>
	<div class="form-group">
		<label>Data Inicial</label>
		<input type="text" id="data" name="datainicial" class="form-control">
    </div>
	
	<div class="form-group">
		<label>Data Final</label>
		<input type="text" id="data2" name="datafinal" class="form-control">
    </div>
</div>

<div class="step">
	<h3>Tipo de Data</h3>
	<div class="form-group">
		<select name="tipodedata" class="form-control">
			<option value="1" selected>Data de Vencimento</option>
			<option value="2">Data de Competência</option>
		</select>
	</div>
</div>	

<div class="step">
	<h3>Empresa</h3>
	<div class="form-group">
		<select name="empresaid" class="form-control">
			<option value="0" selected>Todas</option>
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
</div>

<div class="step">
	<h3>Centro de Custo</h3>
	<div class="form-group">
		<select name="centrodecustosid" class="form-control">
			<option value="0" selected>Todos</option>
			<?php  $_smarty_tpl->tpl_vars['CCustos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CCustos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CentrodeCustos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CCustos']->key => $_smarty_tpl->tpl_vars['CCustos']->value){
$_smarty_tpl->tpl_vars['CCustos']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['CCustos']->value['CCUSTOID'];?>
"><?php echo utf8_encode($_smarty_tpl->tpl_vars['CCustos']->value['DESCRICAO']);?>
</option>
			<?php } ?>
		</select>
	</div>
</div>

<div class="step">
	<h3>Plano de Conta</h3>
	<div class="form-group">
		<select name="planodecontasid" class="form-control">
			<option value="0" selected>Todos</option>
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
</div>

<div class="step">
	<h3>Favorecido</h3>
	<div class="form-group">
		<select name="favorecidoid" class="form-control">
			<option value="0" selected>Todos</option>
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
</div>

<div class="step">
	<h3>Ordem</h3>
	<div class="form-group">
		<select name="ordem" class="form-control">
			<option value="1" selected>Favorecidos</option>
			<option value="2">Movimentos</option>
			<option value="3">Datas</option>
		</select>
	</div>
</div>

<div class="step">
	<h3>Tipo de Movimento</h3>
	<div class="form-group">
		<select name="tipodemovimento" class="form-control">
			<option value="0" selected>Todos</option>
			<option value="1">Pagar</option>
			<option value="2">Receber</option>
		</select>
	</div>
</div>

<div class="step">
	<h3>Protestado</h3>
	<div class="form-group">
		<select name="protestado" class="form-control">
			<option value="0" selected>Todos</option>
			<option value="2">Protestados</option>
			<option value="3">Não Protestados</option>
		</select>
	</div>
</div>

		<button type="submit" class="btn btn-default">Filtrar</button>
    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>