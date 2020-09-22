<?php /* Smarty version Smarty-3.1.13, created on 2019-05-11 18:30:57
         compiled from "engine\view\InfoPanel\pages\Faturamento\system.faturamento_estatisticas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87065cd73f1135b4f4-64764722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '105cbfae02a4fed1684797b7b860502182757057' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Faturamento\\system.faturamento_estatisticas.tpl',
      1 => 1557374453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87065cd73f1135b4f4-64764722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Valor' => 0,
    'PATH' => 0,
    'Nome' => 0,
    'no' => 0,
    'empresaid' => 0,
    'mes2' => 0,
    'm2' => 0,
    'mes' => 0,
    'ano2' => 0,
    'a2' => 0,
    'ano' => 0,
    'tipo' => 0,
    'periodos' => 0,
    'periodo' => 0,
    'contadia' => 0,
    'conta' => 0,
    'faturado' => 0,
    'Val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd73f114954f2_99541747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd73f114954f2_99541747')) {function content_5cd73f114954f2_99541747($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Valor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Val']->key => $_smarty_tpl->tpl_vars['Val']->value){
$_smarty_tpl->tpl_vars['Val']->_loop = true;
?><?php } ?>

<div class="step">
		<h2>Estatísticas de Envio</h2>
		
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/faturamento/SMS_FiltroEstatistica">

		<div class="row">
			<div class="col-lg-2">
				<label>Empresa:</label>
			</div>
			<div class="col-lg-10">
				<select name="empresaid" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['no'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['no']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Nome']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['no']->key => $_smarty_tpl->tpl_vars['no']->value){
$_smarty_tpl->tpl_vars['no']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['no']->value['Login'];?>
" <?php if ($_smarty_tpl->tpl_vars['empresaid']->value==$_smarty_tpl->tpl_vars['no']->value['Login']){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['no']->value['Nome'];?>
</option>
				<?php } ?>
					<option value="0" <?php if ($_smarty_tpl->tpl_vars['empresaid']->value=="%%"){?>Selected<?php }?>>TODOS</option>
				</select>
			</div>
		</div>
		<div class="row">
		  <div class="col-lg-3">
			<label>Filtrar Mês</label>
			<select name="mesid" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['m2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mes2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m2']->key => $_smarty_tpl->tpl_vars['m2']->value){
$_smarty_tpl->tpl_vars['m2']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['m2']->value['Mes'];?>
" <?php if ($_smarty_tpl->tpl_vars['mes']->value==$_smarty_tpl->tpl_vars['m2']->value['Mes']){?>selected<?php }?>><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="1"){?>Janeiro<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="2"){?>Fevereiro<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="3"){?>Março<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="4"){?>Abril<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="5"){?>Maio<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="6"){?>Junho<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="7"){?>Julho<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="8"){?>Agosto<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="9"){?>Setembro<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="10"){?>Outubro<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="11"){?>Novembro<?php }?><?php if ($_smarty_tpl->tpl_vars['m2']->value['Mes']=="12"){?>Dezembro<?php }?></option>
				<?php } ?>
			</select>
		  </div>
		  <div class="col-lg-3">
			<label>Filtrar Ano</label>
			<select name="anoid" class="form-control">
				<?php  $_smarty_tpl->tpl_vars['a2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ano2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a2']->key => $_smarty_tpl->tpl_vars['a2']->value){
$_smarty_tpl->tpl_vars['a2']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['a2']->value['Ano'];?>
" <?php if ($_smarty_tpl->tpl_vars['ano']->value==$_smarty_tpl->tpl_vars['a2']->value['Ano']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['a2']->value['Ano'];?>
</option>
				<?php } ?>
			</select>
		  </div>
		  <div class="col-lg-5">
			<label>Filtrar Tipo</label>
			<select name="tipo" class="form-control">
				<option value="" <?php if ($_smarty_tpl->tpl_vars['tipo']->value==''){?>selected<?php }?>>TODOS</option>
				<option value="0" <?php if ($_smarty_tpl->tpl_vars['tipo']->value=="0"){?>selected<?php }?>>ENVIADAS VIA INTERNET</option>
				<option value="1" <?php if ($_smarty_tpl->tpl_vars['tipo']->value=="1"){?>selected<?php }?>>ENVIADAS PARA AGENDAMENTO</option>
				<option value="2" <?php if ($_smarty_tpl->tpl_vars['tipo']->value=="2"){?>selected<?php }?>>ENVIADAS PARA LEMBRETE</option>
				<option value="3" <?php if ($_smarty_tpl->tpl_vars['tipo']->value=="3"){?>selected<?php }?>>ENVIADAS PARA ANIVERSÁRIOS</option>
				<option value="4" <?php if ($_smarty_tpl->tpl_vars['tipo']->value=="4"){?>selected<?php }?>>ENVIADAS PARA PAC. FALTA</option>
				<option value="5" <?php if ($_smarty_tpl->tpl_vars['tipo']->value=="5"){?>selected<?php }?>>ENVIADAS PARA PAC. COMP.</option>
			</select>
		  </div>
		  <div class="col-lg-1">
			</br>
			</br>
			<button class="btn btn-default" type="submit">Filtrar</button>
		  </div>
		</div>
	
		</form>
		
		<div style="width: 100%">
			<canvas id="canvas" height="450" width="1000"></canvas>
		</div>

	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
	var randomColorFactor = function(){ return Math.round(Math.random()*255)};

	var barChartData = {
		labels : [<?php  $_smarty_tpl->tpl_vars['periodo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['periodo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periodos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['periodo']->key => $_smarty_tpl->tpl_vars['periodo']->value){
$_smarty_tpl->tpl_vars['periodo']->_loop = true;
?>"<?php echo $_smarty_tpl->tpl_vars['periodo']->value['data'];?>
",<?php } ?>],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [<?php  $_smarty_tpl->tpl_vars['periodo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['periodo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periodos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['periodo']->key => $_smarty_tpl->tpl_vars['periodo']->value){
$_smarty_tpl->tpl_vars['periodo']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['periodo']->value['Total'];?>
,<?php } ?>]
			},
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>
</div>

<div class="step">
	<h1>Totalizadora</h1>
	
	<table class="table table-hover table-stripped">
        <tr>
            <td>Neste Mês foram enviados <b><?php  $_smarty_tpl->tpl_vars['conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contadia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conta']->key => $_smarty_tpl->tpl_vars['conta']->value){
$_smarty_tpl->tpl_vars['conta']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['conta']->value['conta'];?>
<?php } ?></b> SMS</td>
        </tr>
		<tr>
            <?php if ($_smarty_tpl->tpl_vars['empresaid']->value=="%%"){?><td>A conta parcial é de <b>R$ <?php echo number_format($_smarty_tpl->tpl_vars['faturado']->value,2,',','.');?>
</b></td>
			<?php }else{ ?><td>A um valor R$ <?php echo number_format($_smarty_tpl->tpl_vars['Val']->value['Valor'],2,',','.');?>
 por cada SMS, sua conta parcial é de <b>R$ <?php echo number_format($_smarty_tpl->tpl_vars['conta']->value['conta']*$_smarty_tpl->tpl_vars['Val']->value['Valor'],2,',','.');?>
</b></td><?php }?>
        </tr>
    </table>	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>