<?php /* Smarty version Smarty-3.1.13, created on 2019-08-02 01:35:06
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_agendamento_sessaonova.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105245cd006711c6775-31099754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '759ed8750a0b78d1603e52b52db39caa3f10b41e' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_agendamento_sessaonova.tpl',
      1 => 1564720503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105245cd006711c6775-31099754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd00671239582_14966337',
  'variables' => 
  array (
    'DadosPaciente' => 0,
    'Livros' => 0,
    'Horas' => 0,
    'Livro' => 0,
    'PATH' => 0,
    'livroid' => 0,
    'dia' => 0,
    'mes' => 0,
    'ano' => 0,
    'horreqid' => 0,
    'DadoPaciente' => 0,
    'ultimasessao' => 0,
    'convenios' => 0,
    'convenio' => 0,
    'Hora' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd00671239582_14966337')) {function content_5cd00671239582_14966337($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
<?php  $_smarty_tpl->tpl_vars['DadoPaciente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DadoPaciente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DadosPaciente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DadoPaciente']->key => $_smarty_tpl->tpl_vars['DadoPaciente']->value){
$_smarty_tpl->tpl_vars['DadoPaciente']->_loop = true;
?><?php } ?>
<?php  $_smarty_tpl->tpl_vars['Livro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Livro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Livro']->key => $_smarty_tpl->tpl_vars['Livro']->value){
$_smarty_tpl->tpl_vars['Livro']->_loop = true;
?><?php } ?>
<?php  $_smarty_tpl->tpl_vars['Hora'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Hora']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Horas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Hora']->key => $_smarty_tpl->tpl_vars['Hora']->value){
$_smarty_tpl->tpl_vars['Hora']->_loop = true;
?><?php } ?>

	<h1>Agendamento de Novas Sessões</h1>
	<h4><?php echo $_smarty_tpl->tpl_vars['Livro']->value['Descricao'];?>
</h4>

	<form method="post" data-toggle="validator" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/novoAgendamentoSessaoNova" Onsubmit="btn.disabled=true">
		
        <div class="helper-display-none">
            <input type="text" name="livroid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">
            <input type="text" name="dia" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
">
			<input type="text" name="mes" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
">
			<input type="text" name="ano" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
">
			<input type="text" name="horreqid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
">
			<input type="text" name="PacienteId" class="form-control" id="PacienteId" value="<?php echo $_smarty_tpl->tpl_vars['DadoPaciente']->value['PacienteId'];?>
">
			<input type="text" name="ultimasessao" id="ultimasessao" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ultimasessao']->value;?>
">
        </div>
	
		<div class="form-group">
			<label>Nome do Paciente</label>
			<input type="text" name="NomePaciente" id="nomepaciente" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DadoPaciente']->value['NomePaciente'];?>
" readonly>
		</div>
		
		<div class="form-group">
			<label>Data de Nascimento</label>
			<input type="text" name="DataNasc" id="data" class="form-control" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['DadoPaciente']->value['DataNasc'],"%d/%m/%Y");?>
" readonly>
		</div>
		
		<div class="form-group">
			<label>Telefone</label>
			<input type="text" name="Telefone" id="telefone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DadoPaciente']->value['Telefone'];?>
" readonly>
		</div>
		
		<div class="form-group">
			<label>Celular</label>
			<input type="text" name="Celular" id="celular" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DadoPaciente']->value['Celular'];?>
" readonly>
		</div>
		
		<div class="form-group">
			<label>Procedimento</label>
			<select name="Procedimento" class="form-control" readonly>
				<option value="">Selecionar</option>
					<option value="<?php echo $_smarty_tpl->tpl_vars['DadoPaciente']->value['Exame'];?>
" Selected><?php echo $_smarty_tpl->tpl_vars['DadoPaciente']->value['Descricao'];?>
</option>
			</select>
		</div>
		
		<div class="form-group">
			<label>Convênio</label>
			<select name="Convenio" class="form-control" id="Convenio" readonly>
				<option value="">Selecionar</option>
					<?php  $_smarty_tpl->tpl_vars['convenio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['convenio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['convenios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['convenio']->key => $_smarty_tpl->tpl_vars['convenio']->value){
$_smarty_tpl->tpl_vars['convenio']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['convenio']->value['ConvenioId'];?>
" <?php if ($_smarty_tpl->tpl_vars['convenio']->value['ConvenioId']==$_smarty_tpl->tpl_vars['DadoPaciente']->value['Convenio']){?>Selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['convenio']->value['Descricao'];?>
</option>
					<?php } ?>
			</select>
		</div>
		
		<hr/>
		
		<h4>Novas Sessões</h4>
		
		<div id="Configuracoes">
			<label>Datas e Horários de Cada Sessão</label>
			<table class='table'>
				<tr>
					<td><label><input type='checkbox' name='optionsegunda' id='optionsegunda' value='1'></label></td>
					<td><label>Segunda</label></td>
					<td></td>
					<td><label><input type='checkbox' name='optionterca' id='optionterca' value='1'></label></td>
        		    <td><label>Terça</label></td>
					<td></td>
					<td><label><input type='checkbox' name='optionquarta' id='optionquarta' value='1'></label></td>
        		    <td><label>Quarta</label></td>
					<td></td>
					<td><label><input type='checkbox' name='optionquinta' id='optionquinta' value='1'></label></td>
        		    <td><label>Quinta</label></td>
					<td></td>
					<td><label><input type='checkbox' name='optionsexta' id='optionsexta' value='1'></label></td>
        		    <td><label>Sexta</label></td>
					<td></td>
					<td><label><input type='checkbox' name='optionsabado' id='optionsabado' value='1'></label></td>
        		    <td><label>Sábado</label></td>
				</tr>
				<tr>
					<td colspan="6"><label>Número de Sessões</label></td>
					<td colspan="6"><label><input type="number" name="quantidade" id="quantidade" class="form-control" value="0"></label></td>
        		    <td colspan="5"><p align="right"><label><a class="btn btn-sm btn-primary" onclick='func()'>Gerar Horários</a></label></p></td>
				</tr>
			</table>			
		</div>
		
		<div id="DatasSessoes">
		
		</div>
		
		<div class="form-group">
			<label>Observações</label>
			<textarea name="Observacoes" id="Observacoes" class="form-control"><?php echo $_smarty_tpl->tpl_vars['DadoPaciente']->value['Observacoes'];?>
</textarea>
		</div>
		
        <button name="btn" type="submit" class="btn btn-default">Salvar</button>

    </form>		
</div>


<script>
function func() {	
	var optionsegunda = $('#optionsegunda:checked').val();
	var optionterca = $('#optionterca:checked').val();
	var optionquarta = $('#optionquarta:checked').val();
	var optionquinta = $('#optionquinta:checked').val();
	var optionsexta = $('#optionsexta:checked').val();
	var optionsabado = $('#optionsabado:checked').val();
	var quantidade = parseInt($('#quantidade').val());
	var ultimasessao = parseInt($('#ultimasessao').val());
	
	var contador = 0;
	var sessao = ultimasessao;
	var texto = "";
	
	while (contador < quantidade){			
		contador++;
		sessao++;
		
		texto += "      <div>";
		texto += "			<div class='row'>";
		texto += "				<div class='col-md-4'>";
		texto += "					<label>Sessão " + sessao + "</label>";
		texto += "				</div>";
		texto += "				<div class='col-md-4 form-group'>";
		texto += "					<select name='DataSessao[" + contador + "]' id='DataSessao" + contador + "' class='form-control' onchange='funcHoras(this.value, " + contador + ", 2);'>"
		texto += "						<option value=''>Selecionar</option>"
		texto += "					</select>"
		texto += "				</div>"
		texto += "				<div class='col-md-4 form-group'>"
		texto += "					<select name='HoraSessao[" + contador + "]' id='HoraSessao" + contador + "' class='form-control'>"
		texto += "						<option value=''>Selecionar</option>"
		texto += "					</select>"
		texto += "				</div>"
		texto += "			</div>";
		texto += "		</div>";
	}
	
	$('#DatasSessoes').html(texto);
	Configuracoes.style.display = 'none';
	funcDatas()
}

function funcDatas() {
	var optionsegunda = $('#optionsegunda:checked').val();
	var optionterca = $('#optionterca:checked').val();
	var optionquarta = $('#optionquarta:checked').val();
	var optionquinta = $('#optionquinta:checked').val();
	var optionsexta = $('#optionsexta:checked').val();
	var optionsabado = $('#optionsabado:checked').val();
	var quantidade = parseInt($('#quantidade').val());
	var ultimasessao = parseInt($('#ultimasessao').val());

	$.getJSON('/info/agenda/getDatasSessoes', {LivroId : "<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
", OptionSegunda : optionsegunda, OptionTerca : optionterca, OptionQuarta : optionquarta, OptionQuinta : optionquinta, OptionSexta : optionsexta, OptionSabado : optionsabado , Dia : <?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
 , Mes : <?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
 , Ano : <?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
}, function(data) {
		var sessoes = quantidade
		
		var contador = 0
			
			while (contador < sessoes){
				contador++;
				$('#DataSessao'+contador).html(" ");
			
					$('#DataSessao'+contador).append('<option disabled selected>Selecionar</option>');
					$.each(data, function(i, item) {
						var select = ""
						if(contador == item.Id){
							select = "selected";
						}
						
						$('#DataSessao'+contador).append('<option value="'+item.Mes+'/'+item.Dia+'/'+item.Ano+'" '+select+'>'+item.Dia+'/'+item.Mes+'/'+item.Ano+' ('+item.DiaDaSemana+')</option>');
					});
				funcHoras($('#DataSessao'+contador).val(), contador, 1);
			}
	});	
}

function funcHoras(DataPesquisa, contador, tipo) {
		var horacodigo = "<?php echo $_smarty_tpl->tpl_vars['Hora']->value['Hora'];?>
";
		horacodigo = horacodigo.replace(":","");
		var a = 0;
		$.getJSON('/info/agenda/getHorasSessoes', {LivroId : "<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
", Data : DataPesquisa}, function(data) {
		
		$('#HoraSessao'+contador).html(" ");
		$('#HoraSessao'+contador).append('<option disabled selected>Selecionar</option>');
		$.each(data, function(i, item) {	
			var horacodigo2 = item.Hora;
			horacodigo2 = horacodigo2.replace(":","");
			
			
			if((horacodigo <= horacodigo2 && tipo == 1) && (a == 0)){
				select2 = "selected";
				a = 1;
			}else{
				select2 = "";
			}
			
			$('#HoraSessao'+contador).append('<option value="'+item.Hora+'" '+select2+'>'+item.Hora+'</option>');
		});
		});
}

function funcTeste(DataPesquisa) {
	alert(DataPesquisa);
}
</script>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>