<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 15:41:37
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_planodecontas_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285635e5409cc30b777-45636719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a010ee19459fb20330d93a2ab479134a349601de' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_planodecontas_novo.tpl',
      1 => 1582569693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285635e5409cc30b777-45636719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e5409cc346d09_53127100',
  'variables' => 
  array (
    'PATH' => 0,
    'PlanodeContas' => 0,
    'Contas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5409cc346d09_53127100')) {function content_5e5409cc346d09_53127100($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Plano de Contas</h1>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoPlanodeContas">

		<div class="form-group">
				<label>Nome da conta </label>
				<input type="text" name="Descricao" class="form-control">
		</div>

		<div class="form-group">
			<label>Código Contábil</label>
			<input type="text" name="CodigoContabil" class="form-control">
		</div>
			
		<div class="form-group">
			<label>Classificação</label>
			<select name="Classificacao" class="form-control">
				<option value="0" disable selected>Selecionar</option>
				<option value="0">Ambos</option>
				<option value="1">Fixo</option>
				<option value="2">Variavel</option>		
			</select>
		</div>
		
		<div class="form-group">
			<label>Dependente de </label>
			<select name="Dependencia" class="form-control">
				<option value="0" selected>Conta Pai</option>
				<?php  $_smarty_tpl->tpl_vars['Contas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas']->key => $_smarty_tpl->tpl_vars['Contas']->value){
$_smarty_tpl->tpl_vars['Contas']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId'];?>
"><?php echo $_smarty_tpl->tpl_vars['Contas']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Contas']->value['Descricao'];?>
</option>
				<?php } ?>
			</select>
		</div>	
		
		<div class="form-group">
			<label> Tipo </label>
			<select name="Tipo" class="form-control">
				<option value="0" disable selected>Selecionar</option>
				<option value="D">Despesas</option>
				<option value="R">Receitas</option>
				</select>
		</div>
		
		<button type="submit" class="btn btn-default">Salvar</button>
    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>