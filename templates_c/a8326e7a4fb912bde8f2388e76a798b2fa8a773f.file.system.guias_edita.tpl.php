<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 14:49:33
         compiled from "engine\view\InfoPanel\pages\Guias\system.guias_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169805ccf04f5a45963-87487719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8326e7a4fb912bde8f2388e76a798b2fa8a773f' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Guias\\system.guias_edita.tpl',
      1 => 1561603801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169805ccf04f5a45963-87487719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ccf04f5bb7279_83148508',
  'variables' => 
  array (
    'Guias' => 0,
    'NumeroProcedimentos' => 0,
    'PATH' => 0,
    'Guia' => 0,
    'Proceds' => 0,
    'Procedimentos' => 0,
    'i' => 0,
    'proc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccf04f5bb7279_83148508')) {function content_5ccf04f5bb7279_83148508($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Guia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Guia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Guias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Guia']->key => $_smarty_tpl->tpl_vars['Guia']->value){
$_smarty_tpl->tpl_vars['Guia']->_loop = true;
?><?php } ?>
<?php  $_smarty_tpl->tpl_vars['Proceds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Proceds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NumeroProcedimentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Proceds']->key => $_smarty_tpl->tpl_vars['Proceds']->value){
$_smarty_tpl->tpl_vars['Proceds']->_loop = true;
?><?php } ?>

<div class="step">
	<h1>Editar Guia de Atendimento</h1>	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/guias/EditaGuia">
		<div class="helper-display-none">
			<input type="text" name="GuiaId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['GuiaId'];?>
">
			<input type="text" name="PacienteId" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['PacienteId'];?>
">
			<input type="text" name="procedimentos" id="procedimentos" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Proceds']->value['conta'];?>
">
        </div>
		
		<div class="row">
			<div class="col-md-4">
				<h3>Registro da ANS</h3>
				<input type="text" name="registroans" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['registroANS'];?>
">
			</div>
	
			<div class="col-md-4">
				<h3>Número da Guia</h3>
				<input type="text" name="guia" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['numeroGuiaPrestador'];?>
">
			</div>
			
			<div class="col-md-4">
				<h3>Nº da Guia na Operadora</h3>
				<input type="text" name="guiaoperadora" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['numeroGuiaOperadora'];?>
">
			</div>
		</div>
		
		<hr />
		<h3> Dados do paciente</h3>
		<div class="row">
			<div class="col-md-4">
				<h3>Número da carteirinha</h3>
				<input type="text" name="numerocarteirinha" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['numeroCarteira'];?>
">
			</div>
	
			<div class="col-md-4">
				<h3>Validade da carteirinha</h3>
				<input type="text" id="data" name="validadecarteirinha" class="form-control">
			</div>
			
			<div class="col-md-4">
				<h3>Recém nascido</h3>
				<select name="recemnascidos" class="form-control">
					<option value="Nao" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['atendimentoRN']=="Nao"){?>selected<?php }?>>Não</option>
					<option value="Sim" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['atendimentoRN']=="Sim"){?>selected<?php }?>>Sim</option>
				</select>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-8">
				<h3>Nome</h3>
				<input type="text" name="nome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['NomePaciente'];?>
">
			</div>
	
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
				<input type="text" name="codprestador" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['codigoPrestadorNaOperadora'];?>
">
			</div>
			
			<div class="col-md-4">
				<h3>Nome do Prestador</h3>
				<input type="text" name="nomeprestador" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['nomeContratado'];?>
">
			</div>
			
			<div class="col-md-3">
				<h3>Cód. no CNES</h3>
				<input type="text" name="codcnes" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['CNES'];?>
">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<h3>Nome do Executor</h3>
				<input type="text" name="nomeexecutor" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['nomeProfissional'];?>
