<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 16:29:26
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_planodecontas_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:278085e542254a227c7-89692189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cb9242154134e21f01e66dd6f9355e5d7e3e5b1' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_planodecontas_edita.tpl',
      1 => 1582572225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278085e542254a227c7-89692189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e542254a841b3_30229744',
  'variables' => 
  array (
    'PlanodeContas2' => 0,
    'PATH' => 0,
    'Contas2' => 0,
    'PlanodeContas' => 0,
    'Contas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e542254a841b3_30229744')) {function content_5e542254a841b3_30229744($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Contas2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas2']->key => $_smarty_tpl->tpl_vars['Contas2']->value){
$_smarty_tpl->tpl_vars['Contas2']->_loop = true;
?><?php } ?>

<div class="step">
	<h1>Plano de Contas</h1>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/editaPlanodeContas">

		<div class="helper-display-none">
				<input type="text" name="PlanoContaId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Contas2']->value['PlanoContaId'];?>
">
		</div>

		<div class="form-group">
				<label>Nome da conta </label>
				<input type="text" name="Descricao" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Contas2']->value['Descricao'];?>
">
		</div>

		<div class="form-group">
			<label>Código Contábil</label>
			<input type="text" name="CodigoContabil" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Contas2']->value['CodigoContabil'];?>
">
		</div>
			
		<div class="form-group">
			<label>Classificação</label>
			<select name="Classificacao" class="form-control">
				<option value="0" disable selected>Selecionar</option>
				<option value="0" <?php if ($_smarty_tpl->tpl_vars['Contas2']->value['Classificacao']=="0"){?>selected<?php }?>>Ambos</option>
				<option value="1" <?php if ($_smarty_tpl->tpl_vars['Contas2']->value['Classificacao']=="1"){?>selected<?php }?>>Fixo</option>
				<option value="2" <?php if ($_smarty_tpl->tpl_vars['Contas2']->value['Classificacao']=="2"){?>selected<?php }?>>Variavel</option>		
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
" <?php if ($_smarty_tpl->tpl_vars['Contas2']->value['Dependencia']==$_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Contas']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Contas']->value['Descricao'];?>
</option>
				<?php } ?>
			</select>
		</div>	
		
		<div class="form-group">
			<label> Tipo </label>
			<select name="Tipo" class="form-control">
				<option value="0" disable selected>Selecionar</option>
				<option value="D" <?php if ($_smarty_tpl->tpl_vars['Contas2']->value['Tipo']=="D"){?>selected<?php }?>>Despesas</option>
				<option value="R" <?php if ($_smarty_tpl->tpl_vars['Contas2']->value['Tipo']=="R"){?>selected<?php }?>>Receitas</option>
				</select>
		</div>
		
		<button type="submit" class="btn btn-default">Salvar</button>
    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>