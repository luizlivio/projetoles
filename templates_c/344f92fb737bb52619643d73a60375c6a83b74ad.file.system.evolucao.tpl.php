<?php /* Smarty version Smarty-3.1.13, created on 2020-03-15 01:51:55
         compiled from "engine\view\InfoPanel\pages\Fila_Atendimento\system.evolucao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212345cd0075a30e3a7-46296075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '344f92fb737bb52619643d73a60375c6a83b74ad' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Fila_Atendimento\\system.evolucao.tpl',
      1 => 1584247912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212345cd0075a30e3a7-46296075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd0075a429982_00789232',
  'variables' => 
  array (
    'Anamnese' => 0,
    'Ana' => 0,
    'horreqid' => 0,
    'Evolucoes' => 0,
    'Evolucao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0075a429982_00789232')) {function content_5cd0075a429982_00789232($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Ana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Ana']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Anamnese']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Ana']->key => $_smarty_tpl->tpl_vars['Ana']->value){
$_smarty_tpl->tpl_vars['Ana']->_loop = true;
?><?php } ?>

<?php  $_smarty_tpl->tpl_vars['Ana'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Ana']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Anamnese']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Ana']->key => $_smarty_tpl->tpl_vars['Ana']->value){
$_smarty_tpl->tpl_vars['Ana']->_loop = true;
?>
<div class="step">
	<h1>Ficha do Atendimento</h1>
	<div><a href="/info/filaatendimento/novaavaliacao/<?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
/<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
" class="btn btn-sm btn-warning">Nova Avaliação</a><?php if ($_smarty_tpl->tpl_vars['Ana']->value['Area']!="Ortopedia"&&$_smarty_tpl->tpl_vars['Ana']->value['Area']!="Uroginecologia"){?></div><?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['Ana']->value['Area']=="Ortopedia"||$_smarty_tpl->tpl_vars['Ana']->value['Area']=="Uroginecologia"){?>
	<a href="/info/filaatendimento/<?php if ($_smarty_tpl->tpl_vars['Ana']->value['Area']=="Ortopedia"){?>editaavaliacao<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Area']=="Uroginecologia"){?>editaavaliacao_uro<?php }?>/<?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
/<?php if ($_smarty_tpl->tpl_vars['horreqid']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
<?php }else{ ?>1<?php }?>/<?php echo $_smarty_tpl->tpl_vars['Ana']->value['FisioId'];?>
" class="btn btn-sm btn-default">Editar Avaliação</a></div>
	<div class="row">
		<div class="col-md-1">
			<h3>Id</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
</label>
		</div>

		<div class="col-md-6">
			<h3>Nome</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['NomePaciente'];?>
</label>
		</div>
		<div class="col-md-3">
			<h3>Classificação da Dor</h3>
			<label><?php if ($_smarty_tpl->tpl_vars['Ana']->value['Dor']==0){?>SEM DOR<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Dor']>0&&$_smarty_tpl->tpl_vars['Ana']->value['Dor']<=2){?>DOR LEVE<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Dor']>2&&$_smarty_tpl->tpl_vars['Ana']->value['Dor']<=7){?>DOR MODERADA<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Dor']>7&&$_smarty_tpl->tpl_vars['Ana']->value['Dor']<=10){?>DOR FORTE<?php }?></label>
		</div>

		<div class="col-md-2">
			<h3>Tempo</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Tempo'];?>
 <?php echo $_smarty_tpl->tpl_vars['Ana']->value['Duracao'];?>
</label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<h3>Área</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Area'];?>
</label>
		</div>
		<div class="col-md-6">
			<h3>Regiao/Diagnostico</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['RegiaoDiagnostico'];?>
</label>
		</div>
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['Ana']->value['raiox']==1||$_smarty_tpl->tpl_vars['Ana']->value['usg']==1||$_smarty_tpl->tpl_vars['Ana']->value['ressonancia']==1){?>
	<div class="row">
		<div class="col-md-12">
			<h3>Exames</h3>
			<label><?php if ($_smarty_tpl->tpl_vars['Ana']->value['raiox']==1){?>Raio-X - <?php echo $_smarty_tpl->tpl_vars['Ana']->value['raioxobservacao'];?>
<?php }?></label>
			<label><?php if ($_smarty_tpl->tpl_vars['Ana']->value['usg']==1){?>USG - <?php echo $_smarty_tpl->tpl_vars['Ana']->value['usgobservacao'];?>
<?php }?></label>
			<label><?php if ($_smarty_tpl->tpl_vars['Ana']->value['ressonancia']==1){?>Ressonância - <?php echo $_smarty_tpl->tpl_vars['Ana']->value['ressonanciaobservacao'];?>
<?php }?></label>
		</div>
	</div>
	<?php }?>
	
	<div class="row">
		<div class="col-md-12">
			<h3>Observações</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Observacoes'];?>
</label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<h3>Avaliado por</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Profissional'];?>
</label>
		</div>
	</div>
	<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Area']=="Cervicocraniomandibular"){?>
		<div class="row">
			<div class="col-md-1">
				<h3>Id</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
</label>
			</div>
			<div class="col-md-6">
				<h3>Nome</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['NomePaciente'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Indicação Clínica</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmindicacao'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Cirurgião Dentista</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmdentista'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>HMA</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmhma'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Queixas Frequentes</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmqueixas'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Escala de Dor</h3>
				<label><?php if ($_smarty_tpl->tpl_vars['Ana']->value['Dor']==0){?>SEM DOR<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Dor']>0&&$_smarty_tpl->tpl_vars['Ana']->value['Dor']<=2){?>DOR LEVE<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Dor']>2&&$_smarty_tpl->tpl_vars['Ana']->value['Dor']<=7){?>DOR MODERADA<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Dor']>7&&$_smarty_tpl->tpl_vars['Ana']->value['Dor']<=10){?>DOR FORTE<?php }?></label>
			</div>
			<div class="col-md-3">
				<h3>Patologias Associadas</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmpatologias'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Implantes Metálicos</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmimplantes'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Marca-passo?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmmarcapasso'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Doença Respiratória?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmrespiratoria'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Osteoporoseartrose</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmosteoporose'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Alterações Hormonais?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmhormonios'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Ansiedade/Depressão?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmansiedade'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Cirurgia</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmcirurgia'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Medicação em Uso</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmmedicacoes'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Exames Complementares</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmexames'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Zumbido no Ouvido</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmzumbido'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Cefaléia</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmcefaleia'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Hábitos Orais</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmhabitos'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Alterações Oclusais</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmalteracaoes'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Apertamento?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmapertamento'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Bruxismo de Vigília?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmbruxismo'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Bruxismo Noturno</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmnoturno'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Hipermobilidade Articular</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmhipermobilidade'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Hipomobilidade Articular</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmhipomobilidade'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Desvio</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmdesvio'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Deflexão</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmdeflexao'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Sem alterações</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmsemalteracoes'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Posicionamento Cervical</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmposicionamento'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Cintura Escapular</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmcintura'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Postura</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmpostura'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Palpação e Ausculta da ATM</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmpalpacao'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Palpação Muscular</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmmuscular'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Presença de Ponto de Gatilho</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmponto'];?>
</label>
			</div>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Area']=="PersonalStudio"){?>
		<div class="row">
			<div class="col-md-1">
				<h3>Id</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
</label>
			</div>
			<div class="col-md-6">
				<h3>Nome</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['NomePaciente'];?>
</label>
			</div>
			<div class="col-md-6">
				<h3>Sinais Vitais</h3>
				<label>FC: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiofc'];?>
 // SatO2 (em %): <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiosato2'];?>
 // PA (em mmHg): <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiopa'];?>
</label>
			</div>
			<div class="col-md-6">
				<h3>Sente Dor Ao realizar Alguma Atividade?</h3>
				<label><?php if ($_smarty_tpl->tpl_vars['Ana']->value['personalstudiodor']=="SIM"){?>SIM (<?php if ($_smarty_tpl->tpl_vars['Ana']->value['personalstudiodoronde']=="Outro"){?><?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiooutrodorqual'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmdentista'];?>
<?php }?>)<?php }else{ ?>NÃO<?php }?></label>
			</div>
			<div class="col-md-5">
				<h3>Possui ?? ortopédica?</h3>
				<label><?php if ($_smarty_tpl->tpl_vars['Ana']->value['personalstudioortopedica']=="SIM"){?>SIM (<?php if ($_smarty_tpl->tpl_vars['Ana']->value['personalstudioortopedicaonde']=="Outro"){?><?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiooutroortopedicaqual'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['Ana']->value['ccmdentista'];?>
<?php }?>)<?php }else{ ?>NÃO<?php }?></label>
			</div>
			<div class="col-md-7">
				<h3>Flexibilidade Posterior Coxa - 3ºDedo/Solo</h3>
				<label>Direita: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudioflexibilidaded'];?>
 // Esquerda: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudioflexibilidadee'];?>
</label>
			</div>
			<div class="col-md-5">
				<h3>Mobilidade Tornozelo</h3>
				<label>Direita: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiomobilidaded'];?>
 // Esquerda: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiomobilidadee'];?>
</label>
			</div>
			<div class="col-md-5">
				<h3>Single HOP Test</h3>
				<label>Direita: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiosingled'];?>
 // Esquerda: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiosinglee'];?>
</label>
			</div>
			<div class="col-md-5">
				<h3>Double HOP Test</h3>
				<label>Direita: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiodoubled'];?>
 // Esquerda: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiodoublee'];?>
</label>
			</div>
			<div class="col-md-7">
				<h3>Y test</h3>
				<label>Direita: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudioypernad'];?>
 // Esquerda: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudioypernae'];?>
 // Diferença: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudioydiferenca'];?>
</label>
			</div>
			<div class="col-md-5">
				<h3>Descida Unipodal (Valgo Dinâmico)</h3>
				<label>Direita: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiounipodald'];?>
 // Esquerda: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudiounipodale'];?>
</label>
			</div>
			<div class="col-md-5">
				<h3>Teste Endurance Cintura Escapular</h3>
				<label>Tempo: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudioendurancetempo'];?>
 // Repetições: <?php echo $_smarty_tpl->tpl_vars['Ana']->value['personalstudioendurancerepeticoes'];?>
</label>
			</div>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Area']=="Uroginecologia"){?>
		<div class="row">
			<div class="col-md-1">
				<h3>Id</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
</label>
			</div>

			<div class="col-md-6">
				<h3>Nome</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['NomePaciente'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Patologia</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['patologiaurogineco'];?>
</label>
			</div>
			<div class="col-md-2">
				<h3>Sintomas</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['sintomasurogineco'];?>
</label>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<h3>Área</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Area'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Tempo dos Sintomas</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Tempo'];?>
 <?php echo $_smarty_tpl->tpl_vars['Ana']->value['Duracao'];?>
</label>
			</div>
			
			<div class="col-md-3">
				<h3>Intensidade</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Complexidade'];?>
</label>
			</div>
			
			<div class="col-md-3">
				<h3>Tratamento</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['tratamentourogineco'];?>
</label>
			</div>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Area']=="Respiratoria"){?>
		<div class="row">
			<div class="col-md-1">
				<h3>Id</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
</label>
			</div>

			<div class="col-md-6">
				<h3>Nome</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['NomePaciente'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Diagnóstico</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['RegiaoDiagnostico'];?>
</label>
			</div>
			<div class="col-md-2">
				<h3>Tosse?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['tosse'];?>
 <?php if ($_smarty_tpl->tpl_vars['Ana']->value['tosse']=="SIM"){?>(<?php echo $_smarty_tpl->tpl_vars['Ana']->value['tossetipo'];?>
)<?php }?></label>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<h3>Dispnéia</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['dispneia'];?>
 <?php if ($_smarty_tpl->tpl_vars['Ana']->value['dispneia']=="SIM"){?>(<?php echo $_smarty_tpl->tpl_vars['Ana']->value['dispneiatipo'];?>
)<?php }?></label>
			</div>
			
			<div class="col-md-3">
				<h3>Medicações</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['medicacoesrespiratoria'];?>
</label>
			</div>
			
			<div class="col-md-3">
				<h3>SatO2</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['sato2respiratoria'];?>
</label>
			</div>
			
			<div class="col-md-3">
				<h3>Auscultas</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['auscultas'];?>
</label>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<h3>Conduta na Avaliação</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['condutarespiratoria'];?>
</label>
			</div>
			
			<div class="col-md-8">
				<h3>Avaliado por</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Profissional'];?>
</label>
			</div>
		</div>
		
		<div class="row">			
			<div class="col-md-12">
				<h3>Observações</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Observacoes'];?>
</label>
			</div>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Area']=="Neurologia"){?>
		<div class="row">
			<div class="col-md-1">
				<h3>Id</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
</label>
			</div>

			<div class="col-md-6">
				<h3>Nome</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['NomePaciente'];?>
</label>
			</div>
			<div class="col-md-5">
				<h3>Diagnóstico</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['RegiaoDiagnostico'];?>
</label>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<h3>Principal Membro Acometido</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['membroneuro'];?>
</label>
			</div>

			<div class="col-md-4">
				<h3>Locomoção</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['locomocaoneuro'];?>
</label>
			</div>
			<div class="col-md-4">
				<h3>Funcionalidade</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['funcionalidadeneuro'];?>
</label>
			</div>
		</div>
		
		<div class="row">	
			<div class="col-md-4">
				<h3>Deficit de Equilíbrio</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['deficitneuro'];?>
</label>
			</div>
			<div class="col-md-4">
				<h3>Tempo de Patologia</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Tempo'];?>
 <?php echo $_smarty_tpl->tpl_vars['Ana']->value['Duracao'];?>
</label>
			</div>		
			<div class="col-md-8">
				<h3>Observaçoes</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Observacoes'];?>
</label>
			</div>
			<div class="col-md-8">
				<h3>Avaliado por</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Profissional'];?>
</label>
			</div>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Area']=="PosAlta"){?>
		<div class="row">
			<div class="col-md-1">
				<h3>Id</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
</label>
			</div>

			<div class="col-md-6">
				<h3>Nome</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['NomePaciente'];?>
</label>
			</div>
			<div class="col-md-5">
				<h3>Hipertenso</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['posaltahipertenso'];?>
</label>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<h3>Faz uso de Medicamento?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['posaltamedicamento'];?>
 <?php if ($_smarty_tpl->tpl_vars['Ana']->value['posaltamedicamento']=="SIM"){?>(<?php echo $_smarty_tpl->tpl_vars['Ana']->value['posaltaqualmedicamento'];?>
)<?php }?></label>
			</div>

			<div class="col-md-4">
				<h3>Diabetes?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['posaltadiabetes'];?>
</label>
			</div>
			<div class="col-md-4">
				<h3>Já teve AVC?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['posaltaavc'];?>
</label>
			</div>
		</div>
		
		<div class="row">	
			<div class="col-md-4">
				<h3>Bronquite</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['posaltabronquite'];?>
</label>
			</div>
			<div class="col-md-4">
				<h3>É gestante?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['posaltagestante'];?>
 <?php if ($_smarty_tpl->tpl_vars['Ana']->value['posaltagestante']=="SIM"){?>(<?php echo $_smarty_tpl->tpl_vars['Ana']->value['posaltatempogestante'];?>
 SEMANAS)<?php }?></label>
			</div>		
			<div class="col-md-4">
				<h3>Possui outra patologia?</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['posaltapatologia'];?>
 <?php if ($_smarty_tpl->tpl_vars['Ana']->value['posaltapatologia']=="SIM"){?>(<?php echo $_smarty_tpl->tpl_vars['Ana']->value['posaltaqualpatologia'];?>
)<?php }?></label>
			</div>
		</div>
		
		<div class="row">	
			<div class="col-md-4">
				<h3>Tempo de Patologia</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Tempo'];?>
 <?php echo $_smarty_tpl->tpl_vars['Ana']->value['Duracao'];?>
</label>
			</div>		
			<div class="col-md-4">
				<h3>Observaçoes</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Observacoes'];?>
</label>
			</div>
			<div class="col-md-4">
				<h3>Avaliado por</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Profissional'];?>
</label>
			</div>
		</div>
	<?php }elseif($_smarty_tpl->tpl_vars['Ana']->value['Area']=="Drenagem"){?>
		<div class="row">
			<div class="col-md-1">
				<h3>Id</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
</label>
			</div>

			<div class="col-md-6">
				<h3>Nome</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['NomePaciente'];?>
</label>
			</div>
			<div class="col-md-5">
				<h3>Diagnóstico</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['RegiaoDiagnostico'];?>
</label>
			</div>
		</div>
		
		<div class="row">	
			<div class="col-md-4">
				<h3>Área</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Area'];?>
</label>
			</div>		
			<div class="col-md-4">
				<h3>Edema</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['edemadrenagem'];?>
</label>
			</div>		
			<div class="col-md-4">
				<h3>Cirurgia Prévia</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['cirurgiasdrenagem'];?>
</label>
			</div>		
			<div class="col-md-8">
				<h3>Avaliado por</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['Ana']->value['Profissional'];?>
</label>
			</div>
		</div>
	<?php }?>
	
	
	<h1>Evolução</h1>
	<div><a href="/info/filaatendimento/novaevolucao/<?php echo $_smarty_tpl->tpl_vars['Ana']->value['PacienteId'];?>
/<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Ana']->value['FisioId'];?>
" class="btn btn-sm btn-primary">Nova Evolução</a></div>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>ID</th>
            <th>Data</th>
			<?php if ($_smarty_tpl->tpl_vars['Ana']->value['Area']=="Drenagem"){?>
				<th>Evolução</th>
			<?php }else{ ?>
				<th>Dor</th>
				<th>Conduta</th>
				<th>Observações</th>
			<?php }?>
			<th>Avaliado Por</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Evolucao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Evolucao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Evolucoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Evolucao']->key => $_smarty_tpl->tpl_vars['Evolucao']->value){
$_smarty_tpl->tpl_vars['Evolucao']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['Evolucao']->value['AvaliacaoId']==$_smarty_tpl->tpl_vars['Ana']->value['FisioId']){?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['Evolucao']->value['EvolucaoID'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Evolucao']->value['Data'],"%d/%m/%Y");?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['Ana']->value['Area']=="Drenagem"){?>
				<td><?php echo $_smarty_tpl->tpl_vars['Evolucao']->value['Observacoes'];?>
</td>
			<?php }else{ ?>
				<td><?php if ($_smarty_tpl->tpl_vars['Evolucao']->value['Tipo']==1){?>SEM DOR<?php }elseif($_smarty_tpl->tpl_vars['Evolucao']->value['Tipo']==2){?>DOR MODERADA <?php if ($_smarty_tpl->tpl_vars['Evolucao']->value['Dor']=='SIM'){?>(DOR COM MOVIMENTAÇÃO LEVE)<?php }?><?php }elseif($_smarty_tpl->tpl_vars['Evolucao']->value['Tipo']==3){?>DOR FORTE <?php if ($_smarty_tpl->tpl_vars['Evolucao']->value['Dor']=='SIM'){?>(DOR EM REPOUSO)<?php }?><?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['Evolucao']->value['Conduta'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['Evolucao']->value['Observacoes'];?>
</td>
			<?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['Evolucao']->value['Profissional'];?>
</td>
		</tr>
		<?php }?>
		<?php } ?>
	</table>
	
	<hr />
</div>
</br>
</br>
<?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>