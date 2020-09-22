<?php /* Smarty version Smarty-3.1.13, created on 2020-02-26 22:55:06
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125055e2d215d655210-64327474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5effed7d6d315abdf2cfe6d6fcd97fe0cb4bdddc' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro.tpl',
      1 => 1582767961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125055e2d215d655210-64327474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e2d215d8d8597_15776402',
  'variables' => 
  array (
    'dataInicial' => 0,
    'dataFinal' => 0,
    'FavorecidoId' => 0,
    'PlanoContaId' => 0,
    'CentroCustoId' => 0,
    'UnidadeId' => 0,
    'TipoId' => 0,
    'PATH' => 0,
    'Favorecidos' => 0,
    'Fav' => 0,
    'PlanodeContas' => 0,
    'Plan' => 0,
    'Plan2' => 0,
    'CCusto' => 0,
    'CC' => 0,
    'Unidades' => 0,
    'Un' => 0,
    'Lancamentos' => 0,
    'Lan' => 0,
    'Rateios' => 0,
    'Rat' => 0,
    'Contas' => 0,
    'Conta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2d215d8d8597_15776402')) {function content_5e2d215d8d8597_15776402($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h3>Financeiro - Contas a Pagar e Receber</h3>

	<div class="row">
		<div class="col-md-4">
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
			
			<span class="dropdown">
				<button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Opções <span class="caret"></span></button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="/info/PagarReceber/pagarreceber_imprimir/<?php echo $_smarty_tpl->tpl_vars['dataInicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dataFinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['FavorecidoId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PlanoContaId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['CentroCustoId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['UnidadeId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['TipoId']->value;?>
">Imprimir</a></li>
					<li><a href="/info/PagarReceber/pagarreceber_estatisticas/<?php echo $_smarty_tpl->tpl_vars['dataInicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dataFinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['FavorecidoId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['PlanoContaId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['CentroCustoId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['UnidadeId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['TipoId']->value;?>
">Estatísticas</a></li>
				</ul>
			</span>

			<span class="dropdown">
				<button class="btn btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="glyphicon glyphicon-plus"></i> Nova Entrada <span class="caret"></span></button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="/info/PagarReceber/pagarreceber_pagar_novo">Nova Despesa</a></li>
					<li><a href="/info/PagarReceber/pagarreceber_receber_novo">Nova Receita</a></li>
				</ul>
			</span>
		</div>
		<div class="row">
			<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/editaFiltro">
				<div class="col-md-1">
					<label>Inicial:</label>
				</div>
				<div class="col-md-2">
					<input type="text" name="DataInicial" id="data" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dataInicial']->value;?>
">
				</div>
				<div class="col-md-1">
					<label>Final:</label>
				</div>
				<div class="col-md-2">
					<input type="text" name="DataFinal" id="data2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dataFinal']->value;?>
">
				</div>
				<div class="col-md-1">
					<label><font size="3"><a onclick='opcoes()'>+Opções</a></font></label>
				</div>

			<div id="filtrosFavorecidos" class="helper-display-none">
				<div class="col-md-1">
				
				</div>
				<div class="col-md-4">
				
				</div>
				<div class="col-md-3">
					<label>Favorecidos:</label>
				</div>
				<div class="col-md-3">
					<label><select name="FavorecidoId" class="form-control">
						<option value="0" selected>TODOS</option>
						<?php  $_smarty_tpl->tpl_vars['Fav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Favorecidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fav']->key => $_smarty_tpl->tpl_vars['Fav']->value){
$_smarty_tpl->tpl_vars['Fav']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId'];?>
" <?php if ($_smarty_tpl->tpl_vars['FavorecidoId']->value==$_smarty_tpl->tpl_vars['Fav']->value['FavorecidoId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Fav']->value['Nome'];?>
</option>
						<?php } ?>
					</select></label>
				</div>
			</div>
			<div id="filtrosPlanoContas" class="helper-display-none">
				<div class="col-md-1">
				
				</div>
				<div class="col-md-4">
				
				</div>
				<div class="col-md-3">
					<label>Planos de Contas:</label>
				</div>
				<div class="col-md-3">
					<label><select name="PlanoContaId" class="form-control">
						<option value="0" selected>TODOS</option>
						<?php  $_smarty_tpl->tpl_vars['Plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Plan']->key => $_smarty_tpl->tpl_vars['Plan']->value){
$_smarty_tpl->tpl_vars['Plan']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['Plan']->value['Dependencia']=="0"){?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['Plan']->value['PlanoContaId'];?>
" <?php if ($_smarty_tpl->tpl_vars['PlanoContaId']->value==$_smarty_tpl->tpl_vars['Plan']->value['PlanoContaId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Plan']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Plan']->value['Descricao'];?>
</option>
								<?php  $_smarty_tpl->tpl_vars['Plan2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Plan2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PlanodeContas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Plan2']->key => $_smarty_tpl->tpl_vars['Plan2']->value){
$_smarty_tpl->tpl_vars['Plan2']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['Plan2']->value['Dependencia']==$_smarty_tpl->tpl_vars['Plan']->value['PlanoContaId']){?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['Plan2']->value['PlanoContaId'];?>
" <?php if ($_smarty_tpl->tpl_vars['PlanoContaId']->value==$_smarty_tpl->tpl_vars['Plan2']->value['PlanoContaId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Plan']->value['CodigoContabil'];?>
.<?php echo $_smarty_tpl->tpl_vars['Plan2']->value['CodigoContabil'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Plan2']->value['Descricao'];?>
</option>
									<?php }?>
								<?php } ?>
							<?php }?>
						<?php } ?>
					</select></label>
				</div>
			</div>
			<div id="filtrosCentrosCustos" class="helper-display-none">
				<div class="col-md-1">
				
				</div>
				<div class="col-md-4">
				
				</div>
				<div class="col-md-3">
					<label>Centros de Custos:</label>
				</div>
				<div class="col-md-3">
					<label><select name="CentroCustoId" class="form-control">
						<option value="0" selected>TODOS</option>
						<?php  $_smarty_tpl->tpl_vars['CC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CCusto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CC']->key => $_smarty_tpl->tpl_vars['CC']->value){
$_smarty_tpl->tpl_vars['CC']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['CC']->value['CentroCustoId'];?>
" <?php if ($_smarty_tpl->tpl_vars['CentroCustoId']->value==$_smarty_tpl->tpl_vars['CC']->value['CentroCustoId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['CC']->value['Descricao'];?>
</option>
						<?php } ?>
					</select></label>
				</div>
			</div>
			<div id="filtrosUnidades" class="helper-display-none">
				<div class="col-md-1">
				
				</div>
				<div class="col-md-4">
				
				</div>
				<div class="col-md-3">
					<label>Unidades:</label>
				</div>
				<div class="col-md-3">
					<label><select name="UnidadeId" class="form-control">
						<option value="0" selected>TODOS</option>
						<?php  $_smarty_tpl->tpl_vars['Un'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Un']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Unidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Un']->key => $_smarty_tpl->tpl_vars['Un']->value){
$_smarty_tpl->tpl_vars['Un']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['Un']->value['UnidadeId'];?>
" <?php if ($_smarty_tpl->tpl_vars['UnidadeId']->value==$_smarty_tpl->tpl_vars['Un']->value['UnidadeId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Un']->value['Descricao'];?>
</option>
						<?php } ?>
					</select></label>
				</div>
			</div>
			<div id="filtrosTipo" class="helper-display-none">
				<div class="col-md-1">
				
				</div>
				<div class="col-md-4">
				
				</div>
				<div class="col-md-3">
					<label>Tipo:</label>
				</div>
				<div class="col-md-3">
					<label><select name="TipoId" class="form-control">
						<option value="0" selected>TODOS</option>
						<option value="R" <?php if ($_smarty_tpl->tpl_vars['TipoId']->value=="R"){?>selected<?php }?>>Receitas</option>
						<option value="D" <?php if ($_smarty_tpl->tpl_vars['TipoId']->value=="D"){?>selected<?php }?>>Despesas</option>
					</select></label>
				</div>
			</div>

			<div class="col-md-1">
				<button type="submit" class="btn btn-default">Filtrar</button>
			</div>
		</div>
	</div>
		</form>
		<br />
	<hr />

	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Código</th>
			<th>Lançamento</th>
            <th>Vencimento</th>
			<th>Favorecido</th>
			<th>Valor Real</th>
			<th>Histórico</th>
			<th></th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Lan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Lan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Lancamentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Lan']->key => $_smarty_tpl->tpl_vars['Lan']->value){
$_smarty_tpl->tpl_vars['Lan']->_loop = true;
?>
        <tr>
            <td><font color="<?php if ($_smarty_tpl->tpl_vars['Lan']->value['TipoLancamento']=="D"){?>#CC0000<?php }elseif($_smarty_tpl->tpl_vars['Lan']->value['TipoLancamento']=="R"){?>#007E33<?php }?>"><i class="glyphicon glyphicon-stop"></i> </font> <?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
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
			<td><?php if ($_smarty_tpl->tpl_vars['Lan']->value['Status']=="1"){?><img src="/styles/images/cifrao.png" alt="alternative text" title="Liquidada"/><?php }?></td>
			<td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
">Acessar</button></td>
        </tr>

				<div class="modal fade" id="myModal<?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Dados da <?php if ($_smarty_tpl->tpl_vars['Lan']->value['TipoLancamento']=="D"){?>Despesa<?php }elseif($_smarty_tpl->tpl_vars['Lan']->value['TipoLancamento']=="R"){?>Receita<?php }?></h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-2">
										<h4>Código</h4>
										<label><?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
</label>
									</div>
									<div class="col-md-4">
										<h4>Data Lançamento</h4>
										<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Lan']->value['DataLancamento'],"%d/%m/%Y");?>
</label>
									</div>
									<div class="col-md-6">
										<h4>Data Vencimento</h4>
										<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Lan']->value['DataVencimento'],"%d/%m/%Y");?>
</label>
									</div>
								</div>
													
								<div class="row">
									<div class="col-md-12">
										<h4>Favorecido</h4>
										<label><?php echo $_smarty_tpl->tpl_vars['Lan']->value['Nome'];?>
</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<h4>Plano de Conta</h4>
										<label><?php echo $_smarty_tpl->tpl_vars['Lan']->value['DescricaoPlanoConta'];?>
</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<h4>Descrição</h4>
										<label><?php echo $_smarty_tpl->tpl_vars['Lan']->value['Descricao'];?>
</label>
									</div>
									<div class="col-md-4">
										<h4>Documento</h4>
										<label><?php echo $_smarty_tpl->tpl_vars['Lan']->value['DescricaoDocumento'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Lan']->value['Documento'];?>
</label>
									</div>
								</div>
								<?php  $_smarty_tpl->tpl_vars['Rat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Rat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Rateios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Rat']->key => $_smarty_tpl->tpl_vars['Rat']->value){
$_smarty_tpl->tpl_vars['Rat']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['Rat']->value['LancamentoId']==$_smarty_tpl->tpl_vars['Lan']->value['LancamentoId']){?>
										<div class="row">
											<div class="col-md-6">
												<h4>Unidade</h4>
												<label><?php echo $_smarty_tpl->tpl_vars['Rat']->value['DescricaoUnidade'];?>
</label>
											</div>
											<div class="col-md-6">
												<h4>Centro de Custo</h4>
												<label><?php echo $_smarty_tpl->tpl_vars['Rat']->value['DescricaoCentroCusto'];?>
</label>
											</div>
										</div>
									<?php }?>
								<?php } ?>
								<div class="row">
									<div class="col-md-4">
										<h4>Valor</h4>
										<label>R$ <?php echo number_format($_smarty_tpl->tpl_vars['Lan']->value['Valor'],2,',','.');?>
</label>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['Lan']->value['DataLiquidado']!=''){?>
										<div class="col-md-6">
											<h4>Data de Liquidação</h4>
											<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Lan']->value['DataLiquidado'],"%d/%m/%Y");?>
</label>
										</div>
									<?php }?>
								</div>
						    </div>
						<div class="modal-footer">
						
						<button type="button" class="btn btn-smbtn-default" data-dismiss="modal">Fechar</button>
						
						<?php if ($_smarty_tpl->tpl_vars['Lan']->value['Status']=="0"){?><button type="button" data-dismiss="modal" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#Valida<?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
">Liquidar <?php if ($_smarty_tpl->tpl_vars['Lan']->value['TipoLancamento']=="D"){?>Pagamento<?php }elseif($_smarty_tpl->tpl_vars['Lan']->value['TipoLancamento']=="R"){?>Recebimento<?php }?></button><?php }?>
						<a href="/info/PagarReceber/pagarreceber_pagar_edita/<?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
" class="btn btn-sm btn-primary">Editar</a>
						<button type="button" data-dismiss="modal" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#Exclui<?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
">Excluir</button>						
					</div>
				</div>
 		    </div>
		</div>

		<div class="modal fade" id="Exclui<?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Confirmação de Exclusão</h4>
							</div>
							<div class="modal-body">
								<label>Confirma a Exclusão do Lançamento <b><?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
</b>?</label>
						    </div>
						<div class="modal-footer">
						
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						<a href="/info/PagarReceber/pagarreceber_pagar_exclui/<?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
" class="btn btn-sm btn-danger">Excluir</a>
						
					</div>
				</div>
 		    </div>
		</div>

		<div class="modal fade" id="Valida<?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Liquidação de <?php if ($_smarty_tpl->tpl_vars['Lan']->value['TipoLancamento']=="D"){?>Pagamento<?php }elseif($_smarty_tpl->tpl_vars['Lan']->value['TipoLancamento']=="R"){?>Recebimento<?php }?></h4>
							</div>
							<div class="modal-body">
								<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/PagarReceber/validarRecebimento">
									<div class="helper-display-none">
										<input type="text" name="LancamentoId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Lan']->value['LancamentoId'];?>
">
									</div>

									<div>
										<label>Data</label>
										<input type="text" name="Data" id = "data" class="form-control" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Lan']->value['DataVencimento'],"%d/%m/%Y");?>
">
									</div>

									<div class="form-group">
										<label>Conta</label>
										<select name="Conta" class="form-control">
											<option value="0" selected>Selecionar</option>
											<?php  $_smarty_tpl->tpl_vars['Conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Contas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Conta']->key => $_smarty_tpl->tpl_vars['Conta']->value){
$_smarty_tpl->tpl_vars['Conta']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['Conta']->value['ContaId'];?>
"><?php echo $_smarty_tpl->tpl_vars['Conta']->value['Descricao'];?>
 <?php echo $_smarty_tpl->tpl_vars['Conta']->value['Agencia'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Conta']->value['Numeroconta'];?>
</option>
											<?php } ?>
										</select>
									</div>
						    </div>
						<div class="modal-footer">
						
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-sm btn-warning">Liquidar <?php if ($_smarty_tpl->tpl_vars['Lan']->value['TipoLancamento']=="D"){?>Pagamento<?php }elseif($_smarty_tpl->tpl_vars['Lan']->value['TipoLancamento']=="R"){?>Recebimento<?php }?></button>
						</form>
					</div>
				</div>
 		    </div>
		</div>
		<?php } ?>
    </table>
	
</div>

<script>	
function opcoes(){
	filtrosFavorecidos.style.display = 'block'
	filtrosPlanoContas.style.display = 'block'
	filtrosCentrosCustos.style.display = 'block'
	filtrosUnidades.style.display = 'block'
	filtrosTipo.style.display = 'block'
}
</script>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>