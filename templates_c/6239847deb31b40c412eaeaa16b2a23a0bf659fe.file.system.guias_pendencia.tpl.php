<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 14:37:26
         compiled from "engine\view\InfoPanel\pages\Guias\system.guias_pendencia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15335ccf0535623f85-77667389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6239847deb31b40c412eaeaa16b2a23a0bf659fe' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Guias\\system.guias_pendencia.tpl',
      1 => 1561603801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15335ccf0535623f85-77667389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ccf0535742a25_60702052',
  'variables' => 
  array (
    'Paciente' => 0,
    'Atendimento' => 0,
    'Atendimento2' => 0,
    'FisioterapeutaSelecionado' => 0,
    'PATH' => 0,
    'Pac' => 0,
    'livroid' => 0,
    'inf' => 0,
    'Fisioterapeutas' => 0,
    'Fisio' => 0,
    'Atend' => 0,
    'FisioSel' => 0,
    'Atend2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccf0535742a25_60702052')) {function content_5ccf0535742a25_60702052($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php  $_smarty_tpl->tpl_vars['Pac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Pac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Paciente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Pac']->key => $_smarty_tpl->tpl_vars['Pac']->value){
$_smarty_tpl->tpl_vars['Pac']->_loop = true;
?><?php } ?>
<?php  $_smarty_tpl->tpl_vars['Atend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Atend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Atendimento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Atend']->key => $_smarty_tpl->tpl_vars['Atend']->value){
$_smarty_tpl->tpl_vars['Atend']->_loop = true;
?><?php } ?>
<?php  $_smarty_tpl->tpl_vars['Atend2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Atend2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Atendimento2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Atend2']->key => $_smarty_tpl->tpl_vars['Atend2']->value){
$_smarty_tpl->tpl_vars['Atend2']->_loop = true;
?><?php } ?>
<?php  $_smarty_tpl->tpl_vars['FisioSel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FisioSel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FisioterapeutaSelecionado']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FisioSel']->key => $_smarty_tpl->tpl_vars['FisioSel']->value){
$_smarty_tpl->tpl_vars['FisioSel']->_loop = true;
?><?php } ?>
<div class="step">
	<h1>Editar Guia de Atendimento</h1>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/guias/SalvaGuia">
		<div class="helper-display-none">
			<input type="text" name="PacienteId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Pac']->value['PacienteId'];?>
" readonly>
			<input type="text" name="livroid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
" readonly>
			<input type="text" name="procedimentos" id="procedimentos" class="form-control" value="1" readonly>
        </div>
		<div class="row">
			<div class="col-md-4">
				<h3>Registro da ANS</h3>
				<input type="text" name="registroans" class="form-control" value="360244" readonly>
			</div>
			<div class="col-md-4">
				<h3>Número da Guia</h3>
				<input type="text" name="guia" class="form-control" readonly>
			</div>			<div class="col-md-4">				<h3>Nº da Guia na Operadora</h3>				<input type="text" name="guiaoperadora" class="form-control" readonly>			</div>		</div>		<hr />		<h3> Dados do paciente</h3>		<div class="row">			<div class="col-md-4">				<h3>Número da carteirinha</h3>				<input type="text" name="numerocarteirinha" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Pac']->value['Carteirinha'];?>