">
			</div>
	
			<div class="col-md-2">
				<h3>Conselho</h3>
				<select name="conselho" class="form-control">					<option value="CRAS" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['conselhoProfissional']=="CRAS"){?>selected<?php }?>>CRAS</option>					<option value="COREN" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['conselhoProfissional']=="COREN"){?>selected<?php }?>>COREN</option>					<option value="CRF" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['conselhoProfissional']=="CRF"){?>selected<?php }?>>CRF</option>					<option value="CRFA" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['conselhoProfissional']=="CRFA"){?>selected<?php }?>>CRFA</option>					<option value="CREFITO" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['conselhoProfissional']=="CREFITO"){?>selected<?php }?>>CREFITO</option>					<option value="CRM" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['conselhoProfissional']=="CRM"){?>selected<?php }?>>CRM</option>					<option value="CRN" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['conselhoProfissional']=="CRN"){?>selected<?php }?>>CRN</option>					<option value="CRO" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['conselhoProfissional']=="CRO"){?>selected<?php }?>>CRO</option>					<option value="CRP" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['conselhoProfissional']=="CRP"){?>selected<?php }?>>CRP</option>					<option value="OUT" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['conselhoProfissional']=="OUT"){?>selected<?php }?>>OUTROS</option>
				</select>
			</div>
			
			<div class="col-md-2">
				<h3>Número</h3>
				<input type="text" name="numero" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['numeroConselhoProfissional'];?>
">
			</div>
			
			<div class="col-md-2">
				<h3>Estado</h3>
				<select name="estado" class="form-control">
					<option value="AC" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="AC"){?>selected<?php }?>>AC</option>
					<option value="AL" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="AL"){?>selected<?php }?>>AL</option>
					<option value="AP" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="AP"){?>selected<?php }?>>AP</option>
					<option value="AM" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="AM"){?>selected<?php }?>>AM</option>
					<option value="BA" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="BA"){?>selected<?php }?>>BA</option>
					<option value="CE" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="CE"){?>selected<?php }?>>CE</option>
					<option value="DF" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="DF"){?>selected<?php }?>>DF</option>
					<option value="ES" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="ES"){?>selected<?php }?>>ES</option>
					<option value="GO" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="GO"){?>selected<?php }?>>GO</option>
					<option value="MA" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="MA"){?>selected<?php }?>>MA</option>
					<option value="MT" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="MT"){?>selected<?php }?>>MT</option>
					<option value="MS" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="MS"){?>selected<?php }?>>MS</option>
					<option value="MG" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="MG"){?>selected<?php }?>>MG</option>
					<option value="PA" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="PA"){?>selected<?php }?>>PA</option>
					<option value="PB" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="PB"){?>selected<?php }?>>PB</option>
					<option value="PE" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="PE"){?>selected<?php }?>>PE</option>
					<option value="PI" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="PI"){?>selected<?php }?>>PI</option>
					<option value="RJ" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="RJ"){?>selected<?php }?>>RJ</option>
					<option value="RN" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="RN"){?>selected<?php }?>>RN</option>
					<option value="RS" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="RS"){?>selected<?php }?>>RS</option>
					<option value="RO" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="RO"){?>selected<?php }?>>RO</option>
					<option value="RR" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="RR"){?>selected<?php }?>>RR</option>
					<option value="SC" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="SC"){?>selected<?php }?>>SC</option>
					<option value="SP" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="SP"){?>selected<?php }?>>SP</option>
					<option value="SE" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="SE"){?>selected<?php }?>>SE</option>
					<option value="TO" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['UF']=="TO"){?>selected<?php }?>>TO</option>
				</select>
			</div>
			
			<div class="col-md-2">
				<h3>CBO-S</h3>
				<input type="text" name="cbos" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['CBOS'];?>
">
			</div>
		</div>		<div class="row">			<div class="col-md-4">				<h3>CPF do Executor</h3>								<input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Guia']->value['CPF'];?>
