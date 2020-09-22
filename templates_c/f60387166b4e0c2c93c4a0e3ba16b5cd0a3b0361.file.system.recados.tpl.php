<?php /* Smarty version Smarty-3.1.13, created on 2020-01-19 20:54:37
         compiled from "engine\view\InfoPanel\pages\Recados\system.recados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152815cce771f2cc9f6-85690464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f60387166b4e0c2c93c4a0e3ba16b5cd0a3b0361' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Recados\\system.recados.tpl',
      1 => 1579478071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152815cce771f2cc9f6-85690464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cce771f30c857_03256748',
  'variables' => 
  array (
    'tipusu' => 0,
    'ContaAdm' => 0,
    'PATH' => 0,
    'TelaInicial' => 0,
    'painel' => 0,
    'tipousuario' => 0,
    'PainelADM' => 0,
    'painel2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cce771f30c857_03256748')) {function content_5cce771f30c857_03256748($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['tipousuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tipousuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipusu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tipousuario']->key => $_smarty_tpl->tpl_vars['tipousuario']->value){
$_smarty_tpl->tpl_vars['tipousuario']->_loop = true;
?><?php } ?>
<?php  $_smarty_tpl->tpl_vars['painel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['painel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ContaAdm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['painel']->key => $_smarty_tpl->tpl_vars['painel']->value){
$_smarty_tpl->tpl_vars['painel']->_loop = true;
?><?php } ?>

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

<div>
<div class="row">
<div class="col-sm-12">
<table class="step" style="width:100%;">
	<tr>
		<td align=center style="width:25%"><h2><i class="glyphicon glyphicon-envelope"></i> <?php echo $_smarty_tpl->tpl_vars['painel']->value['Envios'];?>
 </h2></td>
		<td style="border-left:3px solid #f5f5f5; width:25%" align=center><h2><i class="glyphicon glyphicon-usd"></i> <?php echo number_format($_smarty_tpl->tpl_vars['painel']->value['Faturado'],2,',','.');?>
 </h2></td>
		<td style="border-left:3px solid #f5f5f5; width:25%" align=center><h2><i class="glyphicon glyphicon-align-justify"></i> <?php echo $_smarty_tpl->tpl_vars['painel']->value['Fila'];?>
 </h2></td>
		<td style="border-left:3px solid #f5f5f5; width:25%" align=center><h2><i class="glyphicon glyphicon-transfer"></i> <?php echo $_smarty_tpl->tpl_vars['painel']->value['Recebidas'];?>
 </h2></td>
	</tr>
	<tr>
		<td align=center><label>mensagens enviadas</label></td>
		<td style="border-left:3px solid #f5f5f5" align=center><label><?php if ($_smarty_tpl->tpl_vars['tipousuario']->value==1){?>valor faturado<?php }else{ ?>valor gasto<?php }?></label></td>
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
			<?php  $_smarty_tpl->tpl_vars['painel2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['painel2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PainelADM']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['painel2']->key => $_smarty_tpl->tpl_vars['painel2']->value){
$_smarty_tpl->tpl_vars['painel2']->_loop = true;
?>
			<nav class="navbar navbar-default" >
			  <div class="container-fluid">
					<table class="navbar-brand" style="width:100%;">
						<tr>
							<?php if ($_smarty_tpl->tpl_vars['tipousuario']->value==1){?><td align=center style="width:10%" ><label><i class="glyphicon glyphicon-<?php if ($_smarty_tpl->tpl_vars['painel2']->value['envios']==0){?>remove<?php }else{ ?>ok<?php }?>"></i></label></td>
							<td style="width:65%" align=center ><label> <?php echo $_smarty_tpl->tpl_vars['painel2']->value['Nome'];?>
 </label></td><?php }else{ ?>
							<td align=center style="width:10%" ><label><i class="glyphicon glyphicon-envelope"></i></label></td>
							<td style="width:10%" align=center ><label> <?php echo $_smarty_tpl->tpl_vars['painel2']->value['envios'];?>
</label></td>
							<td style="width:65%" align=center ><label> <?php echo $_smarty_tpl->tpl_vars['painel2']->value['Nome'];?>
</label></td><?php }?>
						</tr>
					</table>
			  </div>
			</nav>
			<?php } ?>
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