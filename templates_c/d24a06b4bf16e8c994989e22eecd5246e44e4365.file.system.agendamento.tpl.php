<?php /* Smarty version Smarty-3.1.13, created on 2019-07-23 09:28:15
         compiled from "engine\view\InfoPanel\pages\Agendamento\system.agendamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59345cd47244785c22-40724818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd24a06b4bf16e8c994989e22eecd5246e44e4365' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agendamento\\system.agendamento.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59345cd47244785c22-40724818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd47244957716_14388600',
  'variables' => 
  array (
    'status' => 0,
    'Administradores' => 0,
    'Dados' => 0,
    'admin' => 0,
    'dado' => 0,
    'Consultas' => 0,
    'Cons' => 0,
    'Exames' => 0,
    'Exa' => 0,
    'Vacinas' => 0,
    'Vac' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd47244957716_14388600')) {function content_5cd47244957716_14388600($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Dados da clínica foram editados com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Médico adicionado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Médico editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==4){?><div class="alert alert-success" role="alert">Médico excluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==5){?><div class="alert alert-success" role="alert">Exame adicionado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==6){?><div class="alert alert-success" role="alert">Exame editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==7){?><div class="alert alert-success" role="alert">Exame excluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==8){?><div class="alert alert-success" role="alert">Vacina adicionada com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==9){?><div class="alert alert-success" role="alert">Vacina editada com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==10){?><div class="alert alert-success" role="alert">Vacina excluída com sucesso!</div><?php }?>

<div class="step">
	<h1>Agendamentos</h1>
	<?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Administradores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value){
$_smarty_tpl->tpl_vars['admin']->_loop = true;
?><?php } ?>
	<?php  $_smarty_tpl->tpl_vars['dado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Dados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dado']->key => $_smarty_tpl->tpl_vars['dado']->value){
$_smarty_tpl->tpl_vars['dado']->_loop = true;
?><?php } ?>
	
	<?php if ($_smarty_tpl->tpl_vars['admin']->value['conta']==1){?>
		teste
	<?php }else{ ?>
		<?php if (count($_smarty_tpl->tpl_vars['Dados']->value)==0){?>
			<center><label>Clínica sem dados cadastrados. <a href="/info/agendamento/agendamento_novo">Clique aqui</a> para cadastrar</label></center>
		<?php }else{ ?>
			<a href="/info/agendamento/agendamento_edita" class="btn btn-sm btn-primary">Editar dados da Clínica</a>
			
			<?php if ($_smarty_tpl->tpl_vars['dado']->value['TipoConsulta']==1){?>
				<h3>Consultas</h3>
				<a href="/info/agendamento/agendamento_medico_novo" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Adicionar Médico</a>
				
				<table class="table table-hover table-stripped">
					<thead>
					<tr>
						<th>Nome do Médico</th>
						<th>Especialidade</th>
						<th>Horários</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
					</thead>
					<?php  $_smarty_tpl->tpl_vars['Cons'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Cons']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Consultas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Cons']->key => $_smarty_tpl->tpl_vars['Cons']->value){
$_smarty_tpl->tpl_vars['Cons']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['Cons']->value['nome'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['Cons']->value['Espec'];?>
</td>
							<td><?php if ($_smarty_tpl->tpl_vars['Cons']->value['Segundamanha']==1||$_smarty_tpl->tpl_vars['Cons']->value['Segundatarde']==1||$_smarty_tpl->tpl_vars['Cons']->value['Segundanoite']==1){?>SEG ( <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Segundamanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Segundatarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Segundanoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Cons']->value['Tercamanha']==1||$_smarty_tpl->tpl_vars['Cons']->value['Tercatarde']==1||$_smarty_tpl->tpl_vars['Cons']->value['Tercanoite']==1){?> TER ( <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Tercamanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Tercatarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Tercanoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Cons']->value['Quartamanha']==1||$_smarty_tpl->tpl_vars['Cons']->value['Quartatarde']==1||$_smarty_tpl->tpl_vars['Cons']->value['Quartanoite']==1){?> QUA ( <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Quartamanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Quartatarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Quartanoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Cons']->value['Quintamanha']==1||$_smarty_tpl->tpl_vars['Cons']->value['Quintatarde']==1||$_smarty_tpl->tpl_vars['Cons']->value['Quintanoite']==1){?> QUI ( <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Quintamanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Quintatarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Quintanoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Cons']->value['Sextamanha']==1||$_smarty_tpl->tpl_vars['Cons']->value['Sextatarde']==1||$_smarty_tpl->tpl_vars['Cons']->value['Sextanoite']==1){?> SEX ( <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Sextamanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Sextatarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Sextanoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Cons']->value['Sabadomanha']==1||$_smarty_tpl->tpl_vars['Cons']->value['Sabadotarde']==1||$_smarty_tpl->tpl_vars['Cons']->value['Sabadonoite']==1){?> SAB ( <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Sabadomanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Sabadotarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Sabadonoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Cons']->value['Domingomanha']==1||$_smarty_tpl->tpl_vars['Cons']->value['Domingotarde']==1||$_smarty_tpl->tpl_vars['Cons']->value['Domingonoite']==1){?> DOM ( <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Domingomanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Domingotarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Cons']->value['Domingonoite']==1){?>NOITE<?php }?> )<?php }?>
							</td>
							<td><a href="/info/agendamento/agendamento_medico_editar/<?php echo $_smarty_tpl->tpl_vars['Cons']->value['Id'];?>
" class="btn btn-sm btn-primary">Editar</a></td>
							<td><a data-toggle="modal" data-target="#myModalConsulta<?php echo $_smarty_tpl->tpl_vars['Cons']->value['Id'];?>
" href="" class="btn btn-sm btn-danger">Excluir</a></td>
							
							<div class="modal fade" id="myModalConsulta<?php echo $_smarty_tpl->tpl_vars['Cons']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<div class="row">
											<div class="col-md-12">
												<h3>Confirmação de exclusão</h3>
											</div>
										</div>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-12">
												<label>Deseja realmente excluir o médico <b><?php echo $_smarty_tpl->tpl_vars['Cons']->value['nome'];?>
</b>? O médico deixará de aparecer disponível para agendamento.</label>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<a href="/info/agendamento/agendamento_medico_excluir/<?php echo $_smarty_tpl->tpl_vars['Cons']->value['Id'];?>
" class="btn btn-danger">Confirmar</a>
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
									</div>
								</div>
							</div>
					</div>
						</tr>
					<?php } ?>
				</table>
				
				<b><?php echo count($_smarty_tpl->tpl_vars['Consultas']->value);?>
</b> <?php if (count($_smarty_tpl->tpl_vars['Consultas']->value)==1){?>Médico Cadastrado.<?php }else{ ?>Médicos Cadastrados.<?php }?> 
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['dado']->value['TipoExame']==1){?>
				<h3>Exames</h3>
				<a href="/info/agendamento/agendamento_exame_novo" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Adicionar Exame</a>
				
				<table class="table table-hover table-stripped">
					<thead>
					<tr>
						<th>Nome do Exame</th>
						<th>Horários</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
					</thead>
					<?php  $_smarty_tpl->tpl_vars['Exa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Exa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Exames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Exa']->key => $_smarty_tpl->tpl_vars['Exa']->value){
$_smarty_tpl->tpl_vars['Exa']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['Exa']->value['exame'];?>
</td>
							<td><?php if ($_smarty_tpl->tpl_vars['Exa']->value['Segundamanha']==1||$_smarty_tpl->tpl_vars['Exa']->value['Segundatarde']==1||$_smarty_tpl->tpl_vars['Exa']->value['Segundanoite']==1){?>SEG ( <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Segundamanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Segundatarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Segundanoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Exa']->value['Tercamanha']==1||$_smarty_tpl->tpl_vars['Exa']->value['Tercatarde']==1||$_smarty_tpl->tpl_vars['Exa']->value['Tercanoite']==1){?> TER ( <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Tercamanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Tercatarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Tercanoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Exa']->value['Quartamanha']==1||$_smarty_tpl->tpl_vars['Exa']->value['Quartatarde']==1||$_smarty_tpl->tpl_vars['Exa']->value['Quartanoite']==1){?> QUA ( <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Quartamanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Quartatarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Quartanoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Exa']->value['Quintamanha']==1||$_smarty_tpl->tpl_vars['Exa']->value['Quintatarde']==1||$_smarty_tpl->tpl_vars['Exa']->value['Quintanoite']==1){?> QUI ( <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Quintamanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Quintatarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Quintanoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Exa']->value['Sextamanha']==1||$_smarty_tpl->tpl_vars['Exa']->value['Sextatarde']==1||$_smarty_tpl->tpl_vars['Exa']->value['Sextanoite']==1){?> SEX ( <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Sextamanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Sextatarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Sextanoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Exa']->value['Sabadomanha']==1||$_smarty_tpl->tpl_vars['Exa']->value['Sabadotarde']==1||$_smarty_tpl->tpl_vars['Exa']->value['Sabadonoite']==1){?> SAB ( <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Sabadomanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Sabadotarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Sabadonoite']==1){?>NOITE<?php }?> )<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['Exa']->value['Domingomanha']==1||$_smarty_tpl->tpl_vars['Exa']->value['Domingotarde']==1||$_smarty_tpl->tpl_vars['Exa']->value['Domingonoite']==1){?> DOM ( <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Domingomanha']==1){?>MANHA<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Domingotarde']==1){?>TARDE<?php }?> <?php if ($_smarty_tpl->tpl_vars['Exa']->value['Domingonoite']==1){?>NOITE<?php }?> )<?php }?>
							</td>
							<td><a href="/info/agendamento/agendamento_exame_editar/<?php echo $_smarty_tpl->tpl_vars['Exa']->value['Id'];?>
" class="btn btn-sm btn-primary">Editar</a></td>
							<td><a data-toggle="modal" data-target="#myModalExame<?php echo $_smarty_tpl->tpl_vars['Exa']->value['Id'];?>
" href="" class="btn btn-sm btn-danger">Excluir</a></td>
							
							<div class="modal fade" id="myModalExame<?php echo $_smarty_tpl->tpl_vars['Exa']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<div class="row">
											<div class="col-md-12">
												<h3>Confirmação de exclusão</h3>
											</div>
										</div>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-12">
												<label>Deseja realmente excluir o exame <b><?php echo $_smarty_tpl->tpl_vars['Exa']->value['exame'];?>
</b>? O exame deixará de aparecer disponível para agendamento.</label>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<a href="/info/agendamento/agendamento_exame_excluir/<?php echo $_smarty_tpl->tpl_vars['Exa']->value['Id'];?>
" class="btn btn-danger">Confirmar</a>
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
									</div>
								</div>
							</div>
					</div>
						</tr>
					<?php } ?>
				</table>
				
				<b><?php echo count($_smarty_tpl->tpl_vars['Exames']->value);?>
</b> <?php if (count($_smarty_tpl->tpl_vars['Exames']->value)==1){?>Exame Cadastrado.<?php }else{ ?>Exames Cadastrados.<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['dado']->value['TipoVacina']==1){?>
				<h3>Vacinas</h3>
				<a href="/info/agendamento/agendamento_vacina_novo" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Adicionar Vacina</a>
				
				<table class="table table-hover table-stripped">
					<thead>
					<tr>
						<th>Nome da Vacina</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
					</thead>
					<?php  $_smarty_tpl->tpl_vars['Vac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Vac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Vacinas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Vac']->key => $_smarty_tpl->tpl_vars['Vac']->value){
$_smarty_tpl->tpl_vars['Vac']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['Vac']->value['vacina'];?>
</td>
							<td><a href="/info/agendamento/agendamento_vacina_editar/<?php echo $_smarty_tpl->tpl_vars['Vac']->value['Id'];?>
" class="btn btn-sm btn-primary">Editar</a></td>
							<td><a data-toggle="modal" data-target="#myModalVacina<?php echo $_smarty_tpl->tpl_vars['Vac']->value['Id'];?>
" href="" class="btn btn-sm btn-danger">Excluir</a></td>
							
							<div class="modal fade" id="myModalVacina<?php echo $_smarty_tpl->tpl_vars['Vac']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<div class="row">
											<div class="col-md-12">
												<h3>Confirmação de exclusão</h3>
											</div>
										</div>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-12">
												<label>Deseja realmente excluir a vacina <b><?php echo $_smarty_tpl->tpl_vars['Vac']->value['vacina'];?>
</b>? A vacina deixará de aparecer disponível para agendamento.</label>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<a href="/info/agendamento/agendamento_vacina_excluir/<?php echo $_smarty_tpl->tpl_vars['Vac']->value['Id'];?>
" class="btn btn-danger">Confirmar</a>
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
									</div>
								</div>
							</div>
					</div>
						</tr>
					<?php } ?>
				</table>
				
				<b><?php echo count($_smarty_tpl->tpl_vars['Vacinas']->value);?>
</b> <?php if (count($_smarty_tpl->tpl_vars['Vacinas']->value)==1){?>Vacina Cadastrada.<?php }else{ ?>Vacinas Cadastradas.<?php }?>
			<?php }?>
		<?php }?>
	<?php }?>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>