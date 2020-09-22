<?php /* Smarty version Smarty-3.1.13, created on 2019-12-21 13:40:56
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.pagarreceber_planodecontas_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132285dfe4b187a0136-98959008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af3574ab5837afefa48b33bcd19d456d8a90a99a' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.pagarreceber_planodecontas_novo.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132285dfe4b187a0136-98959008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'PlanodeContas' => 0,
    'Contas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dfe4b18a65043_27292295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dfe4b18a65043_27292295')) {function content_5dfe4b18a65043_27292295($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Plano de Contas</h1>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoPlanodeContas">
	
	<div class="form-group">
		<label>Código Contábil</label>
		<input type="text" name="codigocontabil" class="form-control">
    </div>
	
	<div>
		<input type="checkbox" name="consolidacao" value="T">
		<label> Consolidação</label>
	</div>
	
<div class"form-group">
		<table>
			<tr>
				<td><input type="checkbox" name="pendencia" value="T"></td>
				<td><label>Conta de controle para pendência a regularizar </label></td>
				<td><div class="step"></div></td>
				<td><input type="checkbox" name="rateio" value="T"></td>
				<td><label>Rateio</label></td>
				<td><div class="step"></div></td>
				<td><input type="checkbox" name="contaresultado" value="T"></td>
				<td><label> Conta Resultado </label></td>
				<td><div class="step"></div></td>
			</tr>	
		</table>	
	</div>
	
	<div class="form-group">
            <label>Código Interno </label>
			<input type="text" name="codigointerno" class="form-control">
    </div>
	
	<div class="form-group">
            <label>Nome da conta </label>
			<input type="text" name="nomedaconta" class="form-control">
    </div>
	
	<div class="form-group">
            <label>Classificação</label>
            <select name="classificacao" class="form-control">
                <option value="0" disable selected>Selecionar</option>
                <option value="0">Ambos</option>
                <option value="1">Fixo</option>
                <option value="2">Variavel</option>
				
			</select>
		</div>
		
		<div>		
		         <input type="checkbox" name="contapai" value="T">
		   		 <label>Conta Pai</label>
		
		</div>
		
		<div class="form-group">
            <label>Dependente de </label>
            <select name="dependentede" class="form-control">
                <option value="0" selected>Selecionar</option>
				<?php  $_smarty_tpl->tpl_vars['Contas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas']->key => $_smarty_tpl->tpl_vars['Contas']->value){
$_smarty_tpl->tpl_vars['Contas']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['Contas']->value['CONTAMOVIMENTOID'];?>
"><?php echo $_smarty_tpl->tpl_vars['Contas']->value['CODIGOCONTABIL'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Contas']->value['NOME'];?>
</option>
                <?php } ?>
			</select>
			
			<label> Tipo </label>
            <select name="tipo" class="form-control">
               <option value="0" disable selected>Selecionar</option>
               <option value="D">Despesas</option>
               <option value="R">Receitas</option>
			   </select>
        </div>
		
		<div class="form-group">
            <label>Código de Contabilidade Externo</label>
			<input type="text" name="contabilidadeexterno" class="form-control">
    </div>
		
		<button type="submit" class="btn btn-default">Salvar</button>
    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>