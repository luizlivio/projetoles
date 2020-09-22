<?php /* Smarty version Smarty-3.1.13, created on 2020-02-24 23:48:00
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_resumo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135845e2d2603968c13-34711595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b992aaa0eb3fc3e8b7e383593e63a0ac3b8907' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_resumo.tpl',
      1 => 1582598876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135845e2d2603968c13-34711595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e2d2603b41d34_83198748',
  'variables' => 
  array (
    'PATH' => 0,
    'Lancamentos' => 0,
    'Lan' => 0,
    'Paga' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2d2603b41d34_83198748')) {function content_5e2d2603b41d34_83198748($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h3>Financeiro - Contas a Pagar e Receber</h3>

	<div class="row">
		<div class="col-md-2">
			<span class="dropdown">
				<button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Cadastros <span class="caret"></span></button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="/info/PagarReceber/pagarreceber_banco">Bancos</a></li>
					<li><a href="/info/PagarReceber/pagarreceber_favorecidos">Favorecidos</a></li>
					<li><a href="/info/PagarReceber/pagarreceber_planodecontas">Plano de Contas</a></li>
					<li><a href="/info/PagarReceber/pagarreceber_tiposdocumentos">Tipos de Documentos</a></li>
					<li><a href="/info/PagarReceber/pagarreceber_centrocustos">Centros de Custos</a></li>
					<li><a href="/info/PagarReceber/pagarreceber_unidades">Unidades</a></li>
				</ul>
			</span>
		</div>
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/editaUnidades">
			<div class="col-md-2">
				<label>Data Inicial:</label>
			</div>
			<div class="col-md-2">
				<input type="text" name="DataInicial" class="form-control">
			</div>
			<div class="col-md-2">
				<label>Data Final:</label>
			</div>
			<div class="col-md-2">
				<input type="text" name="DataFinal" class="form-control">
			</div>
			<div class="col-md-2">
				<button type="submit" class="btn btn-default">Filtrar</button>
			</div>
		</form>
	<hr />

	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Data de Lançamento</th>
            <th>Data de Vencimento</th>
			<th>Favorecido</th>
			<th>Valor Real</th>
			<th>Histórico</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Lan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Lan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Lancamentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Lan']->key => $_smarty_tpl->tpl_vars['Lan']->value){
$_smarty_tpl->tpl_vars['Lan']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Lan']->value['Id'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Lan']->value['DataLancamento'],"%d/%m/%Y");?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Lan']->value['DataVencimento'],"%d/%m/%Y");?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Lan']->value['Nome'];?>
</td>
			<td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['Lan']->value['Valor'],2,',','.');?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Lan']->value['Descricao'];?>
</td>
			<td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['Lan']->value['Id'];?>
">Acessar</button>

				<div class="modal fade" id="myModal<?php echo $_smarty_tpl->tpl_vars['Lan']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Dados da Despesa</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-2">
										<h4>Código</h4>
										<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['MOVIMENTOID']);?>
</label>
									</div>
									<div class="col-md-4">
										<h4>Data Lançamento</h4>
										<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Paga']->value['DATALANCAMENTO'],"%d/%m/%Y");?>
</label>
									</div>
									<div class="col-md-6">
										<h4>Data Vencimento</h4>
										<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Paga']->value['DATAVENCIMENTO'],"%d/%m/%Y");?>
</label>
									</div>
								</div>
													
								<div class="row">
									<div class="col-md-12">
										<h4>Favorecido</h4>
										<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['DESCFAVORECIDO']);?>
</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<h4>Plano de Conta</h4>
										<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['DESCPLANOCONTA']);?>
</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<h4>Empresa</h4>
										<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['DESCEMPRESA']);?>
</label>
									</div>
									<div class="col-md-4">
										<h4>Data Competência</h4>
										<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Paga']->value['DATACOMPETENCIA'],"%d/%m/%Y");?>
</label>
									</div>
									<div class="col-md-4">
										<h4>Data Protesto</h4>
										<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Paga']->value['DATAPROTESTO'],"%d/%m/%Y");?>
</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<h4>Histórico</h4>
										<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['HISTORICO2']);?>
</label>
									</div>
									<div class="col-md-6">
										<h4>Centro de Custo</h4>
										<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['DESCCUSTO']);?>
</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<h4>Unidade</h4>
										<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['UNIDADEDESC']);?>
</label>
									</div>
									<div class="col-md-4">
										<h4>Documento</h4>
										<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['TIPODOCUMENTODESC']);?>
 - <?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['DOCUMENTO']);?>
</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<h4>Valor Previsto</h4>
										<label>R$ <?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['VALORPREVISTO']);?>
</label>
									</div>
									<div class="col-md-4">
										<h4>Valor Real</h4>
										<label>R$ <?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['VALORREAL']);?>
</label>
									</div>
									<div class="col-md-4">
										<h4>Valor Imposto</h4>
										<label>R$ <?php echo utf8_encode($_smarty_tpl->tpl_vars['Paga']->value['VALORIMPOSTO']);?>
</label>
									</div>
								</div>
						    </div>
						<div class="modal-footer">
						
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						
						<?php if ($_smarty_tpl->tpl_vars['Paga']->value['STATUSLIQUIDACAO']!="T"){?><a href="/info/PagarReceber/validaPagamento/<?php echo $_smarty_tpl->tpl_vars['Paga']->value['MOVIMENTOID'];?>
" class="btn btn-sm btn-warning">Liquidar Pagamento</a><?php }?>
						<a href="/info/PagarReceber/pagarreceber_pagar_edita/<?php echo $_smarty_tpl->tpl_vars['Paga']->value['MOVIMENTOID'];?>
" class="btn btn-sm btn-primary">Editar</a>
						<a href="/info/PagarReceber/pagarreceber_pagar_exclui/<?php echo $_smarty_tpl->tpl_vars['Paga']->value['MOVIMENTOID'];?>
" class="btn btn-sm btn-danger">Excluir</a>
						
					</div>
				</div>
 		    </div>
		</div></td>

        </tr>
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>