">			</div>			<div class="col-md-4">				<h3>Validade da carteirinha</h3>				<input type="text" id="data" name="validadecarteirinha" class="form-control">			</div>			<div class="col-md-4">				<h3>Recém nascido</h3>				<select name="recemnascidos" class="form-control">					<option value="Nao" selected>Não</option>					<option value="Sim">Sim</option>				</select>			</div>		</div>		<div class="row">			<div class="col-md-8">				<h3>Nome</h3>				<input type="text" name="nome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Pac']->value['NomePaciente'];?>
">			</div>
			<div class="col-md-4">
				<h3>Número do CNS</h3>
				<input type="text" name="numerocns" class="form-control">
			</div>
		</div>
		<hr />
		<h3> Dados do contratado</h3>
		<div class="row">
			<div class="col-md-2">
				<h3>Tipo de Cód.</h3>
				<input type="text" name="tipocod" class="form-control">
			</div>
			<div class="col-md-3">
				<h3>Cód. do Prestador</h3>
				<input type="text" name="codprestador" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"){?>08853010000181<?php }else{ ?>24940797000175<?php }?>">
			</div>
			<div class="col-md-4">
				<h3>Nome do Prestador</h3>
				<input type="text" name="nomeprestador" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"){?>FISIOTERAPIA E REABILITACAO CARDIOVASCULAR<?php }else{ ?>FUKUNARI SERVICOS MEDICOS LTDA<?php }?>">
			</div>
			<div class="col-md-3">
				<h3>Cód. no CNES</h3>
				<input type="text" name="codcnes" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"){?>5717574<?php }else{ ?>8630503<?php }?>">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h3>Nome do Executor</h3>				
				<select name="nomeexecutor" id="nomeexecutor" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['Fisio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fisio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Fisioterapeutas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fisio']->key => $_smarty_tpl->tpl_vars['Fisio']->value){
$_smarty_tpl->tpl_vars['Fisio']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['Fisio']->value['Nome'];?>
" <?php if ($_smarty_tpl->tpl_vars['Fisio']->value['Nome']==$_smarty_tpl->tpl_vars['Atend']->value['Profissional']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Fisio']->value['Nome'];?>
</option>
					<?php } ?>
				</select>
			</div>
			<div class="col-md-2">
				<h3>Conselho</h3>
				<select name="conselho" id="conselho" class="form-control">
					<option disable selected>Selecionar</option>
					<option value="CRAS" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Conselho']=="CRAS"){?>selected<?php }?>>CRAS</option>
					<option value="COREN" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Conselho']=="COREN"){?>selected<?php }?>>COREN</option>
					<option value="CRF" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Conselho']=="CRF"){?>selected<?php }?>>CRF</option>
					<option value="CRFA" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Conselho']=="CRFA"){?>selected<?php }?>>CRFA</option>
					<option value="CREFITO" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Conselho']=="CREFITO"){?>selected<?php }?>>CREFITO</option>
					<option value="CRM" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Conselho']=="CRM"){?>selected<?php }?>>CRM</option>
					<option value="CRN" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Conselho']=="CRN"){?>selected<?php }?>>CRN</option>
					<option value="CRO" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Conselho']=="CRO"){?>selected<?php }?>>CRO</option>
					<option value="CRP" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Conselho']=="CRP"){?>selected<?php }?>>CRP</option>
					<option value="OUT" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Conselho']=="OUT"){?>selected<?php }?>>OUTROS</option>
				</select>
			</div>
			<div class="col-md-2">
				<h3>Número</h3>
				<input type="text" name="numero" id="numero" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['FisioSel']->value['Registro'];?>
">
			</div>
			<div class="col-md-2">
				<h3>Estado</h3>
				<select name="estado" id="estado" class="form-control">
					<option disable selected>Selecionar</option>
					<option value="AC" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="AC"){?>selected<?php }?>>AC</option>
					<option value="AL" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="AL"){?>selected<?php }?>>AL</option>
					<option value="AP" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="AP"){?>selected<?php }?>>AP</option>
					<option value="AM" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="AM"){?>selected<?php }?>>AM</option>
					<option value="BA" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="BA"){?>selected<?php }?>>BA</option>
					<option value="CE" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="CE"){?>selected<?php }?>>CE</option>
					<option value="DF" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="DF"){?>selected<?php }?>>DF</option>
					<option value="ES" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="ES"){?>selected<?php }?>>ES</option>
					<option value="GO" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="GO"){?>selected<?php }?>>GO</option>
					<option value="MA" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="MA"){?>selected<?php }?>>MA</option>
					<option value="MT" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="MT"){?>selected<?php }?>>MT</option>
					<option value="MS" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="MS"){?>selected<?php }?>>MS</option>
					<option value="MG" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="MG"){?>selected<?php }?>>MG</option>
					<option value="PA" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="PA"){?>selected<?php }?>>PA</option>
					<option value="PB" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="PB"){?>selected<?php }?>>PB</option>
					<option value="PE" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="PE"){?>selected<?php }?>>PE</option>
					<option value="PI" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="PI"){?>selected<?php }?>>PI</option>
					<option value="RJ" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="RJ"){?>selected<?php }?>>RJ</option>
					<option value="RN" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="RN"){?>selected<?php }?>>RN</option>
					<option value="RS" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="RS"){?>selected<?php }?>>RS</option>
					<option value="RO" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="RO"){?>selected<?php }?>>RO</option>
					<option value="RR" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="RR"){?>selected<?php }?>>RR</option>
					<option value="SC" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="SC"){?>selected<?php }?>>SC</option>
					<option value="SP" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="SP"){?>selected<?php }?>>SP</option>
					<option value="SE" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="SE"){?>selected<?php }?>>SE</option>
					<option value="TO" <?php if ($_smarty_tpl->tpl_vars['FisioSel']->value['Estado']=="TO"){?>selected<?php }?>>TO</option>
				</select>
			</div>
			<div class="col-md-2">
				<h3>CBO-S</h3>
				<input type="text" name="cbos" id="cbos" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['FisioSel']->value['CBOS'];?>
