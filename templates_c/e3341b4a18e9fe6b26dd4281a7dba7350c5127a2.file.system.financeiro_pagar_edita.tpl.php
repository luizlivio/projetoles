<?php /* Smarty version Smarty-3.1.13, created on 2020-02-25 22:43:51
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_pagar_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95665e55caa95c3a91-41026721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3341b4a18e9fe6b26dd4281a7dba7350c5127a2' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_pagar_edita.tpl',
      1 => 1582681205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95665e55caa95c3a91-41026721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e55caa9694fd1_67226163',
  'variables' => 
  array (
    'Pagar' => 0,
    'PATH' => 0,
    'Pag' => 0,
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
<?php if ($_valid && !is_callable('content_5e55caa9694fd1_67226163')) {function content_5e55caa9694fd1_67226163($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Pag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Pag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pagar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Pag']->key => $_smarty_tpl->tpl_vars['Pag']->value){
$_smarty_tpl->tpl_vars['Pag']->_loop = true;
?><?php } ?>

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
	<h1>Edita Despesa</h1>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/editaPagar">
	
	<div class="helper-display-none">
		<input type="text" name="LancamentoId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Pag']->value['LancamentoId'];?>
">
	</div>

	<div class="form-group">
		<label>Data de Vencimento</label>
		<input type="text" id="data" name="DataVencimento" class="form-control" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Pag']->value['DataVencimento'],"%d/%m/%Y");?>
">
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
" <?php if ($_smarty_tpl->tpl_vars['Pag']->value['FavorecidoId']==$_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Nome'];?>
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
" <?php if ($_smarty_tpl->tpl_vars['Pag']->value['PlanoContaId']==$_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Contas']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Contas']->value['Descricao'];?>
</option>
					<?php  $_smarty_tpl->tpl_vars['Contas2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Contas2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Contas2']->key => $_smarty_tpl->tpl_vars['Contas2']->value){
$_smarty_tpl->tpl_vars['Contas2']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['Contas2']->value['Dependencia']==$_smarty_tpl->tpl_vars['Contas']->value['PlanoContaId']){?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['Contas2']->value['PlanoContaId'];?>
" <?php if ($_smarty_tpl->tpl_vars['Pag']->value['PlanoContaId']==$_smarty_tpl->tpl_vars['Contas2']->value['PlanoContaId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Contas']->value['CodigoContabil'];?>
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
		<label>Descricao</label>
		<input type="text" name="Historico" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Pag']->value['Descricao'];?>
">
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
" <?php if ($_smarty_tpl->tpl_vars['Pag']->value['DocumentoId']==$_smarty_tpl->tpl_vars['TipoDoc']->value['DocumentoId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['TipoDoc']->value['Descricao'];?>
</option>
			<?php } ?>
		</select>
	</div>
	
	<div class="form-group">
		<label>Número do Documento</label>
		<input type="text" name="Documento" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Pag']->value['Documento'];?>
">
    </div>
	
	<div class="form-group">
		<label>Valor:</label>
		<input type="text" name="Valor" class="form-control dinheiro" value="R$<?php echo number_format($_smarty_tpl->tpl_vars['Pag']->value['Valor'],2,',','.');?>
">
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