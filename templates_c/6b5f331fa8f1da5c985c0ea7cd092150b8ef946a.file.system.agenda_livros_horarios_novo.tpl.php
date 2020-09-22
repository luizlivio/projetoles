<?php /* Smarty version Smarty-3.1.13, created on 2019-07-01 04:07:58
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_livros_horarios_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225145cebe4a02f9f32-64195244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5f331fa8f1da5c985c0ea7cd092150b8ef946a' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_livros_horarios_novo.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225145cebe4a02f9f32-64195244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cebe4a053e259_04430690',
  'variables' => 
  array (
    'PATH' => 0,
    'livroid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cebe4a053e259_04430690')) {function content_5cebe4a053e259_04430690($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Criação de Horários</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/novoHorario/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">
		
		<label>Preencha os dados para criação dos horários</label>
        <div class="row">
			<div class="col-md-3">
				<h3>Data Inicial</h3>
				<input type="text" name="datainicial" id="data" class="form-control">
			</div>
			<div class="col-md-3">
				<h3>Data Final</h3>
				<input type="text" name="datafinal" id="data2" class="form-control">
			</div>
			<div class="col-md-3">
				<h3>Hora Inicial</h3>
				<input type="text" name="horainicial" id="hora" class="form-control">
			</div>
			<div class="col-md-3">
				<h3>Hora Final</h3>
				<input type="text" name="horafinal" id="hora2" class="form-control">
			</div>
		</div>
		
		<hr/>
		
		<div class="row">
			<div class="col-md-6">
				<h3>Intervalo entre horários (em minutos)</h3></td>
				<td><input type="number" name="intervalo" id="intervalo" class="form-control"></td>
			</div>
			<div class="col-md-6">
				<h3>Quantidade de Pacientes por Horário</h3>
				<input type="number" name="pacientes" class="form-control" value="1">
			</div>
		</div>
		
		<hr/>
		
		<div class="row">
			<div class="col-md-12">
				<h3>Dias da Semana:</h3>
				<div class="form-group">
					<table class="table table-hover table-stripped">
						<tr>
							<td><label><input type="checkbox" name="optionsegunda" value="1"> Segunda-Feira</label></td>
							<td></td>
							<td><label><input type="checkbox" name="optionterca" value="1"> Terça-Feira</label></td>
							<td></td>
							<td><label><input type="checkbox" name="optionquarta" value="1"> Quarta-Feira</label></td>
							<td></td>
							<td><label><input type="checkbox" name="optionquinta" value="1"> Quinta-Feira</label></td>
							<td></td>
							<td><label><input type="checkbox" name="optionsexta" value="1"> Sexta-Feira</label></td>
							<td></td>
						</tr>
						<tr>
							<td><label><input type="checkbox" name="optionsabado" value="1"> Sábado</label></td>
							<td></td>
							<td><label><input type="checkbox" name="optiondomingo" value="1"> Domingo</label></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
		
					<button type="submit" class="btn btn-default">Gerar</button>		

					</form>		
				</div>
			</div>
		</div>
		
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>