">
			</div>
		</div>		<div class="row">			<div class="col-md-4">				<h3>CPF do Executor</h3>								<input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['FisioSel']->value['CPF'];?>
">			</div>		</div>
	
		<hr />
		<h3> Dados do Atendimento</h3>
		
		<label>Procedimento 01</label>
		<div class="row">
			<div class="col-md-3">
				<h3>Caráter Atendimento</h3>
				<select name="caraterAtendimento[1]" class="form-control">
					<option value="1">Eletivo</option>
					<option value="2">Urgência/Emergência</option>
				</select>
			</div>
	
			<div class="col-md-3">
				<h3>Tipo Atendimento</h3>
				<select name="tipoAtendimento[1]" class="form-control">
					<option value="01">Remoção</option>
					<option value="02">Pequena Cirurgia</option>
					<option value="03" selected>Terapias</option>
					<option value="04">Consulta</option>
					<option value="05">Exames</option>
					<option value="06">Atendimento Domiciliar</option>
					<option value="07">SADT Internado</option>
					<option value="08">Quimioterapia</option>
					<option value="09">Radioterapia</option>
					<option value="10">Terapia Renal Substitutiva (TRS)</option>
				</select>
			</div>
			
			<div class="col-md-3">
				<h3>Ind. de Acidente</h3>
				<select name="indicacaoAcidente[1]" class="form-control">
					<option value="0">Acidente ou doença relacionada a trabalho</option>
					<option value="1">Acidente ou doença relacionada a transito</option>
					<option value="2" selected>Outros</option>
				</select>
			</div>
			
			<div class="col-md-3">
				<h3>Data de Execução</h3>
				<input type="text" id="data1" name="dataExecucao[1]" class="form-control" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Atend2']->value['Data'],"%d/%m/%Y");?>
">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-2">
				<h3>Hora Inicial</h3>
				<input type="text" id="hora" name="horaInicial[1]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Atend2']->value['Hora'];?>
">
			</div>
	
			<div class="col-md-2">
				<h3>Hora Final</h3>
				<input type="text" id="hora2" name="horaFinal[1]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Atend2']->value['Hora'];?>
">
			</div>
			
			<div class="col-md-4">
				<h3>Codigo Tabela</h3>
				<input type="text" name="codigoTabela[1]" class="form-control" value="22" readonly>
			</div>
			
			<div class="col-md-4">
				<h3>Codigo Procedimento</h3>				<select name="codigoProcedimento[1]" id="codigoProcedimento1" onchange="alteraCodigo(1)" class="form-control">				<?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"){?>					<option value="50000160">50000160</option>					<option value="20103646">20103646</option>					<option value="50000209">50000209</option>					<option value="20103069">20103069</option>				<?php }else{ ?>					<option value="31601014">31601014</option>				<?php }?>				</select>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-8">
				<h3>Descrição Procedimento</h3>
				<input type="text" name="descricaoProcedimento[1]" id="descricaoProcedimento1" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"){?>SESSAO DE FISIOTERAPIA<?php }else{ ?>SESSAO DE ACUPUNTURA<?php }?>" readonly>
			</div>			
			<div class="col-md-4">
				<h3>Quantidade Executada</h3>
				<input type="number" name="quantidadeExecutada[1]" class="form-control" value="1">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<h3>Via de Acesso</h3>
				<select name="viaAcesso[1]" class="form-control">
					<option value="U">Única</option>
					<option value="M">Mesma Via</option>
					<option value="D">Diferentes Vias</option>
				</select>
			</div>
			
			<div class="col-md-3">
				<h3>Técnica Utilizada</h3>
				<select name="TecnicaUtilizada[1]" class="form-control">
					<option value="C">Convencional</option>
					<option value="V">Videolaparoscopia</option>
				</select>
			</div>
			<div class="col-md-3">
				<h3>Redução/Acréscimo</h3>
				<input type="text" name="reducaoAcrescimo[1]" class="form-control" value="0" readonly>
			</div>
	
			<div class="col-md-3">
				<h3>Valor Unitário</h3>
				<input type="text" name="valorUnitario[1]" class="form-control" required>
			</div>
		</div>
		
		<div id="place">
		</div>
			
		<div class="row">
			<div id="espaco"></div>
			<br>
			<a onclick='func()' class="btn btn-primary">Adicionar outro Procedimento</a>
		</div>
		
		<div class="row">
			<br>
			<button type="submit" class="btn btn-default">Salvar</button>
		</div>
	</form>
