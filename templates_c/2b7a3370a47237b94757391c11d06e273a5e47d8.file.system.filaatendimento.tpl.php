<?php /* Smarty version Smarty-3.1.13, created on 2019-07-24 15:35:14
         compiled from "engine\view\InfoPanel\pages\Fila_Atendimento\system.filaatendimento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169255cd0074c6849e7-05090270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b7a3370a47237b94757391c11d06e273a5e47d8' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Fila_Atendimento\\system.filaatendimento.tpl',
      1 => 1563993313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169255cd0074c6849e7-05090270',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd0074c7055c5_60714769',
  'variables' => 
  array (
    'Livros' => 0,
    'Liv' => 0,
    'livroid' => 0,
    'inf' => 0,
    'Fila' => 0,
    'Fil' => 0,
    'horario1' => 0,
    'horario2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0074c7055c5_60714769')) {function content_5cd0074c7055c5_60714769($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<div class="row">
		<div class="col-xs-12">
			<select id="livroid" class="form-control">
				<option></option>
				<?php  $_smarty_tpl->tpl_vars['Liv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv']->key => $_smarty_tpl->tpl_vars['Liv']->value){
$_smarty_tpl->tpl_vars['Liv']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['Liv']->value['LivroId'];?>
" <?php if ($_smarty_tpl->tpl_vars['Liv']->value['LivroId']==$_smarty_tpl->tpl_vars['livroid']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Liv']->value['Descricao'];?>
</option>
				<?php } ?>
			</select>
		</div>
	</div>

	<hr>
	
	<div class="step">	
		<div  class="col-md-12">
			<div class="step">
				<table class="table table-hover table-stripped">
					<thead>
					<tr>
						<th>Id</th>
						<th>Data</th>
						<th>Hora</th>
						<th>Chegada</th>
						<th>Paciente</th>
						<th>Procedimento</th>
						<th>Convênio</th>
						<?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"||$_smarty_tpl->tpl_vars['inf']->value->login=="FRFISIO"){?><th>Patologia</th><?php }else{ ?><th>Tempo</th><?php }?>
						<th>Opções</th>
					</tr>
					</thead>
					<?php  $_smarty_tpl->tpl_vars['Fil'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fil']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Fila']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fil']->key => $_smarty_tpl->tpl_vars['Fil']->value){
$_smarty_tpl->tpl_vars['Fil']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['Fil']->value['Id'];?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Fil']->value['Data'],"%d/%m/%Y");?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['Fil']->value['Hora'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['Fil']->value['Chegada'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['Fil']->value['NomePaciente'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['Fil']->value['SessaoId'];?>
ª SESSAO</td>
						<td><?php echo $_smarty_tpl->tpl_vars['Fil']->value['Convenio'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"||$_smarty_tpl->tpl_vars['inf']->value->login=="FRFISIO"){?><td><?php echo $_smarty_tpl->tpl_vars['Fil']->value['RegiaoDiagnostico'];?>
</td><?php }else{ ?><td><?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['Fil']->value['TempoDecorrido'],"H:i:s")!=''){?><div class="helper-display-none"><?php echo date_default_timezone_set('America/Sao_Paulo');?>
</div><?php $_smarty_tpl->tpl_vars['horario1'] = new Smarty_variable(smarty_modifier_date_format($_smarty_tpl->tpl_vars['Fil']->value['TempoDecorrido'],"H:i:s"), null, 0);?><?php $_smarty_tpl->tpl_vars['horario2'] = new Smarty_variable(date('H:i:s'), null, 0);?><?php echo calculaTempo($_smarty_tpl->tpl_vars['horario1']->value,$_smarty_tpl->tpl_vars['horario2']->value);?>
 <?php }?></td><?php }?>
						<td><a href="/info/filaatendimento/atender/<?php echo $_smarty_tpl->tpl_vars['Fil']->value['PacienteId'];?>
/<?php echo $_smarty_tpl->tpl_vars['Fil']->value['Id'];?>
" class="btn btn-sm btn-primary">Atender</a></td>
						<td><a href="/info/filaatendimento/retiraLista/<?php echo $_smarty_tpl->tpl_vars['Fil']->value['Id'];?>
" class="btn btn-sm btn-danger">Retira da Lista</a></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>



<script>
$(function() {
	$('#livroid').change(function(){
		window.location.href = '/info/filaatendimento/'+$('#livroid').val();
	});
});
</script>

<script language="Javascript">
	window.onload = function () {
	setTimeout('location.reload();', 30000);
	}
</script>

	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>