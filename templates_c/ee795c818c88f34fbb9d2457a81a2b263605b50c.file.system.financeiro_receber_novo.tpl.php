<?php /* Smarty version Smarty-3.1.13, created on 2020-02-26 00:37:59
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_receber_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310505e55e26a1b3449-88486192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee795c818c88f34fbb9d2457a81a2b263605b50c' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_receber_novo.tpl',
      1 => 1582688029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310505e55e26a1b3449-88486192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e55e26a21a8f0_66251068',
  'variables' => 
  array (
    'PATH' => 0,
    'Favorecidos' => 0,
    'Fav' => 0,
    'PlanodeContas' => 0,
    'Contas' => 0,
    'Contas2' => 0,
    'TipoDocumento' => 0,
    'TipoDoc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e55e26a21a8f0_66251068')) {function content_5e55e26a21a8f0_66251068($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">//<![CDATA[ 
			$(window).load(function(){
 
			document.getElementById('FavorecidoId').addEventListener('change', function() {
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
	<h1>Nova Receita</h1>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/novoReceber">
	
	<div class="form-group">
		<label>Data de Vencimento</label>
		<input type="text" id="data" name="DataVencimento" class="form-control">
    </div>
	
	<div class="form-group">
		<label>Favorecido</label>
		<select name="FavorecidoId" id="FavorecidoId" class="form-control">
			<option value="0" selected>Selecionar</option>
			<option value="NENHUM">Outro</option>
			<?php  $_smarty_tpl->tpl_vars['Fav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Favorecidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fav']->key => $_smarty_tpl->tpl_vars['Fav']->value){
$_smarty_tpl->tpl_vars['Fav']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId'];?>
"><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Nome'];?>
</option>
			<?php } ?>
		</select>
	</div>
	
	<div class="form-group">
		<div id="b1" class="helper-display-none"> <!-- demtro do css estilo "hidden" apenas tem display:none que não deixa a div aparecer -->
			<div class="form-group">
				<label>Nome do Favorecido</label>
				<input type="text" name="NomeFavorecido" class="form-control">
			</div>
			<div class="form-group">
				<label>CNPJ/CPF Favorecido</label>
				<input type="text" name="CnpjCpfFavorecido" class="form-control">
			</div>
		</div>
	</div>
	
	<div class="form-group">
		<label>Plano de Contas</label>
		<select name="PlanoContaId" class="form-control">
			<option value="0" selected>Selecionar</option>
			<?php  $_smarty_tpl->tpl_vars['Contas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas']->key => $_smarty_tpl->tpl_vars['Contas']->value){
$_smarty_tpl->tpl_vars['Contas']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['Contas']->value['Dependencia']=="0"){?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId'];?>
"><?php echo $_smarty_tpl->tpl_vars['Contas']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Contas']->value['Descricao'];?>
</option>
					<?php  $_smarty_tpl->tpl_vars['Contas2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas2']->key => $_smarty_tpl->tpl_vars['Contas2']->value){
$_smarty_tpl->tpl_vars['Contas2']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['Contas2']->value['Dependencia']==$_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId']){?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['Contas2']->value['PlanoContaId'];?>
"><?php echo $_smarty_tpl->tpl_vars['Contas']->value['CodigoContabil'];?>
.<?php echo $_smarty_tpl->tpl_vars['Contas2']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Contas2']->value['Descricao'];?>
</option>
						<?php }?>
					<?php } ?>
				<?php }?>
			<?php } ?>
		</select>
	</div>
	
	<div class="form-group">
		<label>Histórico</label>
		<input type="text" name="Historico" class="form-control">
    </div>
	
	<div class="form-group">
		<label>Tipo Documento</label>
		<select name="DocumentoId" class="form-control">
			<option value="0" selected>Selecionar</option>
			<?php  $_smarty_tpl->tpl_vars['TipoDoc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TipoDoc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TipoDocumento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TipoDoc']->key => $_smarty_tpl->tpl_vars['TipoDoc']->value){
$_smarty_tpl->tpl_vars['TipoDoc']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['TipoDoc']->value['DocumentoId'];?>
"><?php echo $_smarty_tpl->tpl_vars['TipoDoc']->value['Descricao'];?>
</option>
			<?php } ?>
		</select>
	</div>
	
	<div class="form-group">
		<label>Número do Documento</label>
		<input type="text" name="Documento" class="form-control">
    </div>
	
	<div class="form-group">
		<label>Valor:</label>
		<input type="text" name="Valor" class="form-control dinheiro">
    </div>
	
		<button type="submit" class="btn btn-default">Continuar</button>
    </form>		
</div>


	<script language="javascript">
		document.getElementById('data').focus();
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("input.dinheiro").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
		});
	</script>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>