">			</div>		</div>
	
		<hr />
		<h3> Dados do Atendimento</h3>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['proc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['proc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Procedimentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['proc']->key => $_smarty_tpl->tpl_vars['proc']->value){
$_smarty_tpl->tpl_vars['proc']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
		<label>Procedimento <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</label>
		<div class="row">
			<div class="col-md-3">
				<h3>Caráter Atendimento</h3>
				<select name="caraterAtendimento[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['caraterAtendimento']=="1"){?>selected<?php }?>>Eletivo</option>
					<option value="2" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['caraterAtendimento']=="2"){?>selected<?php }?>>Urgência/Emergência</option>
				</select>
			</div>
	
			<div class="col-md-3">
				<h3>Tipo Atendimento</h3>
				<select name="tipoAtendimento[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control">
					<option value="01" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['tipoAtendimento']=="01"){?>selected<?php }?>>Remoção</option>
					<option value="02" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['tipoAtendimento']=="02"){?>selected<?php }?>>Pequena Cirurgia</option>
					<option value="03" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['tipoAtendimento']=="03"){?>selected<?php }?>>Terapias</option>
					<option value="04" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['tipoAtendimento']=="04"){?>selected<?php }?>>Consulta</option>
					<option value="05" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['tipoAtendimento']=="05"){?>selected<?php }?>>Exames</option>
					<option value="06" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['tipoAtendimento']=="06"){?>selected<?php }?>>Atendimento Domiciliar</option>
					<option value="07" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['tipoAtendimento']=="07"){?>selected<?php }?>>SADT Internado</option>
					<option value="08" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['tipoAtendimento']=="08"){?>selected<?php }?>>Quimioterapia</option>
					<option value="09" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['tipoAtendimento']=="09"){?>selected<?php }?>>Radioterapia</option>
					<option value="10" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['tipoAtendimento']=="10"){?>selected<?php }?>>Terapia Renal Substitutiva (TRS)</option>
				</select>
			</div>
			
			<div class="col-md-3">
				<h3>Ind. de Acidente</h3>
				<select name="indicacaoAcidente[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control">
					<option value="0" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['indicacaoAcidente']=="0"){?>selected<?php }?>>Acidente ou doença relacionada a trabalho</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['indicacaoAcidente']=="1"){?>selected<?php }?>>Acidente ou doença relacionada a transito</option>
					<option value="2" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['indicacaoAcidente']=="2"){?>selected<?php }?>>Outros</option>
				</select>
			</div>
			
			<div class="col-md-3">
				<h3>Data de Execução</h3>
				<input type="text" id="data1" name="dataExecucao[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['proc']->value['dataExecucao'],"%d/%m/%Y");?>
">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-2">
				<h3>Hora Inicial</h3>
				<input type="text" id="hora" name="horaInicial[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['horaInicial'];?>
">
			</div>
	
			<div class="col-md-2">
				<h3>Hora Final</h3>
				<input type="text" id="hora2" name="horaFinal[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['horaFinal'];?>
">
			</div>
			
			<div class="col-md-4">
				<h3>Codigo Tabela</h3>
				<input type="text" name="codigoTabela[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['codigoTabela'];?>
">
			</div>
			
			<div class="col-md-4">
				<h3>Codigo Procedimento</h3>
				<input type="text" name="codigoProcedimento[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['codigoProcedimento'];?>
">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-8">
				<h3>Descrição Procedimento</h3>
				<input type="text" name="descricaoProcedimento[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['descricaoProcedimento'];?>
">
			</div>
	
			<div class="col-md-4">
				<h3>Quantidade Executada</h3>
				<input type="number" name="quantidadeExecutada[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['quantidadeExecutada'];?>
