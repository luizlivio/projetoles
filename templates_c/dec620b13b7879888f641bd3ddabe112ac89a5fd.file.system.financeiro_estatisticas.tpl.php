<?php /* Smarty version Smarty-3.1.13, created on 2020-02-26 23:01:57
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_estatisticas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149265e57217d3c8fe7-60457185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dec620b13b7879888f641bd3ddabe112ac89a5fd' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_estatisticas.tpl',
      1 => 1582768913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149265e57217d3c8fe7-60457185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e57217d436199_90061640',
  'variables' => 
  array (
    'Periodos' => 0,
    'periodo' => 0,
    'LancamentosDespesas' => 0,
    'desp' => 0,
    'LancamentosReceitas' => 0,
    'rec' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e57217d436199_90061640')) {function content_5e57217d436199_90061640($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Estatisticas</h1>

	<div style="width: 100%">
		<canvas id="canvas" height="450" width="1000"></canvas>
	</div>
	
</div>


<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
	var randomColorFactor = function(){ return Math.round(Math.random()*255)};

	var barChartData = {
		labels : [<?php  $_smarty_tpl->tpl_vars['periodo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['periodo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Periodos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['periodo']->key => $_smarty_tpl->tpl_vars['periodo']->value){
$_smarty_tpl->tpl_vars['periodo']->_loop = true;
?>"<?php echo $_smarty_tpl->tpl_vars['periodo']->value['Mes'];?>
/<?php echo $_smarty_tpl->tpl_vars['periodo']->value['Ano'];?>
",<?php } ?>],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [<?php  $_smarty_tpl->tpl_vars['desp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['desp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LancamentosDespesas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['desp']->key => $_smarty_tpl->tpl_vars['desp']->value){
$_smarty_tpl->tpl_vars['desp']->_loop = true;
?>"<?php echo $_smarty_tpl->tpl_vars['desp']->value['Valor'];?>
",<?php } ?>]
			},
			{
				fillColor : "rgba(130,220,220,0.5)",
				strokeColor : "rgba(130,220,220,0.8)",
				highlightFill: "rgba(130,220,220,0.75)",
				highlightStroke: "rgba(130,220,220,1)",
				data : [<?php  $_smarty_tpl->tpl_vars['rec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LancamentosReceitas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->key => $_smarty_tpl->tpl_vars['rec']->value){
$_smarty_tpl->tpl_vars['rec']->_loop = true;
?>"<?php echo $_smarty_tpl->tpl_vars['rec']->value['Valor'];?>
",<?php } ?>]
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
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>