<?php /* Smarty version Smarty-3.1.13, created on 2019-07-31 13:12:17
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_livros_horarios_bloqueio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192965d41bde1c77350-97295872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f404e8ae33b43f3bb25718852697117f278801' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_livros_horarios_bloqueio.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192965d41bde1c77350-97295872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'livroid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d41bde1ef4515_79059003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d41bde1ef4515_79059003')) {function content_5d41bde1ef4515_79059003($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Criação de Horários</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/bloqueiaHorario/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">
		
		<label>Preencha os dados para criação dos horários</label>
        <table class="table table-hover table-stripped">
			<tr>
				<td><h3>Data Inicial</h3></td>
				<td><input type="text" name="datainicial" id="data" class="form-control"></td>
				<td></td>
				<td></td>
				<td></td>
				<td><h3>Data Final</h3></td>
				<td><input type="text" name="datafinal" id="data2" class="form-control"></td>
			</tr>
        </table>
		
		<table class="table table-hover table-stripped">
			<tr>
				<td><h3>Hora Inicial</h3></td>
				<td><input type="text" name="horainicial" id="hora" class="form-control"></td>
				<td></td>
				<td></td>
				<td></td>
				<td><h3>Hora Final</h3></td>
				<td><input type="text" name="horafinal" id="hora2" class="form-control"></td>
			</tr>
        </table>
		
		<h3>Dias da Semana:</h3>
	<div class="form-group">
	<table class="table table-hover table-stripped">
        <tr>
            <td><input type="checkbox" name="optionsegunda" value="1"><br></td>
            <td><label>Segunda-Feira</label></td>
			<td></td>
			<td><input type="checkbox" name="optionterca" value="1"><br></td>
            <td><label>Terça-Feira</label></td>
			<td></td>
			<td><input type="checkbox" name="optionquarta" value="1"><br></td>
            <td><label>Quarta-Feira</label></td>
			<td></td>
			<td><input type="checkbox" name="optionquinta" value="1"><br></td>
            <td><label>Quinta-Feira</label></td>
			<td></td>
			<td><input type="checkbox" name="optionsexta" value="1"><br></td>
            <td><label>Sexta-Feira</label></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="optionsabado" value="1"><br></td>
            <td><label>Sábado</label></td>
			<td></td>
			<td><input type="checkbox" name="optiondomingo" value="1"><br></td>
            <td><label>Domingo</label></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
        </tr>
	</table>
		
        <button type="submit" class="btn btn-default">Bloquear</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>