">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<h3>Via de Acesso</h3>
				<select name="viaAcesso[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control">
					<option value="U" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['viaAcesso']=="U"){?>selected<?php }?>>Única</option>
					<option value="M" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['viaAcesso']=="M"){?>selected<?php }?>>Mesma Via</option>
					<option value="D" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['viaAcesso']=="D"){?>selected<?php }?>>Diferentes Vias</option>
				</select>
			</div>
			
			<div class="col-md-3">
				<h3>Técnica Utilizada</h3>
				<select name="TecnicaUtilizada[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control">
					<option value="C" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['TecnicaUtilizada']=="C"){?>selected<?php }?>>Convencional</option>
					<option value="V" <?php if ($_smarty_tpl->tpl_vars['Guia']->value['TecnicaUtilizada']=="V"){?>selected<?php }?>>Videolaparoscopia</option>
				</select>
			</div>
			<div class="col-md-3">
				<h3>Redução/Acréscimo</h3>
				<input type="number" name="reducaoAcrescimo[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['reducaoAcrescimo'];?>
" value="0" readonly>
			</div>
	
			<div class="col-md-3">
				<h3>Valor Unitário</h3>
				<input type="text" name="valorUnitario[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['valorUnitario'];?>
">
			</div>
		</div>
		<?php } ?>
		
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
		function func(){
			var numero = parseInt($('#procedimentos').val());
			numero = numero +1;
			document.getElementById("procedimentos").value = numero;
			
			$('#place').append('<hr />');
			$('#place').append('<label>Procedimento '+numero+'</label>');
			$('#place').append('<div class="row">');
			$('#place').append('	<div class="col-md-3"><h3>Caráter Atendimento</h3><select name="caraterAtendimento['+numero+']" class="form-control"><option value="1">Eletivo</option><option value="2">Urgência/Emergência</option></select></div>');
			$('#place').append('	<div class="col-md-3"><h3>Tipo Atendimento</h3><select name="tipoAtendimento['+numero+']" class="form-control"><option value="01">Remoção</option><option value="02">Pequena Cirurgia</option><option value="03" selected>Terapias</option><option value="04">Consulta</option><option value="05">Exames</option><option value="06">Atendimento Domiciliar</option><option value="07">SADT Internado</option><option value="08">Quimioterapia</option><option value="09">Radioterapia</option><option value="10">Terapia Renal Substitutiva (TRS)</option></select></div>');
			$('#place').append('	<div class="col-md-3"><h3>Ind. de Acidente</h3><select name="indicacaoAcidente['+numero+']" class="form-control"><option value="0">Acidente ou doença relacionada a trabalho</option><option value="1">Acidente ou doença relacionada a transito</option><option value="2">Outros</option></select></div>');
			$('#place').append('	<div class="col-md-3"><h3>Data de Execução</h3><input type="text" id="data'+numero+'" name="dataExecucao['+numero+']" class="form-control"></div>');
			$('#place').append('</div>');
			$('#place').append('<div class="row">');
			$('#place').append('	<div class="col-md-2"><h3>Hora Inicial</h3><input type="text" id="hora1'+numero+'" name="horaInicial['+numero+']" class="form-control"></div>');
			$('#place').append('	<div class="col-md-2"><h3>Hora Final</h3><input type="text" id="hora2'+numero+'" name="horaFinal['+numero+']" class="form-control"></div>');
			$('#place').append('	<div class="col-md-4"><h3>Codigo Tabela</h3><input type="text" name="codigoTabela['+numero+']" class="form-control" value="22" readonly></div>');			
			$('#place').append('	<div class="col-md-4"><h3>Codigo Procedimento</h3><input type="text" name="codigoProcedimento['+numero+']" class="form-control"></div>');
			$('#place').append('</div>');
			$('#place').append('<div class="row">');
			$('#place').append('	<div class="col-md-8"><h3>Descrição Procedimento</h3><input type="text" name="descricaoProcedimento['+numero+']" class="form-control"></div>');
			$('#place').append('	<div class="col-md-4"><h3>Quantidade Executada</h3><input type="text" name="quantidadeExecutada['+numero+']" class="form-control"></div>');
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
	</script>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>