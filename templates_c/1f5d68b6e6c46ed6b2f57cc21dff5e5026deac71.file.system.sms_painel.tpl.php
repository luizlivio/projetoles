<?php /* Smarty version Smarty-3.1.13, created on 2020-01-18 17:54:50
         compiled from "engine\view\InfoPanel\pages\Sms\system.sms_painel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233815e23709ad25a35-42181053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f5d68b6e6c46ed6b2f57cc21dff5e5026deac71' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Sms\\system.sms_painel.tpl',
      1 => 1561603811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233815e23709ad25a35-42181053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'TelaInicial' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e23709ae01da2_33738855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e23709ae01da2_33738855')) {function content_5e23709ae01da2_33738855($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">
	<div class="col-sm-12">
		<table class="step" style="width:100%;">
			<tr>
				<td align=center style="width:90%"><h2>Painel de Controle - Resumo</h2></td>
				<td><h3><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-wrench"></i></a>

				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Preferência de Visualização no Painel de Controle</h4>
							  </div>
							  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/recados/TelaInicialEdita">
									<div class="modal-body">
										<select name="preferencia" class="form-control">
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['TelaInicial']->value=="1"){?>selected<?php }?>>Dia Atual</option>
											<option value="2" <?php if ($_smarty_tpl->tpl_vars['TelaInicial']->value=="2"){?>selected<?php }?>>Mês Atual</option>
											<option value="3" <?php if ($_smarty_tpl->tpl_vars['TelaInicial']->value=="3"){?>selected<?php }?>>Ano Atual</option>
											<option value="4" <?php if ($_smarty_tpl->tpl_vars['TelaInicial']->value=="4"){?>selected<?php }?>>Vitalício</option>
										</select>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
										<button type="submit" class="btn btn-primary">Salvar Alterações</button>
									</div>
							  </form>
						</div>
					</div>
				</div>

</h3></td>
			</tr>
		</table>
	</div>
</div>

<div ng-controller="PainelADMController" ng-cloak>

<div class="row">
<div class="col-sm-12" ng-repeat="item in Painel.painelAdm2">
<table class="step" style="width:100%;">
	<tr>
		<td align=center style="width:25%"><h2><i class="glyphicon glyphicon-envelope"></i> {{item.Envios}}</h2></td>
		<td style="border-left:3px solid #f5f5f5; width:25%" align=center><h2><i class="glyphicon glyphicon-usd"></i> {{item.Faturado | number: 2}}</h2></td>
		<td style="border-left:3px solid #f5f5f5; width:25%" align=center><h2><i class="glyphicon glyphicon-align-justify"></i> {{item.Fila}}</h2></td>
		<td style="border-left:3px solid #f5f5f5; width:25%" align=center><h2><i class="glyphicon glyphicon-transfer"></i> {{item.Recebidas}}</h2></td>
	</tr>
	<tr>
		<td align=center><label>mensagens enviadas</label></td>
		<td style="border-left:3px solid #f5f5f5" align=center ng-if="item.tipusu == 1"><label>valor faturado</label></td>
		<td style="border-left:3px solid #f5f5f5" align=center ng-if="item.tipusu == 0"><label>valor gasto</label></td>
		<td style="border-left:3px solid #f5f5f5" align=center><label>mensagens na fila</label></td>
		<td style="border-left:3px solid #f5f5f5" align=center><label>taxa de resposta</label></td>
	</tr>
</table>
</div>
</div>

<div class="row">
	<div class="col-sm-7">
		<div class="step3">
		
		<div class="recadosContent">			
			<nav class="navbar navbar-default" ng-repeat="item in Painel.painelAdm">
			  <div class="container-fluid">
					<table class="navbar-brand" style="width:100%;">
						<tr>
							<td align=center style="width:10%" ng-if="item.envios == 0 && item.tipusu == 1"><label><i class="glyphicon glyphicon-remove"></i></label></td>
							<td align=center style="width:10%" ng-if="item.envios > 0 && item.tipusu == 1"><label><i class="glyphicon glyphicon-ok"></i></label></td>
							<td style="width:65%" align=center ng-if="item.tipusu == 1"><label>{{item.Nome}}</label></td>
							<td align=center style="width:10%" ng-if="item.tipusu == 0"><label><i class="glyphicon glyphicon-envelope"></i></label></td>
							<td style="width:10%" align=center ng-if="item.tipusu == 0"><label>{{item.envios}}</label></td>
							<td style="width:65%" align=center ng-if="item.tipusu == 0"><label>{{item.Nome}}</label></td>
						</tr>
					</table>
			  </div>
			</nav>
			
		</div>

		</div>
	</div>
	
	<div class="col-sm-5">
	<div class="step">
		<div class="row">
			<div class="col-xs-12">
				<input type='text' class="form-control" ng-model="filtro.texto" placeholder="Buscar...">
			</div>
		</div>

		<hr>
	<div class="step2">	
		<div class="recadosContent" ng-controller="RecadosCtrl" ng-cloak>
			<div class="alert" ng-class="recado.css" ng-repeat="recado in recados | orderBy: ['+prior', '-data'] | filter: {LivroId : filtro.texto}">
				<p>{{recado.msg}} <a href="/info/informatica/suas_ordens" ng-if="recado.prior == 1">Visualizar Ordens Abertas</a></p>
				<p class="help-block"><b>Enviado por:</b> {{recado.from}} - {{(recado.data | todate) | date : 'dd/MM/yyyy - hh:mm'}} <span ng-if="recado.prior == 4">(<a href="#" ng-click="fnDeletarRecado(recado.id, $index)">Deletar</a>)</span></p>
			</div>
		</div>
	</div>
	</div>
	</div>
</div>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>