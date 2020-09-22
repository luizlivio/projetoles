<?php /* Smarty version Smarty-3.1.13, created on 2020-03-16 07:15:47
         compiled from "engine\view\InfoPanel\pages\Fila_Atendimento\system.avaliacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114105cd007ab7dbd29-94600863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba0c5fe89f75661bc5ccfb4ea41d9acf6eada153' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Fila_Atendimento\\system.avaliacao.tpl',
      1 => 1584246553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114105cd007ab7dbd29-94600863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd007ab8304e9_68297594',
  'variables' => 
  array (
    'PATH' => 0,
    'pacienteid' => 0,
    'horreqid' => 0,
    'Profissionais' => 0,
    'Fisioterapeuta' => 0,
    'DadoPaciente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd007ab8304e9_68297594')) {function content_5cd007ab8304e9_68297594($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">//<![CDATA[ 
	$(window).load(function(){

	document.getElementById('raiox').addEventListener('click', function() {
	var value = this.checked;
	var raioxobservacao = document.getElementById('raioxobservacao');

	raioxobservacao.style.display = 'none';

	switch(value) {
	case true: raioxobservacao.style.display = 'block'; break;
	}
	})
	});
</script>

<script type="text/javascript">//<![CDATA[ 
	$(window).load(function(){

	document.getElementById('usg').addEventListener('click', function() {
	var value = this.checked;
	var usgobservacao = document.getElementById('usgobservacao');

	usgobservacao.style.display = 'none';

	switch(value) {
	case true: usgobservacao.style.display = 'block'; break;
	}
	})
	});
</script>

<script type="text/javascript">//<![CDATA[ 
	$(window).load(function(){

	document.getElementById('ressonancia').addEventListener('click', function() {
	var value = this.checked;
	var ressonanciaobservacao = document.getElementById('ressonanciaobservacao');

	ressonanciaobservacao.style.display = 'none';

	switch(value) {
	case true: ressonanciaobservacao.style.display = 'block'; break;
	}
	})
	});
</script>

<div class="step">
	<h1>Avaliação (1ª Vez)</h1>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/filaatendimento/novaAvaliacao" Onsubmit="btn.disabled=true">
        <div class="helper-display-none">
            <input type="text" name="pacienteid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pacienteid']->value;?>
">
			<input type="text" name="horreqid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
">
			<input type="number" id="regioes" name="regioes"  value="1" />
        </div>

		<div class="form-group">
            <label>Área de Atendimento</label>
            <select name="area" id="area" class="form-control">
				<option disabled selected>Selecionar</option>
				<option value="Ortopedia">Ortopedia</option>
				<option value="Drenagem">Drenagem</option>
				<option value="Neurologia">Neurologia</option>
				<option value="Respiratoria">Respiratória</option>
				<option value="Uroginecologia">Uroginecologia</option>
				<option value="PosAlta">Pós Alta</option>
				<option value="Cervicocraniomandibular">Cervicocraniomandibular</option>
				<option value="PersonalStudio">Personal Studio</option>
			</select>
        </div>
		
		<div class="form-group">
            <label id="profissional">Profissional avaliador</label>
            <select name="profissional" class="form-control">
				<option disabled selected>Selecionar</option>
				<?php  $_smarty_tpl->tpl_vars['Fisioterapeuta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fisioterapeuta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Profissionais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fisioterapeuta']->key => $_smarty_tpl->tpl_vars['Fisioterapeuta']->value){
$_smarty_tpl->tpl_vars['Fisioterapeuta']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['Fisioterapeuta']->value['Nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['Fisioterapeuta']->value['Nome'];?>
</option>
				<?php } ?>
			</select>
        </div>

		<div class="form-group helper-display-none" id="ortopedia">
			<div class="form-group">
				<label>Região Corporal</label>
				<select name="regiao" id="regiao" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="Coluna Cervical">Coluna Cervical</option>
					<option value="Coluna Dorsal">Coluna Dorsal</option>
					<option value="Coluna Lombar">Coluna Lombar</option>
					<option value="Joelho">Joelho</option>
					<option value="Cotovelo">Cotovelo</option>
					<option value="Ombro">Ombro</option>
					<option value="Tornozelo">Tornozelo</option>
					<option value="Pé">Pé</option>
					<option value="Perna">Perna</option>
					<option value="Mão">Mão</option>
					<option value="Punho">Punho</option>
					<option value="Face">Face</option>
					<option value="Quadril">Quadril</option>
					<option value="Braco/Antibraco">Braço/Antebraço</option>
					<option value="Tronco">Tronco</option>
					<option value="Abdomen">Abdomen</option>
				</select>
			</div>

			<div class="form-group">
				<label>Diagnóstico</label>
				<select name="diagnostico" id="diagnostico" class="form-control">
				</select>
			</div>
			
			<div id="membro" class="form-group helper-display-none">
				<label>Membro</label>
				<select name="membro" id="membro" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="MD">Direito</option>
					<option value="ME">Esquerdo</option>
					<option value="MD e ME">Direito e Esquerdo</option>
				</select>
			</div>

			<div id="place"></div>

			<a onclick='func()'>Adicionar outra Região</a>
		</div>
		<div class="form-group helper-display-none" id="escalador">
			</br>
			</br>
			<div class="form-group">
				<label>Escala de Dor <span id="demo"></span></label>
				<div class="slidecontainer">
					<input type="range" min="0" max="10" value="0" class="slider" id="myRange">
				</div>
			</div>
			
			<div class="form-group helper-display-none">
				<input type="text" name="tipo" id="tipo" class="form-control" value="0">
			</div>
		</div>

		<div class="helper-display-none" id="personalstudio">
			<div class="form-group">
				<h3>Sinais Vitais</h3>
				<label>FC</label>
				<input type="text" name="personalstudiofc" class="form-control">

				<label>SatO2 (em %)</label>
				<input type="text" name="personalstudiosato2" class="form-control">

				<label>PA (em mmHg)</label>
				<input type="text" name="personalstudiopa" class="form-control">

				<h3>Questionário</h3>
				<label>Sente Dor Ao realizar Alguma Atividade?</label>
				<select name="personalstudiodor" id="personalstudiodor" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="SIM">SIM</option>
					<option value="NAO">NÃO</option>
				</select>

				<div id="personalstudioondedor" class="helper-display-none">
					<label>Onde?</label>
					<select name="personalstudiodoronde" id="personalstudiodoronde" class="form-control">
						<option disabled selected>Selecionar</option>
						<option value="Lombar">Lombar</option>
						<option value="Cervical">Cervical</option>
						<option value="Dorsal">Dorsal</option>
						<option value="Ombro">Ombro</option>
						<option value="Quadril">Quadril</option>
						<option value="Joelho">Joelho</option>
						<option value="Tornozelo">Tornozelo</option>
						<option value="Outro">Outro</option>
					</select>
				</div>

				<div id="personalstudioondedorqual" class="helper-display-none">
					<label>Outro - Qual?</label>
					<input type="text" name="personalstudiooutrodorqual" class="form-control">
				</div>

				<label>Possui ?? ortopédica?</label>
				<select name="personalstudioortopedica" id="personalstudioortopedica" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="SIM">SIM</option>
					<option value="NAO">NÃO</option>
				</select>

				<div id="personalstudioondeortopedica" class="helper-display-none">
					<label>Onde?</label>
					<select name="personalstudioortopedicaonde" id="personalstudioortopedicaonde" class="form-control">
						<option disabled selected>Selecionar</option>
						<option value="Lombar">Lombar</option>
						<option value="Cervical">Cervical</option>
						<option value="Dorsal">Dorsal</option>
						<option value="Ombro">Ombro</option>
						<option value="Quadril">Quadril</option>
						<option value="Joelho">Joelho</option>
						<option value="Tornozelo">Tornozelo</option>
						<option value="Outro">Outro</option>
					</select>
				</div>

				<div id="ondeortopedicaqual" class="helper-display-none">
					<label>Outro - Qual?</label>
					<input type="text" name="personalstudiooutroortopedicaqual" class="form-control">
				</div>

				<h3>Testes Funcionais</h3>
				<label>Flexibilidade Posterior Coxa - 3ºDedo/Solo</label>
				<label>Direita (mm)</label>
				<input type="text" name="personalstudioflexibilidaded" class="form-control">
				<label>Esquerda (mm)</label>
				<input type="text" name="personalstudioflexibilidadee" class="form-control">

				<label>Mobilidade Tornozelo</label>
				<label>Direita (mm)</label>
				<input type="text" name="personalstudiomobilidaded" class="form-control">
				<label>Esquerda (mm)</label>
				<input type="text" name="personalstudiomobilidadee" class="form-control">

				<label>Single HOP Test</label>
				<label>Direita (mm)</label>
				<input type="text" name="personalstudiosingled" class="form-control">
				<label>Esquerda (mm)</label>
				<input type="text" name="personalstudiosinglee" class="form-control">

				<label>Double HOP Test</label>
				<label>Direita (mm)</label>
				<input type="text" name="personalstudiodoubled" class="form-control">
				<label>Esquerda (mm)</label>
				<input type="text" name="personalstudiodoublee" class="form-control">

				<label>Y test</label>
				<label>Perna Direita (cm)</label>
				<input type="text" name="personalstudioypernad" class="form-control">
				<label>Esquerda (cm)</label>
				<input type="text" name="personalstudioypernae" class="form-control">
				<label>Diferença (cm)</label>
				<input type="text" name="personalstudioydiferenca" class="form-control">

				<label>Descida Unipodal (Valgo Dinâmico)</label>
				<label>Direito</label>
				<select name="personalstudiounipodald" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="+">+</option>
					<option value="-">-</option>
				</select>
				<label>Esquerdo</label>
				<select name="personalstudiounipodale" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="+">+</option>
					<option value="-">-</option>
				</select>

				<label>Teste Endurance Cintura Escapular</label>
				<label>Tempo</label>
				<input type="text" name="personalstudioendurancetempo" class="form-control">
				<label>Repetições</label>
				<input type="text" name="personalstudioendurancerepeticoes" class="form-control">
			</div>
		</div>
		<div class="form-group helper-display-none" id="respiratoria">
			<div class="form-group">
				<label>Diagnóstico</label>
				<select name="diagnosticorespiratoria" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="DPOC">DPOC</option>
					<option value="Bronquectasia">Bronquectasia</option>
					<option value="CA Pulmonar">CA Pulmonar</option>
					<option value="Fibrose Pulmonar">Fibrose Pulmonar</option>
					<option value="Pneumonia">Pneumonia</option>
					<option value="Outros">Outros</option>
				</select>
			</div>
		</div>

		<div class="form-group helper-display-none" id="respiratoriaperguntas">
			<div class="form-group">
				<label>Tosse?</label>
				<select name="tosse" id="tosse" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="NAO">Não</option>
					<option value="SIM">Sim</option>
				</select>
			</div>
			
			<div class="form-group helper-display-none" id="tipotossediv">
				<label>Tipo de tosse?</label>
				<select name="tossetipo" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="Produtiva">Produtiva</option>
					<option value="Seca">Seca</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Dispnéia?</label>
				<select name="dispneia" id="dispneia" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="NAO">Não</option>
					<option value="SIM">Sim</option>
				</select>
			</div>
			
			<div class="form-group helper-display-none" id="tipodispneiadiv">
				<label>Tipo de dispnéia?</label>
				<select name="dispneiatipo" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="Em repouso">Em repouso</option>
					<option value="Em leve esforco">Em leve esforço</option>
					<option value="Em esforco Intenso">Em esforço Intenso</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Medicações</label>
				<input type="text" name="medicacoesrespiratoria" class="form-control">
			</div>
			
			<div class="form-group">
				<label>SatO2 (em %)</label>
				<input type="text" name="sato2respiratoria" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Auscultas</label>
				<select name="auscultas" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="MV + sem RA">MV + sem RA</option>
					<option value="MV + com roncos">MV + com roncos</option>
					<option value="MV + com estertores">MV + com estertores</option>
					<option value="MV + diminuída">MV + diminuída</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Conduta</label>
				<select name="condutarespiratoria" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="Manobras de higiene bronquica">Manobras de higiene brônquica</option>
					<option value="Manobras de Reexpansao Pulmonar">Manobras de Reexpansao Pulmonar</option>
					<option value="Exercicios de desinsuflacao  pulmonar">Exercícios de desinsuflação  pulmonar</option>
					<option value="Exercícios Aerobicos">Exercícios Aeróbicos</option>
				</select>
			</div>
		</div>
		
		<div class="form-group helper-display-none" id="posalta">
			<div class="form-group">
				<label>Paciente é hipertenso?</label>
				<select name="posaltahipertenso" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="SIM">SIM</option>
					<option value="NAO">NAO</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Paciente toma algum medicamento?</label>
				<select name="posaltamedicamento" id="posaltamedicamento" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="SIM">SIM</option>
					<option value="NAO">NAO</option>
				</select>
			</div>
			
			<div class="form-group helper-display-none" id="posaltaqualmedicamentodiv">
				<label>Qual medicamento?</label>
				<input type="text" name="posaltaqualmedicamento" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Diabetes?</label>
				<select name="posaltadiabetes" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="SIM">SIM</option>
					<option value="NAO">NAO</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Já teve AVC?</label>
				<select name="posaltaavc" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="SIM">SIM</option>
					<option value="NAO">NAO</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Tem bronquite?</label>
				<select name="posaltabronquite" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="SIM">SIM</option>
					<option value="NAO">NAO</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>É gestante?</label>
				<select name="posaltagestante" id="posaltagestante" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="SIM">SIM</option>
					<option value="NAO">NAO</option>
				</select>
			</div>
			
			<div class="form-group helper-display-none" id="posaltatempogestantediv">
				<label>Tempo de gestação (Semanas)</label>
				<input type="text" name="posaltatempogestante" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Possui alguma outra patologia diferente?</label>
				<select name="posaltapatologia" id="posaltapatologia" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="SIM">SIM</option>
					<option value="NAO">NAO</option>
				</select>
			</div>
			
			<div class="form-group helper-display-none" id="posaltaqualpatologiadiv">
				<label>Qual?</label>
				<input type="text" name="posaltaqualpatologia" class="form-control">
			</div>
		</div>
		
		<div class="form-group helper-display-none" id="cervicocraniomandibular">
			<div class="form-group">
				<label>Indicação Clínica</label>
				<input type="text" name="ccmindicacao" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Cirurgião Dentista</label>
				<input type="text" name="ccmdentista" class="form-control">
			</div>
			
			<div class="form-group">
				<label>HMA</label>
				<textarea name="ccmhma" class="form-control"></textarea>
			</div>
			
			<div class="form-group">
				<label>Queixas Frequentes</label>
				<textarea name="ccmqueixas" class="form-control"></textarea>
			</div>
			
			<div class="form-group">
				<label>Patologias Associadas</label>
				<select  multiple="multiple" name="ccmpatologias[]" id="ccmpatologias" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="HAS">HAS</option>
					<option value="DM">DM</option>
					<option value="Tumores">Tumores</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Implantes Metálicos?</label>
				<select name="ccmimplantes" id="ccmimplantes" class="form-control">
					<option disabled  selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			<div class="form-group">
				<label>Marca-passo?</label>
				<select name="ccmmarcapasso" id="ccmmarcapasso" class="form-control">
					<option disabled  selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Doença respiratória?</label>
				<select name="ccmrespiratoria" id="ccmrespiratoria" class="form-control">
					<option disabled  selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Osteoporoseartrose?</label>
				<select name="ccmosteoporose" id="ccmosteoporose" class="form-control">
					<option disabled  selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Alterações Hormonais?</label>
				<select name="ccmhormonios" id="ccmhormonios" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Ansiedade/Depressão?</label>
				<select name="ccmansiedade" id="ccmansiedade" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Cirurgia</label>
				<input type="text" name="ccmcirurgia" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Medicações em Uso</label>
				<input type="text" name="ccmmedicacoes" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Exames Complementares</label>
				<input type="text" name="ccmexames" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Zumbido no ouvido?</label>
				<select name="ccmzumbido" id="ccmzumbido" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Cefaléia?</label>
				<select name="ccmcefaleia" id="ccmcefaleia" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Hábitos Orais</label>
				<select  multiple="multiple" name="ccmhabitos[]" id="ccmhabitos" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Roear Unhas">Roear Unhas</option>
					<option value="Morder Lápis">Morder Lápis</option>
					<option value="Goma de Mascar">Goma de Mascar</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Alterações Oclusivas?</label>
				<select name="ccmzumbido" id="ccmalteracaoes" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Classe I">Classe I</option>
					<option value="Classe II">Classe II</option>
					<option value="Classe III">Classe III</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Apertamento?</label>
				<select name="ccmapertamento" id="ccmapertamento" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Bruxismo de Vigília?</label>
				<select name="ccmbruxismo" id="ccmbruxismo" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Bruxismo Noturno?</label>
				<select name="ccmnoturno" id="ccmnoturno" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Hipermobilidade Articular?</label>
				<select name="ccmhipermobilidade" id="ccmhipermobilidade" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Hipomobilidade Articular?</label>
				<select name="ccmhipomobilidade" id="ccmhipomobilidade" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Desvio?</label>
				<select name="ccmdesvio" id="ccmdesvio" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Deflexão?</label>
				<select name="ccmdeflexao" id="ccmdeflexao" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Sem alterações?</label>
				<select name="ccmsemalteracoes" id="ccmsemalteracoes" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sim">Sim</option>
					<option value="Nao">Não</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Posicionamento cervical</label>
				<input type="text" name="ccmposicionamento" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Cintura Escapular</label>
				<input type="text" name="ccmcintura" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Postura</label>
				<input type="text" name="ccmpostura" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Palpação e Ausculta da ATM</label>
				<select name="ccmpalpacao" id="ccmpalpacao" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sem Presenca de Estalos">Sem Presença de Estalos</option>
					<option value="Estalo em Abertura">Estalo em Abertura</option>
					<option value="Creptacao">Creptação</option>
					<option value="Estalo em fechamento">Estalo em fechamento</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Palpação Muscular</label>
				<select name="ccmmuscular" id="ccmmuscular" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Sem alteracao">Sem alteracao</option>
					<option value="Musculo Tenso">Musculo Tenso</option>
					<option value="Ponto Gatilho">Ponto Gatilho</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Presença de Ponto Gatilho</label>
				<select name="ccmponto" id="ccmponto" class="form-control">
					<option disabled selected value="">Selecionar</option>
					<option value="Cervical">Cervical</option>
					<option value="Trapezio">Trapézio</option>
					<option value="MM Faciais">MM Faciais</option>
					<option value="Romboides">Romboides</option>
					<option value="Esternocleidomastoideu">Esternocleidomastoideu</option>
				</select>
			</div>
		</div>
		
		<div class="form-group helper-display-none" id="uroginecologia">
			<label>Sexo do Paciente</label>
            <select name="sexourogineco" id="sexourogineco" class="form-control">
				<option disabled selected>Selecionar</option>
				<option value="Masculino">Masculino</option>
				<option value="Feminino">Feminino</option>
			</select>
			
			<div class="form-group">
				<label>Patologia</label>
				<select  multiple="multiple" name="patologiaurogineco[]" id="patologiaurogineco" class="form-control">
				</select>
			</div>
			
			<div class="form-group">
				<label>Sintomas</label>
				<select  multiple="multiple" name="sintomasurogineco[]" id="sintomasurogineco" class="form-control">
				</select>
			</div>
		</div>
		
		<div class="form-group helper-display-none" id="neurologia">
			<div class="form-group">
				<label>Diagnóstico</label>
				<select name="diagnosticoneuro" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="AVC">AVC</option>
					<option value="PARKINSON">PARKINSON</option>
					<option value="POS CIRURGIA NEUROLOGICA">PO CIRURGIA NEUROLÓGICA</option>
					<option value="PARALISIA FACIAL">PARALISIA FACIAL</option>
					<option value="ESCLEROSE MULTIPLA">ESCLEROSE MÚLTIPLA</option>
					<option value="Outros">Outros</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Principal Membro Acometido</label>
				<select name="membroneuro" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="MSD">MSD</option>
					<option value="MSE">MSE</option>
					<option value="MMSS">MMSS</option>
					<option value="MID">MID</option>
					<option value="MIE">MIE</option>
					<option value="MMII">MMII</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Locomoção</label>
				<select name="locomocaoneuro" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="Cadeirante">Cadeirante</option>
					<option value="Usa auxilio para marcha (andador, muleta ou bengala)">Usa auxilio para marcha (andador, muleta ou bengala)</option>
					<option value="Deambula">Deambula</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Funcionalidade</label>
				<select name="funcionalidadeneuro" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="Sem dependencia">Sem dependência</option>
					<option value="Parcialmente Dependente">Parcialmente Dependente</option>
					<option value="Totalmente Dependente">Totalmente Dependente</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Deficit de Equilíbrio</label>
				<select name="deficitneuro" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="SIM">SIM</option>
					<option value="NAO">NAO</option>
				</select>
			</div>
		</div>
		
		<div class="form-group helper-display-none" id="drenagem">
			<div class="form-group">
				<label>Edema</label>
				<select name="edemadrenagem" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="Leve">Leve</option>
					<option value="Moderado">Moderado</option>
					<option value="Intenso">Intenso</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Diagnóstico</label>
				<select name="diagnosticodrenagem" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="Disturbio Veno-Linfatico">Disturbio Veno-Linfático</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Cirurgias Prévias</label>
				<input type="text" name="cirurgiasdrenagem" class="form-control">
			</div>
		</div>
		
		<div class="form-group helper-display-none" id="geraldor">
            <div class="row">
				<div class="col-lg-4">
					<label id="perguntador">Quanto tempo de dor?</label>
				</div>
				<div class="col-lg-3">
					<input type="text" name="tempo" class="form-control">
				</div>
				<div class="col-lg-3">
					<select name="duracao" class="form-control">
						<option value="Dias">Dias</option>
						<option value="Meses">Meses</option>
						<option value="Anos">Anos</option>
					</select>
				</div>
			</div>
        </div>
		
		<div class="form-group helper-display-none" id="uroginecologia2">
			<label>Tratamento</label>
            <select  multiple="multiple" name="tratamentourogineco[]" id="tratamentourogineco" class="form-control">
			</select>
		</div>

		<div id="questionarioanacosta" class="helper-display-none">
			<div class="form-group">
            	<label>Internou nos últimos 6 meses pela patologia a ser tratada?</label>
            	<select name="internou" class="form-control">
					<option value="NAO" selected>Não</option>
					<option value="SIM">Sim</option>
				</select>
        	</div>
		
			<div class="form-group">
	            <label>Usou o pronto atendimento nos últimos 6 meses pela patologia a ser tratada?</label>
            	<select name="usoupa" class="form-control">
					<option value="NAO" selected>Não</option>
					<option value="SIM">Sim</option>
				</select>
        	</div>
		
			<div class="form-group">
            	<label>Possui indicação de cirurgia?</label>
            	<select name="cirurgia" class="form-control">
					<option value="NAO" selected>Não</option>
					<option value="SIM">Sim</option>
				</select>
        	</div>
		
			<div class="form-group">
				<label>Ocupação do Paciente</label>
				<input type="text" name="ocupacao" id="ocupacao" class="form-control">
			</div>
		
			<div class="form-group">
	            <label>Grau de Complexidade</label>
            	<select name="complexidade" id="complexidade" class="form-control">
					<option disabled selected>Selecionar</option>
					<option value="1">Baixa Complexidade</option>
					<option value="2">Média Complexidade</option>
					<option value="3">Alta Complexidade</option>
				</select>
        	</div>

			<div id="indicadores" class="form-group">
				<a onclick='funcIndicadores()'>Editar Indicadores</a>
			</div>
		
			<hr />
			<h3>Exames</h3>
		
			<div class="row">
				<div class="col-md-3">
					<label><input type="checkbox" name="raiox" id="raiox" value="1"> Raio-X</label>
				</div>
				<div class="col-md-9">
					<div id="raioxobservacao" class="helper-display-none"><input type="text" name="raioxobservacao" class="form-control"></div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-3">
					<label><input type="checkbox" name="usg" id="usg" value="1"> USG</label>
				</div>
				<div class="col-md-9">
					<div id="usgobservacao" class="helper-display-none"><input type="text" name="usgobservacao" class="form-control"></div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3">
					<label><input type="checkbox" name="ressonancia" id="ressonancia" value="1"> Ressonância</label>
				</div>
				<div class="col-md-9">
					<div id="ressonanciaobservacao" class="helper-display-none"><input type="text" name="ressonanciaobservacao" class="form-control"></div>
				</div>
			</div>
		
			<hr />

			<div class="form-group">
				<label>Médico Solicitante</label>
				<input type="text" name="solicitante" id="solicitante" class="form-control">
			</div>	
		</div>
		
		<div class="form-group">
			<label>Observações</label>
			<textarea name="observacoes" id="Observacoes" class="form-control"><?php echo $_smarty_tpl->tpl_vars['DadoPaciente']->value['Observacoes'];?>
</textarea>
		</div>
		
		<div class="form-group helper-display-none" id="escolhesessoes">
            <label>Número de sessões por semana</label>
            <select name="numero" class="form-control">
				<option value="1 SESSAO POR SEMANA">1 SESSAO POR SEMANA</option>
				<option value="2 SESSOES POR SEMANA" selected>2 SESSOES POR SEMANA</option>
				<option value="3 SESSOES POR SEMANA">3 SESSOES POR SEMANA</option>
				<option value="SESSOES DIARIAS">SESSOES DIARIAS</option>
			</select>
        </div>
		
        <button name="btn" type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>



<script>
$(function() {
	$('#regiao').change(function(){
		var regiao = $('#regiao').val()
		
		if(regiao == "Coluna Cervical" || regiao == "Coluna Dorsal" || regiao == "Coluna Lombar"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="HERNIA DE DISCO">HERNIA DE DISCO</option>');
			$('#diagnostico').append('<option value="DISCOPATIA DEGENERATIVA">DISCOPATIA DEGENERATIVA</option>');
			$('#diagnostico').append('<option value="CONTRATURA MUSCULAR">CONTRATURA MUSCULAR</option>');
			$('#diagnostico').append('<option value="ESCOLIOSE">ESCOLIOSE</option>');
			$('#diagnostico').append('<option value="CIFOSE">CIFOSE</option>');
			$('#diagnostico').append('<option value="HIPERLORDOSE">HIPERLORDOSE</option>');
			$('#diagnostico').append('<option value="ESPONDILOLISTESE">ESPONDILOLISTESE</option>');
			$('#diagnostico').append('<option value="PROTUSAO DISTAL">PROTUSAO DISTAL</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Joelho"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="GONARTROSE">GONARTROSE</option>');
			$('#diagnostico').append('<option value="TENDINITE PATELAR">TENDINITE PATELAR</option>');
			$('#diagnostico').append('<option value="POS OPERATORIO + PRE DE LCA">POS OPERATORIO + PRE DE LCA</option>');
			$('#diagnostico').append('<option value="CONDROPATIA PATELAR">CONDROPATIA PATELAR</option>');
			$('#diagnostico').append('<option value="TENDINITE DE PATA DE GANSO">TENDINITE DE PATA DE GANSO</option>');
			$('#diagnostico').append('<option value="ENTORSE">ENTORSE</option>');
			$('#diagnostico').append('<option value="PO DE PROTESE DE JOELHO">PO DE PROTESE DE JOELHO</option>');
			$('#diagnostico').append('<option value="CISTO DE BAKER">CISTO DE BAKER</option>');
			$('#diagnostico').append('<option value="MENISCO MEDIAL">MENISCO MEDIAL</option>');
			$('#diagnostico').append('<option value="MENISCO LATERAL">MENISCO LATERAL</option>');
			$('#diagnostico').append('<option value="LESAO DE JOELHO">LESAO DE JOELHO</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Cotovelo"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="EPICONDILITE LATERAL">EPICONDILITE LATERAL</option>');
			$('#diagnostico').append('<option value="EPICONDILITE MEDIAL">EPICONDILITE MEDIAL</option>');
			$('#diagnostico').append('<option value="PO FRATURA DE COTOVELO">PO FRATURA DE COTOVELO</option>');
			$('#diagnostico').append('<option value="LUXACAO DE COTOVELO">LUXACAO DE COTOVELO</option>');
			$('#diagnostico').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Ombro"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="TENDINITE DE MANGUITO ROTADOR">TENDINITE DE MANGUITO ROTADOR</option>');
			$('#diagnostico').append('<option value="BURSITE">BURSITE</option>');
			$('#diagnostico').append('<option value="PO DE LESAO DE OMBRO">PO DE LESAO DE OMBRO</option>');
			$('#diagnostico').append('<option value="FROUXIDAO LIGAMENTAR">FROUXIDAO LIGAMENTAR</option>');
			$('#diagnostico').append('<option value="RUPTURA DE TENDAO">RUPTURA DE TENDAO</option>');
			$('#diagnostico').append('<option value="LUXACAO DE OMBRO">LUXACAO DE OMBRO</option>');
			$('#diagnostico').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico').append('<option value="FRATURA DE CLAVICULA">FRATURA DE CLAVICULA</option>');
			$('#diagnostico').append('<option value="CAPSULITE ADESIVA">CAPSULITE ADESIVA</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Tornozelo"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="ENTORSE DE TORNOZELO">ENTORSE DE TORNOZELO</option>');
			$('#diagnostico').append('<option value="TENDINITE DO CALCANIO">TENDINITE DO CALCANIO</option>');
			$('#diagnostico').append('<option value="TENDINITE TALO FIBULAR">TENDINITE TALO FIBULAR</option>');
			$('#diagnostico').append('<option value="PO DE FRATURA DE TORNOZELO">PO DE FRATURA DE TORNOZELO</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Pé"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="FASCITE PLANTAR">FASCITE PLANTAR</option>');
			$('#diagnostico').append('<option value="ESPORAO DE CALCANIO">ESPORAO DE CALCANIO</option>');
			$('#diagnostico').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico').append('<option value="NEUROMA DE NORTON">NEUROMA DE NORTON</option>');
			$('#diagnostico').append('<option value="PE PLANO/PE CAVO">PE PLANO/PE CAVO</option>');
			$('#diagnostico').append('<option value="PO DE HALUX VALGO">PO DE HALUX VALGO</option>');
			$('#diagnostico').append('<option value="METATARSALGIA">METATARSALGIA</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Perna"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="LESAO MUSCULAR POSTERIOR DA COXA">LESAO MUSCULAR POSTERIOR DA COXA</option>');
			$('#diagnostico').append('<option value="LESAO MUSCULAR NO QUADRICEPS">LESAO MUSCULAR NO QUADRICEPS</option>');
			$('#diagnostico').append('<option value="LESAO MUSCULAR DE GASTROCNEMIO">LESAO MUSCULAR DE GASTROCNEMIO</option>');
			$('#diagnostico').append('<option value="TENDINITE DE TIBIAL ANTERIOR">TENDINITE DE TIBIAL ANTERIOR</option>');
			$('#diagnostico').append('<option value="FRATURA POR STRESS DA TIBIA">FRATURA POR STRESS DA TIBIA</option>');
			$('#diagnostico').append('<option value="SD BANDA ILIO-TIBIAL">SD BANDA ILIO-TIBIAL</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Mão"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="FRATURA DE MAO">FRATURA DE MAO</option>');
			$('#diagnostico').append('<option value="DEDO EM GATILHO">DEDO EM GATILHO</option>');
			$('#diagnostico').append('<option value="AMPUTACAO DE DEDO">AMPUTACAO DE DEDO</option>');
			$('#diagnostico').append('<option value="TENDINITE">TENDINITE</option>');
			$('#diagnostico').append('<option value="ARTRITE REUMATOIDE">ARTRITE REUMATOIDE</option>');
			$('#diagnostico').append('<option value="RUPTURA DE TENDAO">RUPTURA DE TENDAO</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Punho"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="TENDINITE DE QUERVAIN">TENDINITE DE QUERVAIN</option>');
			$('#diagnostico').append('<option value="SINDROME DO TUNEL DO CARPO">SINDROME DO TUNEL DO CARPO</option>');
			$('#diagnostico').append('<option value="FRATURA DE PUNHO">FRATURA DE PUNHO</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Face"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="PARALISIA FACIAL DE BELL">PARALISIA FACIAL DE BELL</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Quadril"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="BURSITE TROCANTERICA">BURSITE TROCANTERICA</option>');
			$('#diagnostico').append('<option value="ARTROSE DE QUADRIL">ARTROSE DE QUADRIL</option>');
			$('#diagnostico').append('<option value="POS OPERATORIO PROTESE TOTAL DE QUADRIL">POS OPERATORIO PROTESE TOTAL DE QUADRIL</option>');
			$('#diagnostico').append('<option value="SINDROME DO PIRIFORME">SINDROME DO PIRIFORME</option>');
			$('#diagnostico').append('<option value="TENDINITE DE GLUTEO">TENDINITE DE GLUTEO</option>');
			$('#diagnostico').append('<option value="PO FRATURA DE FEMUR">PO FRATURA DE FEMUR</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Braco/Antibraco"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="PO DE FRATURA">PO DE FRATURA</option>');
			$('#diagnostico').append('<option value="LESAO DE BLEXO BRAQUIAL">LESAO DE BLEXO BRAQUIAL</option>');
			$('#diagnostico').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Tronco"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="FRATURA DE COSTELA">FRATURA DE COSTELA</option>');
			$('#diagnostico').append('<option value="TRAUMA LOCAL">TRAUMA LOCAL</option>');
			$('#diagnostico').append('<option value="DISTENSAO">DISTENSAO</option>');
			$('#diagnostico').append('<option value="CONTRATURA">CONTRATURA</option>');
			$('#diagnostico').append('<option value="NEVRALGIA">NEVRALGIA</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Abdomen"){
			$('#diagnostico').html(" ");
			$('#diagnostico').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico').append('<option value="DISTENSAO">DISTENSAO</option>');
			$('#diagnostico').append('<option value="CONTRATURA">CONTRATURA</option>');
			$('#diagnostico').append('<option value="OUTRO">OUTRO</option>');
		};
	});
});
</script>

<script>
function func(){	
	var numero = parseInt($('#regioes').val());
	
	numero = numero +1;

	document.getElementById('regioes').value = numero;

	document.getElementById('place').innerHTML = document.getElementById('place').innerHTML +"<div class='form-group'><label>Região Corporal</label><select name='regiao"+numero+"'id='regiao"+numero+"' class='form-control'><option disabled selected>Selecionar</option><option value='Coluna Cervical'>Coluna Cervical</option><option value='Coluna Dorsal'>Coluna Dorsal</option><option value='Coluna Lombar'>Coluna Lombar</option><option value='Joelho'>Joelho</option><option value='Cotovelo'>Cotovelo</option><option value='Ombro'>Ombro</option><option value='Tornozelo'>Tornozelo</option><option value='Pé'>Pé</option><option value='Mão'>Mão</option><option value='Punho'>Punho</option><option value='Face'>Face</option><option value='Quadril'>Quadril</option><option value='Braco/Antibraco'>Braco/Antibraco</option></select></div><div class='form-group'><label>Diagnóstico</label><select name='diagnostico"+numero+"' id='diagnostico"+numero+"' class='form-control'></select></div>"

$(function() {
	$('#regiao2').change(function(){
		var regiao2 = $('#regiao2').val()
		
		if(regiao2 == "Coluna Cervical" || regiao2 == "Coluna Dorsal" || regiao2 == "Coluna Lombar"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="HERNIA DE DISCO">HERNIA DE DISCO</option>');
			$('#diagnostico2').append('<option value="DISCOPATIA DEGENERATIVA">DISCOPATIA DEGENERATIVA</option>');
			$('#diagnostico2').append('<option value="CONTRATURA MUSCULAR">CONTRATURA MUSCULAR</option>');
			$('#diagnostico2').append('<option value="ESCOLIOSE">ESCOLIOSE</option>');
			$('#diagnostico2').append('<option value="CIFOSE">CIFOSE</option>');
			$('#diagnostico2').append('<option value="HIPERLORDOSE">HIPERLORDOSE</option>');
			$('#diagnostico2').append('<option value="ESPONDILOLISTESE">ESPONDILOLISTESE</option>');
			$('#diagnostico2').append('<option value="PROTUSAO DISTAL">PROTUSAO DISTAL</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Joelho"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="GONARTROSE">GONARTROSE</option>');
			$('#diagnostico2').append('<option value="TENDINITE PATELAR">TENDINITE PATELAR</option>');
			$('#diagnostico2').append('<option value="POS OPERATORIO + PRE DE LCA">POS OPERATORIO + PRE DE LCA</option>');
			$('#diagnostico2').append('<option value="CONDROPATIA PATELAR">CONDROPATIA PATELAR</option>');
			$('#diagnostico2').append('<option value="TENDINITE DE PATA DE GANSO">TENDINITE DE PATA DE GANSO</option>');
			$('#diagnostico2').append('<option value="ENTORSE">ENTORSE</option>');
			$('#diagnostico2').append('<option value="PO DE PROTESE DE JOELHO">PO DE PROTESE DE JOELHO</option>');
			$('#diagnostico2').append('<option value="CISTO DE BAKER">CISTO DE BAKER</option>');
			$('#diagnostico2').append('<option value="MENISCO MEDIAL">MENISCO MEDIAL</option>');
			$('#diagnostico2').append('<option value="MENISCO LATERAL">MENISCO LATERAL</option>');
			$('#diagnostico2').append('<option value="LESAO DE JOELHO">LESAO DE JOELHO</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Cotovelo"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="EPICONDILITE LATERAL">EPICONDILITE LATERAL</option>');
			$('#diagnostico2').append('<option value="EPICONDILITE MEDIAL">EPICONDILITE MEDIAL</option>');
			$('#diagnostico2').append('<option value="PO FRATURA DE COTOVELO">PO FRATURA DE COTOVELO</option>');
			$('#diagnostico2').append('<option value="LUXACAO DE COTOVELO">LUXACAO DE COTOVELO</option>');
			$('#diagnostico2').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Ombro"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="TENDINITE DE MANGUITO ROTADOR">TENDINITE DE MANGUITO ROTADOR</option>');
			$('#diagnostico2').append('<option value="BURSITE">BURSITE</option>');
			$('#diagnostico2').append('<option value="PO DE LESAO DE OMBRO">PO DE LESAO DE OMBRO</option>');
			$('#diagnostico2').append('<option value="FROUXIDAO LIGAMENTAR">FROUXIDAO LIGAMENTAR</option>');
			$('#diagnostico2').append('<option value="RUPTURA DE TENDAO">RUPTURA DE TENDAO</option>');
			$('#diagnostico2').append('<option value="LUXACAO DE OMBRO">LUXACAO DE OMBRO</option>');
			$('#diagnostico2').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico2').append('<option value="FRATURA DE CLAVICULA">FRATURA DE CLAVICULA</option>');
			$('#diagnostico2').append('<option value="CAPSULITE ADESIVA">CAPSULITE ADESIVA</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Tornozelo"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="ENTORSE DE TORNOZELO">ENTORSE DE TORNOZELO</option>');
			$('#diagnostico2').append('<option value="TENDINITE DO CALCANIO">TENDINITE DO CALCANIO</option>');
			$('#diagnostico2').append('<option value="TENDINITE TALO FIBULAR">TENDINITE TALO FIBULAR</option>');
			$('#diagnostico2').append('<option value="PO DE FRATURA DE TORNOZELO">PO DE FRATURA DE TORNOZELO</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Pé"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="FASCITE PLANTAR">FASCITE PLANTAR</option>');
			$('#diagnostico2').append('<option value="ESPORAO DE CALCANIO">ESPORAO DE CALCANIO</option>');
			$('#diagnostico2').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico2').append('<option value="NEUROMA DE NORTON">NEUROMA DE NORTON</option>');
			$('#diagnostico2').append('<option value="PE PLANO/PE CAVO">PE PLANO/PE CAVO</option>');
			$('#diagnostico2').append('<option value="PO DE HALUX VALGO">PO DE HALUX VALGO</option>');
			$('#diagnostico2').append('<option value="METATARSALGIA">METATARSALGIA</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Perna"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="LESAO MUSCULAR POSTERIOR DA COXA">LESAO MUSCULAR POSTERIOR DA COXA</option>');
			$('#diagnostico2').append('<option value="LESAO MUSCULAR NO QUADRICEPS">LESAO MUSCULAR NO QUADRICEPS</option>');
			$('#diagnostico2').append('<option value="LESAO MUSCULAR DE GASTROCNEMIO">LESAO MUSCULAR DE GASTROCNEMIO</option>');
			$('#diagnostico2').append('<option value="TENDINITE DE TIBIAL ANTERIOR">TENDINITE DE TIBIAL ANTERIOR</option>');
			$('#diagnostico2').append('<option value="FRATURA POR STRESS DA TIBIA">FRATURA POR STRESS DA TIBIA</option>');
			$('#diagnostico2').append('<option value="SD BANDA ILIO-TIBIAL">SD BANDA ILIO-TIBIAL</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Mão"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="FRATURA DE MAO">FRATURA DE MAO</option>');
			$('#diagnostico2').append('<option value="DEDO EM GATILHO">DEDO EM GATILHO</option>');
			$('#diagnostico2').append('<option value="AMPUTACAO DE DEDO">AMPUTACAO DE DEDO</option>');
			$('#diagnostico2').append('<option value="TENDINITE">TENDINITE</option>');
			$('#diagnostico2').append('<option value="ARTRITE REUMATOIDE">ARTRITE REUMATOIDE</option>');
			$('#diagnostico2').append('<option value="RUPTURA DE TENDAO">RUPTURA DE TENDAO</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Punho"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="TENDINITE DE QUERVAIN">TENDINITE DE QUERVAIN</option>');
			$('#diagnostico2').append('<option value="SINDROME DO TUNEL DO CARPO">SINDROME DO TUNEL DO CARPO</option>');
			$('#diagnostico2').append('<option value="FRATURA DE PUNHO">FRATURA DE PUNHO</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Face"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="PARALISIA FACIAL DE BELL">PARALISIA FACIAL DE BELL</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Quadril"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="BURSITE TROCANTERICA">BURSITE TROCANTERICA</option>');
			$('#diagnostico2').append('<option value="ARTROSE DE QUADRIL">ARTROSE DE QUADRIL</option>');
			$('#diagnostico2').append('<option value="POS OPERATORIO PROTESE TOTAL DE QUADRIL">POS OPERATORIO PROTESE TOTAL DE QUADRIL</option>');
			$('#diagnostico2').append('<option value="SINDROME DO PIRIFORME">SINDROME DO PIRIFORME</option>');
			$('#diagnostico2').append('<option value="TENDINITE DE GLUTEO">TENDINITE DE GLUTEO</option>');
			$('#diagnostico2').append('<option value="PO FRATURA DE FEMUR">PO FRATURA DE FEMUR</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao2 == "Braco/Antibraco"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="PO DE FRATURA">PO DE FRATURA</option>');
			$('#diagnostico2').append('<option value="LESAO DE BLEXO BRAQUIAL">LESAO DE BLEXO BRAQUIAL</option>');
			$('#diagnostico2').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Tronco"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="FRATURA DE COSTELA">FRATURA DE COSTELA</option>');
			$('#diagnostico2').append('<option value="TRAUMA LOCAL">TRAUMA LOCAL</option>');
			$('#diagnostico2').append('<option value="DISTENSAO">DISTENSAO</option>');
			$('#diagnostico2').append('<option value="CONTRATURA">CONTRATURA</option>');
			$('#diagnostico2').append('<option value="NEVRALGIA">NEVRALGIA</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Abdomen"){
			$('#diagnostico2').html(" ");
			$('#diagnostico2').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico2').append('<option value="DISTENSAO">DISTENSAO</option>');
			$('#diagnostico2').append('<option value="CONTRATURA">CONTRATURA</option>');
			$('#diagnostico2').append('<option value="OUTRO">OUTRO</option>');
		};
	});
});

$(function() {
	$('#regiao3').change(function(){
		var regiao3 = $('#regiao3').val()
		
		if(regiao3 == "Coluna Cervical" || regiao3 == "Coluna Dorsal" || regiao3 == "Coluna Lombar"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="HERNIA DE DISCO">HERNIA DE DISCO</option>');
			$('#diagnostico3').append('<option value="DISCOPATIA DEGENERATIVA">DISCOPATIA DEGENERATIVA</option>');
			$('#diagnostico3').append('<option value="CONTRATURA MUSCULAR">CONTRATURA MUSCULAR</option>');
			$('#diagnostico3').append('<option value="ESCOLIOSE">ESCOLIOSE</option>');
			$('#diagnostico3').append('<option value="CIFOSE">CIFOSE</option>');
			$('#diagnostico3').append('<option value="HIPERLORDOSE">HIPERLORDOSE</option>');
			$('#diagnostico3').append('<option value="ESPONDILOLISTESE">ESPONDILOLISTESE</option>');
			$('#diagnostico3').append('<option value="PROTUSAO DISTAL">PROTUSAO DISTAL</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Joelho"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="GONARTROSE">GONARTROSE</option>');
			$('#diagnostico3').append('<option value="TENDINITE PATELAR">TENDINITE PATELAR</option>');
			$('#diagnostico3').append('<option value="POS OPERATORIO + PRE DE LCA">POS OPERATORIO + PRE DE LCA</option>');
			$('#diagnostico3').append('<option value="CONDROPATIA PATELAR">CONDROPATIA PATELAR</option>');
			$('#diagnostico3').append('<option value="TENDINITE DE PATA DE GANSO">TENDINITE DE PATA DE GANSO</option>');
			$('#diagnostico3').append('<option value="ENTORSE">ENTORSE</option>');
			$('#diagnostico3').append('<option value="PO DE PROTESE DE JOELHO">PO DE PROTESE DE JOELHO</option>');
			$('#diagnostico3').append('<option value="CISTO DE BAKER">CISTO DE BAKER</option>');
			$('#diagnostico3').append('<option value="MENISCO MEDIAL">MENISCO MEDIAL</option>');
			$('#diagnostico3').append('<option value="MENISCO LATERAL">MENISCO LATERAL</option>');
			$('#diagnostico3').append('<option value="LESAO DE JOELHO">LESAO DE JOELHO</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Cotovelo"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="EPICONDILITE LATERAL">EPICONDILITE LATERAL</option>');
			$('#diagnostico3').append('<option value="EPICONDILITE MEDIAL">EPICONDILITE MEDIAL</option>');
			$('#diagnostico3').append('<option value="PO FRATURA DE COTOVELO">PO FRATURA DE COTOVELO</option>');
			$('#diagnostico3').append('<option value="LUXACAO DE COTOVELO">LUXACAO DE COTOVELO</option>');
			$('#diagnostico3').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Ombro"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="TENDINITE DE MANGUITO ROTADOR">TENDINITE DE MANGUITO ROTADOR</option>');
			$('#diagnostico3').append('<option value="BURSITE">BURSITE</option>');
			$('#diagnostico3').append('<option value="PO DE LESAO DE OMBRO">PO DE LESAO DE OMBRO</option>');
			$('#diagnostico3').append('<option value="FROUXIDAO LIGAMENTAR">FROUXIDAO LIGAMENTAR</option>');
			$('#diagnostico3').append('<option value="RUPTURA DE TENDAO">RUPTURA DE TENDAO</option>');
			$('#diagnostico3').append('<option value="LUXACAO DE OMBRO">LUXACAO DE OMBRO</option>');
			$('#diagnostico3').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico3').append('<option value="FRATURA DE CLAVICULA">FRATURA DE CLAVICULA</option>');
			$('#diagnostico3').append('<option value="CAPSULITE ADESIVA">CAPSULITE ADESIVA</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Tornozelo"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="ENTORSE DE TORNOZELO">ENTORSE DE TORNOZELO</option>');
			$('#diagnostico3').append('<option value="TENDINITE DO CALCANIO">TENDINITE DO CALCANIO</option>');
			$('#diagnostico3').append('<option value="TENDINITE TALO FIBULAR">TENDINITE TALO FIBULAR</option>');
			$('#diagnostico3').append('<option value="PO DE FRATURA DE TORNOZELO">PO DE FRATURA DE TORNOZELO</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Pé"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="FASCITE PLANTAR">FASCITE PLANTAR</option>');
			$('#diagnostico3').append('<option value="ESPORAO DE CALCANIO">ESPORAO DE CALCANIO</option>');
			$('#diagnostico3').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico3').append('<option value="NEUROMA DE NORTON">NEUROMA DE NORTON</option>');
			$('#diagnostico3').append('<option value="PE PLANO/PE CAVO">PE PLANO/PE CAVO</option>');
			$('#diagnostico3').append('<option value="PO DE HALUX VALGO">PO DE HALUX VALGO</option>');
			$('#diagnostico3').append('<option value="METATARSALGIA">METATARSALGIA</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Perna"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="LESAO MUSCULAR POSTERIOR DA COXA">LESAO MUSCULAR POSTERIOR DA COXA</option>');
			$('#diagnostico3').append('<option value="LESAO MUSCULAR NO QUADRICEPS">LESAO MUSCULAR NO QUADRICEPS</option>');
			$('#diagnostico3').append('<option value="LESAO MUSCULAR DE GASTROCNEMIO">LESAO MUSCULAR DE GASTROCNEMIO</option>');
			$('#diagnostico3').append('<option value="TENDINITE DE TIBIAL ANTERIOR">TENDINITE DE TIBIAL ANTERIOR</option>');
			$('#diagnostico3').append('<option value="FRATURA POR STRESS DA TIBIA">FRATURA POR STRESS DA TIBIA</option>');
			$('#diagnostico3').append('<option value="SD BANDA ILIO-TIBIAL">SD BANDA ILIO-TIBIAL</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Mão"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="FRATURA DE MAO">FRATURA DE MAO</option>');
			$('#diagnostico3').append('<option value="DEDO EM GATILHO">DEDO EM GATILHO</option>');
			$('#diagnostico3').append('<option value="AMPUTACAO DE DEDO">AMPUTACAO DE DEDO</option>');
			$('#diagnostico3').append('<option value="TENDINITE">TENDINITE</option>');
			$('#diagnostico3').append('<option value="ARTRITE REUMATOIDE">ARTRITE REUMATOIDE</option>');
			$('#diagnostico3').append('<option value="RUPTURA DE TENDAO">RUPTURA DE TENDAO</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Punho"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="TENDINITE DE QUERVAIN">TENDINITE DE QUERVAIN</option>');
			$('#diagnostico3').append('<option value="SINDROME DO TUNEL DO CARPO">SINDROME DO TUNEL DO CARPO</option>');
			$('#diagnostico3').append('<option value="FRATURA DE PUNHO">FRATURA DE PUNHO</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Face"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="PARALISIA FACIAL DE BELL">PARALISIA FACIAL DE BELL</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Quadril"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="BURSITE TROCANTERICA">BURSITE TROCANTERICA</option>');
			$('#diagnostico3').append('<option value="ARTROSE DE QUADRIL">ARTROSE DE QUADRIL</option>');
			$('#diagnostico3').append('<option value="POS OPERATORIO PROTESE TOTAL DE QUADRIL">POS OPERATORIO PROTESE TOTAL DE QUADRIL</option>');
			$('#diagnostico3').append('<option value="SINDROME DO PIRIFORME">SINDROME DO PIRIFORME</option>');
			$('#diagnostico3').append('<option value="TENDINITE DE GLUTEO">TENDINITE DE GLUTEO</option>');
			$('#diagnostico3').append('<option value="PO FRATURA DE FEMUR">PO FRATURA DE FEMUR</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao3 == "Braco/Antibraco"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="PO DE FRATURA">PO DE FRATURA</option>');
			$('#diagnostico3').append('<option value="LESAO DE BLEXO BRAQUIAL">LESAO DE BLEXO BRAQUIAL</option>');
			$('#diagnostico3').append('<option value="FRATURA">FRATURA</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Tronco"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="FRATURA DE COSTELA">FRATURA DE COSTELA</option>');
			$('#diagnostico3').append('<option value="TRAUMA LOCAL">TRAUMA LOCAL</option>');
			$('#diagnostico3').append('<option value="DISTENSAO">DISTENSAO</option>');
			$('#diagnostico3').append('<option value="CONTRATURA">CONTRATURA</option>');
			$('#diagnostico3').append('<option value="NEVRALGIA">NEVRALGIA</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		}else if(regiao == "Abdomen"){
			$('#diagnostico3').html(" ");
			$('#diagnostico3').append('<option disabled selected>Selecionar</option>');
			$('#diagnostico3').append('<option value="DISTENSAO">DISTENSAO</option>');
			$('#diagnostico3').append('<option value="CONTRATURA">CONTRATURA</option>');
			$('#diagnostico3').append('<option value="OUTRO">OUTRO</option>');
		};
	});
});

}

$(window).load(function(){
 
document.getElementById('area').addEventListener('change', function() {
var value = this.value;
var ortopedia = document.getElementById('ortopedia');
var respiratoria = document.getElementById('respiratoria');
var uroginecologia = document.getElementById('uroginecologia');
var uroginecologia2 = document.getElementById('uroginecologia2');
var neurologia = document.getElementById('neurologia');
var drenagem = document.getElementById('drenagem');
var posalta = document.getElementById('posalta');
var cervicocraniomandibular = document.getElementById('cervicocraniomandibular');
var personalstudio = document.getElementById('personalstudio');
var escalador = document.getElementById('escalador');
var geraldor = document.getElementById('geraldor');
var questionarioanacosta = document.getElementById('questionarioanacosta');
var escolhesessoes = document.getElementById('escolhesessoes');

ortopedia.style.display = 'none';
respiratoria.style.display = 'none';
uroginecologia.style.display = 'none';
uroginecologia2.style.display = 'none';
respiratoriaperguntas.style.display = 'none';
neurologia.style.display = 'none';
drenagem.style.display = 'none';
posalta.style.display = 'none';
cervicocraniomandibular.style.display = 'none';
personalstudio.style.display = 'none';
escalador.style.display = 'none';
geraldor.style.display = 'none';
questionarioanacosta.style.display = 'none';
escolhesessoes.style.display = 'none';

switch(value) {
case 'Ortopedia': ortopedia.style.display = 'block'; $('#perguntador').html('QUANTO TEMPO DE DOR?'); escalador.style.display = 'block'; geraldor.style.display = 'block'; questionarioanacosta.style.display = 'block'; escolhesessoes.style.display = 'block'; break;
case 'Respiratoria': respiratoria.style.display = 'block'; respiratoriaperguntas.style.display = 'block'; $('#perguntador').html('TEMPO DE PATOLOGIA'); geraldor.style.display = 'block'; questionarioanacosta.style.display = 'block'; escolhesessoes.style.display = 'block'; break;
case 'Uroginecologia': uroginecologia.style.display = 'block'; uroginecologia2.style.display = 'block'; $('#perguntador').html('TEMPO DE PATOLOGIA'); geraldor.style.display = 'block'; questionarioanacosta.style.display = 'block'; escolhesessoes.style.display = 'block'; break;
case 'Neurologia': neurologia.style.display = 'block'; $('#perguntador').html('TEMPO DE PATOLOGIA'); geraldor.style.display = 'block'; questionarioanacosta.style.display = 'block'; escolhesessoes.style.display = 'block'; break;
case 'Drenagem': drenagem.style.display = 'block'; $('#perguntador').html('TEMPO DE PATOLOGIA'); geraldor.style.display = 'block'; questionarioanacosta.style.display = 'block'; escolhesessoes.style.display = 'block'; break;
case 'PosAlta': posalta.style.display = 'block'; $('#perguntador').html('TEMPO DE PATOLOGIA'); $('#profissional').html('PROFISSIONAL AVALIADOR'); geraldor.style.display = 'block'; questionarioanacosta.style.display = 'block'; escolhesessoes.style.display = 'block'; break;
case 'Cervicocraniomandibular': cervicocraniomandibular.style.display = 'block'; escalador.style.display = 'block'; $('#perguntador').html('TEMPO DE PATOLOGIA'); $('#profissional').html('PROFISSIONAL AVALIADOR'); geraldor.style.display = 'block'; questionarioanacosta.style.display = 'block'; escolhesessoes.style.display = 'block'; break;
case 'PersonalStudio': personalstudio.style.display = 'block'; break;

}
})

});

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

$(window).load(function(){
 
document.getElementById('posaltamedicamento').addEventListener('change', function() {
var value = this.value;
var posaltaqualmedicamentodiv = document.getElementById('posaltaqualmedicamentodiv');

posaltaqualmedicamentodiv.style.display = 'none';

switch(value) {
case 'SIM': posaltaqualmedicamentodiv.style.display = 'block'; break;

}
})

});

$(window).load(function(){
 
document.getElementById('posaltagestante').addEventListener('change', function() {
var value = this.value;
var posaltatempogestantediv = document.getElementById('posaltatempogestantediv');

posaltatempogestantediv.style.display = 'none';

switch(value) {
case 'SIM': posaltatempogestantediv.style.display = 'block'; break;

}
})

});

$(window).load(function(){
 
document.getElementById('posaltapatologia').addEventListener('change', function() {
var value = this.value;
var posaltaqualpatologiadiv = document.getElementById('posaltaqualpatologiadiv');

posaltaqualpatologiadiv.style.display = 'none';

switch(value) {
case 'SIM': posaltaqualpatologiadiv.style.display = 'block'; break;

}
})

});

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");

slider.oninput = function() {
  if(this.value == 0){output.innerHTML = "- " + this.value + " (SEM DOR)"; document.getElementById("tipo").value = this.value;}
  if(this.value > 0 && this.value <= 2){output.innerHTML = "- " + this.value + " (DOR LEVE)"; document.getElementById("tipo").value = this.value;}
  if(this.value > 2 && this.value <= 7){output.innerHTML = "- " + this.value + " (DOR MODERADA)"; document.getElementById("tipo").value = this.value;}
  if(this.value > 7 && this.value <= 10){output.innerHTML = "- " + this.value + " (DOR INTENSA)"; document.getElementById("tipo").value = this.value;}
}

// With JQuery
$("#ex8").slider({
	tooltip: 'always'
});

$(function() {
	$('#sexourogineco').change(function(){
		var sexourogineco = $('#sexourogineco').val()
		
		if(sexourogineco == "Masculino"){
			$('#patologiaurogineco').html(" ");
			$('#patologiaurogineco').append('<option disabled selected>Selecionar</option>');
			$('#patologiaurogineco').append('<option value="POS PROSTATECTOMIA">POS PROSTATECTOMIA</option>');
			$('#patologiaurogineco').append('<option value="INCONTINENCIA FECAL">INCONTINENCIA FECAL</option>');
			$('#patologiaurogineco').append('<option value="POS OPERATORIO ANURETAL">POS OPERATORIO ANURETAL</option>');
			$('#patologiaurogineco').append('<option value="RETENCAO URINARIA">RETENCAO URINARIA</option>');
			$('#patologiaurogineco').append('<option value="RASPAGEM NA PROSTATA">RASPAGEM NA PROSTATA</option>');
			$('#patologiaurogineco').append('<option value="RETIRADA PARCIAL DA PROSTATA">RETIRADA PARCIAL DA PROSTATA</option>');
			$('#patologiaurogineco').append('<option value="BEXIGA HIPERATIVA">BEXIGA HIPERATIVA</option>');
			
			$('#sintomasurogineco').html(" ");
			$('#sintomasurogineco').append('<option disabled selected>Selecionar</option>');
			$('#sintomasurogineco').append('<option value="PERDA DE URINA">PERDA DE URINA</option>');
			$('#sintomasurogineco').append('<option value="PERDA DE FEZES">PERDA DE FEZES</option>');
			$('#sintomasurogineco').append('<option value="PERDA DE FLATOS">PERDA DE FLATOS</option>');
			$('#sintomasurogineco').append('<option value="CONSTIPACAO">CONSTIPACAO</option>');
			$('#sintomasurogineco').append('<option value="DIARREIA">DIARREIA</option>');
			$('#sintomasurogineco').append('<option value="URGENCIA MICCIONAL">URGENCIA MICCIONAL</option>');
			
			$('#tratamentourogineco').html(" ");
			$('#tratamentourogineco').append('<option disabled selected>Selecionar</option>');
			$('#tratamentourogineco').append('<option value="EXERCICIOS ASSOCIADOS A CONTRACAO PERINEAL">EXERCICIOS ASSOCIADOS A CONTRACAO PERINEAL</option>');
			$('#tratamentourogineco').append('<option value="ELETROESTIMULACAO SACRAL">ELETROESTIMULACAO SACRAL</option>');
			$('#tratamentourogineco').append('<option value="ELETROESTIMULACAO TIBIAL">ELETROESTIMULACAO TIBIAL</option>');
			$('#tratamentourogineco').append('<option value="BIOFEEDBACK">BIOFEEDBACK</option>');
			$('#tratamentourogineco').append('<option value="ELETROESTIMULACAO RETAL">ELETROESTIMULACAO RETAL</option>');
		}else if(sexourogineco == "Feminino"){
			$('#patologiaurogineco').html(" ");
			$('#patologiaurogineco').append('<option disabled selected>Selecionar</option>');
			$('#patologiaurogineco').append('<option value="INCONTINENCIA URINARIA DE ESFORCO">INCONTINENCIA URINARIA DE ESFORCO</option>');
			$('#patologiaurogineco').append('<option value="INCONTINENCIA URINARIA DE URGENCIA">INCONTINENCIA URINARIA DE URGENCIA</option>');
			$('#patologiaurogineco').append('<option value="BEXIGA HIPERATIVA">BEXIGA HIPERATIVA</option>');
			$('#patologiaurogineco').append('<option value="PROLAPSO">PROLAPSO</option>');
			$('#patologiaurogineco').append('<option value="RETENCAO URINARIA">RETENCAO URINARIA</option>');
			$('#patologiaurogineco').append('<option value="DISFUNCAO SEXUAL">DISFUNCAO SEXUAL</option>');
			$('#patologiaurogineco').append('<option value="INCONTINENCIA FECAL">INCONTINENCIA FECAL</option>');
			$('#patologiaurogineco').append('<option value="ENDOMETRIOSE">ENDOMETRIOSE</option>');
			$('#patologiaurogineco').append('<option value="CISTITE INTERSTICIAL">CISTITE INTERSTICIAL</option>');
			$('#patologiaurogineco').append('<option value="DOR PELVICA CRONICA">DOR PELVICA CRONICA</option>');
			
			$('#sintomasurogineco').html(" ");
			$('#sintomasurogineco').append('<option disabled selected>Selecionar</option>');
			$('#sintomasurogineco').append('<option value="PERDA DE URINA">PERDA DE URINA</option>');
			$('#sintomasurogineco').append('<option value="PERDA DE FEZES">PERDA DE FEZES</option>');
			$('#sintomasurogineco').append('<option value="PERDA DE FLATOS">PERDA DE FLATOS</option>');
			$('#sintomasurogineco').append('<option value="CONSTIPACAO">CONSTIPACAO</option>');
			$('#sintomasurogineco').append('<option value="DIARREIA">DIARREIA</option>');
			$('#sintomasurogineco').append('<option value="DOR PELVICA CRONICA">DOR PELVICA CRONICA</option>');
			
			$('#tratamentourogineco').html(" ");
			$('#tratamentourogineco').append('<option disabled selected>Selecionar</option>');
			$('#tratamentourogineco').append('<option value="EXERCICIOS ASSOCIADOS A CONTRACAO PERINEAL">EXERCICIOS ASSOCIADOS A CONTRACAO PERINEAL</option>');
			$('#tratamentourogineco').append('<option value="ELETROESTIMULACAO SACRAL">ELETROESTIMULACAO SACRAL</option>');
			$('#tratamentourogineco').append('<option value="ELETROESTIMULACAO TIBIAL">ELETROESTIMULACAO TIBIAL</option>');
			$('#tratamentourogineco').append('<option value="BIOFEEDBACK">BIOFEEDBACK</option>');
			$('#tratamentourogineco').append('<option value="ELETROESTIMULACAO RETAL">ELETROESTIMULACAO RETAL</option>');
		};
	});
});

function funcIndicadores(){
	document.getElementById('indicadores').innerHTML = '<div class="form-group"><label>Questionário</label><select name="" class="form-control"><option disabled selected>Selecionar</option><option value="1">OSWESTRY</option><option value="2">NECK</option><option value="3">LEFS</option><option value="4">DASH</option><option value="5">SF 36</option></select></div><div class="form-group"><label>EVA</label><input type="text" name="" class="form-control"></div><div class="form-group"><label>DCM</label><input type="text" name="" class="form-control"></div><div class="form-group"><label>Flexibilidade</label><input type="text" name="" class="form-control"></div>'
}

</script>

<script>
  $( function() {
    var cache = {};
    $( "#solicitante" ) .autocomplete({
      minLength: 0,
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/filaatendimento/getDadosSolicitante",  {PesquisaNome : $('#solicitante').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      }
    })
	
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  </script>
  
  <script>
  $( function() {
    var cache = {};
    $( "#ocupacao" ) .autocomplete({
      minLength: 0,
      source: function( request, response ) {
        var term = request.term;
        if ( term in cache ) {
          response( cache[ term ] );
          return;
        }
 
		$.getJSON( "/info/filaatendimento/getOcupacao",  {PesquisaNome : $('#ocupacao').val()}, function( data, status, xhr ) {
          cache[ term ] = data;
          response( data );
        });
		
      }
    })
	
	.autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "</div>" )
        .appendTo( ul );
    };
  } );
  
 
$(window).load(function(){
 
document.getElementById('regiao').addEventListener('change', function() {
var value = this.value;
var membro = document.getElementById('membro');

membro.style.display = 'none';

switch(value) {
case 'Mão': membro.style.display = 'block'; break;
case 'Joelho': membro.style.display = 'block'; break;
case 'Cotovelo': membro.style.display = 'block'; break;
case 'Ombro': membro.style.display = 'block'; break;
case 'Tornozelo': membro.style.display = 'block'; break;
case 'Pé': membro.style.display = 'block'; break;
case 'Punho': membro.style.display = 'block'; break;
case 'Braco/Antibraco': membro.style.display = 'block'; break;

}
})

});

$(window).load(function(){
 
document.getElementById('personalstudiodor').addEventListener('change', function() {
var value = this.value;
var personalstudioondedor = document.getElementById('personalstudioondedor');

personalstudioondedor.style.display = 'none';

switch(value) {
case 'SIM': personalstudioondedor.style.display = 'block'; break;

}
})

});

$(window).load(function(){
 
document.getElementById('personalstudiodoronde').addEventListener('change', function() {
var value = this.value;
var personalstudioondedorqual = document.getElementById('personalstudioondedorqual');

personalstudioondedorqual.style.display = 'none';

switch(value) {
case 'Outro': personalstudioondedorqual.style.display = 'block'; break;

}
})

});

$(window).load(function(){
 
document.getElementById('personalstudioortopedica').addEventListener('change', function() {
var value = this.value;
var personalstudioondeortopedica = document.getElementById('personalstudioondeortopedica');

personalstudioondeortopedica.style.display = 'none';

switch(value) {
case 'SIM': personalstudioondeortopedica.style.display = 'block'; break;

}
})

});

$(window).load(function(){
 
document.getElementById('personalstudioortopedicaonde').addEventListener('change', function() {
var value = this.value;
var ondeortopedicaqual = document.getElementById('ondeortopedicaqual');

ondeortopedicaqual.style.display = 'none';

switch(value) {
case 'Outro': ondeortopedicaqual.style.display = 'block'; break;

}
})

});


  </script>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>