</div>

	<script>
		$(function() {
			$('#nomeexecutor').change(function(){
				$.getJSON('/info/guias/getDadosMedico', {Nome : $('#nomeexecutor').val()}, function(data) {
					$.each(data, function(i, item) {
						document.getElementById("numero").value = item.Registro;
						$('#estado').html(" ");
						$('#estado').append('<option disable selected>Selecionar</option>');
						if(item.Estado == "AC"){
							$('#estado').append('<option value="AC" selected>AC</option>');
						}else{
							$('#estado').append('<option value="AC">AC</option>');
						}
						if(item.Estado == "AL"){
							$('#estado').append('<option value="AL" selected>AL</option>');
						}else{
							$('#estado').append('<option value="AL">AL</option>');
						}
						if(item.Estado == "AP"){
							$('#estado').append('<option value="AP" selected>AP</option>');
						}else{
							$('#estado').append('<option value="AP">AP</option>');
						}
						if(item.Estado == "AM"){
							$('#estado').append('<option value="AM" selected>AM</option>');
						}else{
							$('#estado').append('<option value="AM">AM</option>');
						}
						if(item.Estado == "BA"){
							$('#estado').append('<option value="BA" selected>BA</option>');
						}else{
							$('#estado').append('<option value="BA">BA</option>');
						}
						if(item.Estado == "CE"){
							$('#estado').append('<option value="CE" selected>CE</option>');
						}else{
							$('#estado').append('<option value="CE">CE</option>');
						}
						if(item.Estado == "DF"){
							$('#estado').append('<option value="DF" selected>DF</option>');
						}else{
							$('#estado').append('<option value="DF">DF</option>');
						}
						if(item.Estado == "ES"){
							$('#estado').append('<option value="ES" selected>ES</option>');
						}else{
							$('#estado').append('<option value="ES">ES</option>');
						}
						if(item.Estado == "GO"){
							$('#estado').append('<option value="GO" selected>GO</option>');
						}else{
							$('#estado').append('<option value="GO">GO</option>');
						}
						if(item.Estado == "MA"){
							$('#estado').append('<option value="MA" selected>MA</option>');
						}else{
							$('#estado').append('<option value="MA">MA</option>');
						}
						if(item.Estado == "MT"){
							$('#estado').append('<option value="MT" selected>MT</option>');
						}else{
							$('#estado').append('<option value="MT">MT</option>');
						}
						if(item.Estado == "MS"){
							$('#estado').append('<option value="MS" selected>MS</option>');
						}else{
							$('#estado').append('<option value="MS">MS</option>');
						}
						if(item.Estado == "MG"){
							$('#estado').append('<option value="MG" selected>MG</option>');
						}else{
							$('#estado').append('<option value="MG">MG</option>');
						}
						if(item.Estado == "PA"){
							$('#estado').append('<option value="PA" selected>PA</option>');
						}else{
							$('#estado').append('<option value="PA">PA</option>');
						}
						if(item.Estado == "PB"){
							$('#estado').append('<option value="PB" selected>PB</option>');
						}else{
							$('#estado').append('<option value="PB">PB</option>');
						}
						if(item.Estado == "PE"){
							$('#estado').append('<option value="PE" selected>PE</option>');
						}else{
							$('#estado').append('<option value="PE">PE</option>');
						}
						if(item.Estado == "PI"){
							$('#estado').append('<option value="PI" selected>PI</option>');
						}else{
							$('#estado').append('<option value="PI">PI</option>');
						}
						if(item.Estado == "RJ"){
							$('#estado').append('<option value="RJ" selected>RJ</option>');
						}else{
							$('#estado').append('<option value="RJ">RJ</option>');
						}
						if(item.Estado == "RN"){
							$('#estado').append('<option value="RN" selected>RN</option>');
						}else{
							$('#estado').append('<option value="RN">RN</option>');
						}
						if(item.Estado == "RS"){
							$('#estado').append('<option value="RS" selected>RS</option>');
						}else{
							$('#estado').append('<option value="RS">RS</option>');
						}
						if(item.Estado == "RO"){
							$('#estado').append('<option value="RO" selected>RO</option>');
						}else{
							$('#estado').append('<option value="RO">RO</option>');
						}
						if(item.Estado == "RR"){
							$('#estado').append('<option value="RR" selected>RR</option>');
						}else{
							$('#estado').append('<option value="RR">RR</option>');
						}
						if(item.Estado == "SC"){
							$('#estado').append('<option value="SC" selected>SC</option>');
						}else{
							$('#estado').append('<option value="SC">SC</option>');
						}

						if(item.Estado == "SP"){
							$('#estado').append('<option value="SP" selected>SP</option>');
						}else{
							$('#estado').append('<option value="SP">SP</option>');
						}

						if(item.Estado == "SE"){
							$('#estado').append('<option value="SE" selected>SE</option>');
						}else{
							$('#estado').append('<option value="SE">SE</option>');
						}

						if(item.Estado == "TO"){
							$('#estado').append('<option value="TO" selected>TO</option>');
						}else{
							$('#estado').append('<option value="TO">TO</option>');
						}

						$('#conselho').html(" ");
						$('#conselho').append('<option disable selected>Selecionar</option>');

						if(item.Conselho == "CRAS"){
							$('#conselho').append('<option value="CRAS" selected>CRAS</option>');
						}else{
							$('#conselho').append('<option value="CRAS">CRAS</option>');
						}
						if(item.Conselho == "COREN"){
							$('#conselho').append('<option value="COREN" selected>COREN</option>');
						}else{
							$('#conselho').append('<option value="COREN">COREN</option>');
						}
						if(item.Conselho == "CRF"){
							$('#conselho').append('<option value="CRF" selected>CRF</option>');
						}else{
							$('#conselho').append('<option value="CRF">CRF</option>');
						}
						if(item.Conselho == "CRFA"){
							$('#conselho').append('<option value="CRFA" selected>CRFA</option>');
						}else{
							$('#conselho').append('<option value="CRFA">CRFA</option>');
						}

						if(item.Conselho == "CREFITO"){
							$('#conselho').append('<option value="CREFITO" selected>CREFITO</option>');
						}else{
							$('#conselho').append('<option value="CREFITO">CREFITO</option>');
						}
						if(item.Conselho == "CRM"){
							$('#conselho').append('<option value="CRM" selected>CRM</option>');
						}else{
							$('#conselho').append('<option value="CRM">CRM</option>');
						}
						if(item.Conselho == "CRN"){
							$('#conselho').append('<option value="CRN" selected>CRN</option>');
						}else{
							$('#conselho').append('<option value="CRN">CRN</option>');
						}
						if(item.Conselho == "CRO"){
							$('#conselho').append('<option value="CRO" selected>CRO</option>');
						}else{
							$('#conselho').append('<option value="CRO">CRO</option>');
						}
						if(item.Conselho == "CRP"){
							$('#conselho').append('<option value="CRP" selected>CRP</option>');
						}else{
							$('#conselho').append('<option value="CRP">CRP</option>');
						}
						if(item.Conselho == "OUT"){
							$('#conselho').append('<option value="OUT" selected>OUT</option>');
						}else{
							$('#conselho').append('<option value="OUT">OUT</option>');
						}
						document.getElementById("cbos").value = item.CBOS;						document.getElementById("cpf").value = item.CPF;
					});
				});
			});
		});
	</script>
	<script>
		function func(){
			var numero = parseInt($('#procedimentos').val());
			numero = numero +1;
			document.getElementById("procedimentos").value = numero;
			$('#place').append('<hr />');
			$('#place').append('<label>Procedimento '+numero+'</label>');
			$('#place').append('<div class="row">');
			$('#place').append('	<div class="col-md-3"><h3>Caráter Atendimento</h3><select name="caraterAtendimento['+numero+']" class="form-control"><option value="1">Eletivo</option><option value="2">Urgência/Emergência</option></select></div>');
			$('#place').append('	<div class="col-md-3"><h3>Tipo Atendimento</h3><select name="tipoAtendimento['+numero+']" class="form-control"><option value="01">Remoção</option><option value="02">Pequena Cirurgia</option><option value="03" selected>Terapias</option><option value="04">Consulta</option><option value="05">Exames</option><option value="06">Atendimento Domiciliar</option><option value="07">SADT Internado</option><option value="08">Quimioterapia</option><option value="09">Radioterapia</option><option value="10">Terapia Renal Substitutiva (TRS)</option></select></div>');
			$('#place').append('	<div class="col-md-3"><h3>Ind. de Acidente</h3><select name="indicacaoAcidente['+numero+']" class="form-control"><option value="0">Acidente ou doença relacionada a trabalho</option><option value="1">Acidente ou doença relacionada a transito</option><option value="2" selected>Outros</option></select></div>');
			$('#place').append('	<div class="col-md-3"><h3>Data de Execução</h3><input type="text" id="data'+numero+'" name="dataExecucao['+numero+']" class="form-control"></div>');
			$('#place').append('</div>');
			$('#place').append('<div class="row">');
			$('#place').append('	<div class="col-md-2"><h3>Hora Inicial</h3><input type="text" id="hora1'+numero+'" name="horaInicial['+numero+']" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Atend2']->value['Hora'];?>
"></div>');
			$('#place').append('	<div class="col-md-2"><h3>Hora Final</h3><input type="text" id="hora2'+numero+'" name="horaFinal['+numero+']" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Atend2']->value['Hora'];?>
"></div>');
			$('#place').append('	<div class="col-md-4"><h3>Codigo Tabela</h3><input type="text" name="codigoTabela['+numero+']" class="form-control" value="22" readonly></div>');			
			$('#place').append('	<div class="col-md-4"><h3>Codigo Procedimento</h3><select name="codigoProcedimento['+numero+']" id="codigoProcedimento'+numero+'" onchange="alteraCodigo('+numero+')" class="form-control"><?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"){?><option value="50000160">50000160</option><option value="20103646">20103646</option><option value="50000209">50000209</option><option value="20103069">20103069</option><?php }else{ ?><option value="31601014">31601014</option><?php }?></select></div>');			
			$('#place').append('</div>');
			$('#place').append('<div class="row">');
			$('#place').append('	<div class="col-md-8"><h3>Descrição Procedimento</h3><input type="text" name="descricaoProcedimento['+numero+']" id="descricaoProcedimento'+numero+'" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"){?>SESSAO DE FISIOTERAPIA<?php }else{ ?>SESSAO DE ACUPUNTURA<?php }?>" readonly></div>');
			$('#place').append('	<div class="col-md-4"><h3>Quantidade Executada</h3><input type="number" name="quantidadeExecutada['+numero+']" class="form-control" value="1"></div>');
			$('#place').append('</div>');
			$('#place').append('<div class="row">');
			$('#place').append('	<div class="col-md-3"><h3>Via de Acesso</h3><select name="viaAcesso['+numero+']" class="form-control"><option value="U">Única</option><option value="M">Mesma Via</option><option value="D">Diferentes Vias</option></select></div>');
			$('#place').append('	<div class="col-md-3"><h3>Técnica Utilizada</h3><select name="TecnicaUtilizada['+numero+']" class="form-control"><option value="C">Convencional</option><option value="V">Videolaparoscopia</option></select></div>');
			$('#place').append('	<div class="col-md-3"><h3>Redução/Acréscimo</h3><input type="text" name="reducaoAcrescimo['+numero+']" class="form-control" value="0" readonly></div>');
			$('#place').append('	<div class="col-md-3"><h3>Valor Unitário</h3><input type="text" name="valorUnitario['+numero+']" class="form-control"></div>');
			$('#place').append('</div>');
			$('#place').append('<br>');

			$('#espaco').html(" ");
			$('#espaco').append('<br><br><br>');
			$("#data"+numero).mask("99/99/9999");
			$("#hora1"+numero).mask("99:99");
			$("#hora2"+numero).mask("99:99");
		}
	</script>		<script>		function alteraCodigo(contador){			var codigo = $('#codigoProcedimento'+contador).val();						if(codigo == "50000160"){				document.getElementById("descricaoProcedimento"+contador).value = "SESSAO DE FISIOTERAPIA";			}else if(codigo == "20103646"){				document.getElementById("descricaoProcedimento"+contador).value = "SESSAO DE FISIOTERAPIA UROGINECOLOGICA";			}else if(codigo == "50000209"){				document.getElementById("descricaoProcedimento"+contador).value = "SESSAO DE DRENAGEM LINFATICA";			}else if(codigo == "20103069"){				document.getElementById("descricaoProcedimento"+contador).value = "ASSISTENCIA FISIATICA RESPIRATORIA";			}else if(codigo == "31601014"){				document.getElementById("descricaoProcedimento"+contador).value = "SESSAO DE ACUPUNTURA";			}		}	</script>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>