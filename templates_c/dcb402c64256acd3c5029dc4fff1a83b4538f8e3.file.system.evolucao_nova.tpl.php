<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 07:07:14
         compiled from "engine\view\InfoPanel\pages\Fila_Atendimento\system.evolucao_nova.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187275cd007994d2ff6-93965140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb402c64256acd3c5029dc4fff1a83b4538f8e3' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Fila_Atendimento\\system.evolucao_nova.tpl',
      1 => 1561603801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187275cd007994d2ff6-93965140',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd0079952d532_20487899',
  'variables' => 
  array (
    'Areas' => 0,
    'PATH' => 0,
    'pacienteid' => 0,
    'horreqid' => 0,
    'avaliacaoid' => 0,
    'Area' => 0,
    'Profissionais' => 0,
    'Fisioterapeuta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0079952d532_20487899')) {function content_5cd0079952d532_20487899($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php  $_smarty_tpl->tpl_vars['Area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Area']->key => $_smarty_tpl->tpl_vars['Area']->value){
$_smarty_tpl->tpl_vars['Area']->_loop = true;
?><?php } ?><div class="step">	<h1>Nova Evolução</h1>    	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/filaatendimento/novaEvolucao" Onsubmit="btn.disabled=true">		        <div class="helper-display-none">            <label>PacienteId</label>            <input type="text" name="pacienteid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pacienteid']->value;?>
">			<input type="text" name="horreqid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
">			<input type="text" name="avaliacaoid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['avaliacaoid']->value;?>
">			<input type="text" name="area" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Area']->value['Area'];?>
">        </div>				<div class="form-group">            <label>Fisioterapeuta avaliador</label>            <select name="profissional" class="form-control">				<option disabled selected>Selecionar</option>				<?php  $_smarty_tpl->tpl_vars['Fisioterapeuta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fisioterapeuta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Profissionais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fisioterapeuta']->key => $_smarty_tpl->tpl_vars['Fisioterapeuta']->value){
$_smarty_tpl->tpl_vars['Fisioterapeuta']->_loop = true;
?>					<option value="<?php echo $_smarty_tpl->tpl_vars['Fisioterapeuta']->value['Nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['Fisioterapeuta']->value['Nome'];?>
</option>				<?php } ?>			</select>        </div>				<?php if ($_smarty_tpl->tpl_vars['Area']->value['Area']=="Ortopedia"){?>		<div class="form-group">            <label>Como o paciente está</label>            <select name="tipo" id="tipo" class="form-control">				<option disabled Selected>Selecionar</option>				<option value="3">Dor Intensa</option>				<option value="2">Dor moderada</option>				<option value="1">Sem Dor</option>			</select>        </div>		<?php }elseif($_smarty_tpl->tpl_vars['Area']->value['Area']=="Respiratoria"){?>			<div class="form-group">				<label>Tosse?</label>				<select name="tosse" id="tosse" class="form-control">					<option disabled selected>Selecionar</option>					<option value="NAO">Não</option>					<option value="SIM">Sim</option>				</select>			</div>						<div class="form-group helper-display-none" id="tipotossediv">				<label>Tipo de tosse?</label>				<select name="tossetipo" class="form-control">					<option disabled selected>Selecionar</option>					<option value="Produtiva">Produtiva</option>					<option value="Seca">Seca</option>				</select>			</div>						<div class="form-group">				<label>Dispnéia?</label>				<select name="dispneia" id="dispneia" class="form-control">					<option disabled selected>Selecionar</option>					<option value="NAO">Não</option>					<option value="SIM">Sim</option>				</select>			</div>						<div class="form-group helper-display-none" id="tipodispneiadiv">				<label>Tipo de dispnéia?</label>				<select name="dispneiatipo" class="form-control">					<option disabled selected>Selecionar</option>					<option value="Em repouso">Em repouso</option>					<option value="Em leve esforco">Em leve esforço</option>					<option value="Em esforco Intenso">Em esforço Intenso</option>				</select>			</div>						<div class="form-group">				<label>SatO2 (em %)</label>				<input type="text" name="sato2respiratoria" class="form-control">			</div>						<div class="form-group">				<label>Auscultas</label>				<select name="auscultas" class="form-control">					<option disabled selected>Selecionar</option>					<option value="MV + sem RA">MV + sem RA</option>					<option value="MV + com roncos">MV + com roncos</option>					<option value="MV + com estertores">MV + com estertores</option>					<option value="MV + diminuída">MV + diminuída</option>				</select>			</div>						<div class="form-group">				<label>Conduta</label></br>				<label><input type="checkbox" name="condutarespiratoria1" value="1"> Manobras de higiene brônquica</label><br>				<label><input type="checkbox" name="condutarespiratoria2" value="1"> Manobras de Reexpansao Pulmonar</label><br>				<label><input type="checkbox" name="condutarespiratoria3" value="1"> Exercícios de desinsuflação pulmonar</label><br>				<label><input type="checkbox" name="condutarespiratoria4" value="1"> Exercícios Aeróbicos</label><br>			</div>		<?php }elseif($_smarty_tpl->tpl_vars['Area']->value['Area']=="Uroginecologia"){?>			<div id="uroginecologia2">				<label>Tratamento</label>				<select  multiple="multiple" name="tratamentourogineco[]" id="tratamentourogineco" class="form-control">					<option disabled selected>Selecionar</option>					<option value="EXERCICIOS ASSOCIADOS A CONTRACAO PERINEAL">EXERCICIOS ASSOCIADOS A CONTRACAO PERINEAL</option>					<option value="ELETROESTIMULACAO SACRAL">ELETROESTIMULACAO SACRAL</option>					<option value="ELETROESTIMULACAO TIBIAL">ELETROESTIMULACAO TIBIAL</option>					<option value="BIOFEEDBACK">BIOFEEDBACK</option>					<option value="ELETROESTIMULACAO RETAL">ELETROESTIMULACAO RETAL</option>				</select>			</div>		<?php }elseif($_smarty_tpl->tpl_vars['Area']->value['Area']=="Neurologia"){?>			<div class="form-group">				<label>Condutas</label>				<label><input type="checkbox" name="exerciciosativos" value="1"> Exerícios Ativos</label><br>				<label><input type="checkbox" name="exerciciospassivos" value="1"> Exerícios Passivos</label><br>				<label><input type="checkbox" name="exerciciosassistidos" value="1"> Exercícios Assistidos</label><br>				<label><input type="checkbox" name="alongamentos" value="1"> Alongamentos</label><br>				<label><input type="checkbox" name="treinodemarcha" value="1"> Treino de Marcha</label><br>				<label><input type="checkbox" name="atividadesfuncionais" value="1"> Atividades Funcionais</label><br>				<label><input type="checkbox" name="fortalecimento" value="1"> Fortalecimento</label><br>				<label><input type="checkbox" name="treinodeequilibrio" value="1"> Treino de Equilíbrio</label><br>				<label><input type="checkbox" name="eletroestimulacao" value="1"> Eletroestimulação</label><br>			</div>				<?php }?>		<div id="conduta"></div>				<div class="form-group">            <label><input type="checkbox" name="Alta" value="1"> Dar alta ao paciente.</label>        </div>				<div class="form-group">			<label>Observações</label>			<textarea name="Observacoes" class="form-control"></textarea>		</div>	        <button name="btn" type="submit" class="btn btn-default">Salvar</button>		    </form>		</div><script src="https://code.jquery.com/jquery-1.12.4.js"></script><script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><script>$(function() {	$('#tipo').change(function(){		var tipo = $('#tipo').val()				if(tipo == 1){			$('#conduta').html(" ");			$('#conduta').html("<h3>Conduta</h3><label>Exercícios/Alongamento/Fortalecimento/Conforme Protocolo</label>");		}else if(tipo == 2){			$('#conduta').html(" ");			$('#conduta').html('<label>Dor com Movimentação Leve?</label> <select name="dor" id="dor" class="form-control"><option disabled Selected>Selecionar</option><option value="SIM">SIM</option><option value="NAO">NÃO</option></select>');			$('#conduta').append('<h3>Conduta</h3><label>Eletro analgesia/antinflamatório/Alongamentos Leves</label>');			$('#conduta').append('<div class="form-group"><h3>Analgesia</h3><label><input type="checkbox" name="tens" value="1"> TENS</label><br><label><input type="checkbox" name="iv" value="1"> I.V.</label><br><label><input type="checkbox" name="oc" value="1"> O.C.</label><br><label><input type="checkbox" name="ventosa" value="1"> Ventosa</label><br></div>');			$('#conduta').append('<div class="form-group"><h3>Anti-inflamatório</h3><label><input type="checkbox" name="us" value="1"> U.S.</label><br><label><input type="checkbox" name="laser" value="1"> Laser</label><br></div>');		}else if(tipo == 3){			$('#conduta').html(" ");			$('#conduta').html('<label>Dor em Repouso?</label> <select name="dor" id="dor" class="form-control"><option disabled Selected>Selecionar</option><option value="SIM">SIM</option><option value="NAO">NÃO</option></select>');			$('#conduta').append('<h3>Conduta</h3><label>Analgesia + Anti-inflamatório</label>');			$('#conduta').append('<div class="form-group"><h3>Analgesia</h3><label><input type="checkbox" name="tens" value="1"> TENS</label><br><label><input type="checkbox" name="iv" value="1"> I.V.</label><br><label><input type="checkbox" name="oc" value="1"> O.C.</label><br><label><input type="checkbox" name="ventosa" value="1"> Ventosa</label><br></div>');			$('#conduta').append('<div class="form-group"><h3>Anti-inflamatório</h3><label><input type="checkbox" name="us" value="1"> U.S.</label><br><label><input type="checkbox" name="laser" value="1"> Laser</label><br></div>');		};	});});

$(window).load(function(){
 
document.getElementById('tosse').addEventListener('change', function() {
var value = this.value;
var tipotossediv = document.getElementById('tipotossediv');

tipotossediv.style.display = 'none';

switch(value) {
case 'SIM': tipotossediv.style.display = 'block'; break;

}
})

});

$(window).load(function(){
 
document.getElementById('dispneia').addEventListener('change', function() {
var value = this.value;
var tipodispneiadiv = document.getElementById('tipodispneiadiv');

tipodispneiadiv.style.display = 'none';

switch(value) {
case 'SIM': tipodispneiadiv.style.display = 'block'; break;

}
})

});
</script>



<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>