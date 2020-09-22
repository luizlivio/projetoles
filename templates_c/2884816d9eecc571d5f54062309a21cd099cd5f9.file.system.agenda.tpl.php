<?php /* Smarty version Smarty-3.1.13, created on 2020-03-10 20:41:29
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61785cce7726991fb0-11616126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2884816d9eecc571d5f54062309a21cd099cd5f9' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda.tpl',
      1 => 1583883669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61785cce7726991fb0-11616126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cce772703ed94_90511956',
  'variables' => 
  array (
    'comandoespecial' => 0,
    'Livros' => 0,
    'livroid' => 0,
    'Liv' => 0,
    'dia' => 0,
    'mes' => 0,
    'ano' => 0,
    'inf' => 0,
    'horreqid' => 0,
    'PATH' => 0,
    'agenda_busca' => 0,
    'Pacientes' => 0,
    'Pac' => 0,
    'ObservacoesAgenda' => 0,
    'ObsAge' => 0,
    'livrotipo' => 0,
    'Horarios' => 0,
    'Hor' => 0,
    'Agenda' => 0,
    'ficha_clinica_modulo' => 0,
    'faltas' => 0,
    'RespostasSMS' => 0,
    'RespostaSMS' => 0,
    'atual' => 0,
    'FeriadosVariavel' => 0,
    'Fer' => 0,
    'FeriadosFixos' => 0,
    'Anos' => 0,
    'AnosFeriados' => 0,
    'FerFixos' => 0,
    'PintarAgendas' => 0,
    'PintarAg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cce772703ed94_90511956')) {function content_5cce772703ed94_90511956($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE HTML>
<html>
<head>
    <title>Painel Administrativo</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<link rel="stylesheet" href="/styles/css/loading-bar.css">
    <link rel="stylesheet" href="/styles/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/styles/css/medicPanel.css">
	
</head>
<body ng-app="AngioApp"> 

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['comandoespecial']->value==1||$_smarty_tpl->tpl_vars['comandoespecial']->value==2||$_smarty_tpl->tpl_vars['comandoespecial']->value==7){?><div class="alert alert-success" role="alert">Dados salvos na memória. Escolha um novo horário.</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['comandoespecial']->value==3){?><div class="alert alert-danger" role="alert">Erro ao salvar o agendamento. Tente novamente.</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['comandoespecial']->value==4){?><div class="alert alert-success" role="alert">Agendamento Salvo com Sucesso</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['comandoespecial']->value==5){?><div class="alert alert-success" role="alert">Agendamento Duplicado com Sucesso</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['comandoespecial']->value==6){?><div class="alert alert-success" role="alert">Paciente Transferido com Sucesso</div><?php }?>

<div class="row">
	<div class="col-md-7">
		<div class="step">
			<h3>Agenda<?php  $_smarty_tpl->tpl_vars['Liv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv']->key => $_smarty_tpl->tpl_vars['Liv']->value){
$_smarty_tpl->tpl_vars['Liv']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['livroid']->value==$_smarty_tpl->tpl_vars['Liv']->value['LivroId']){?> - <?php echo $_smarty_tpl->tpl_vars['Liv']->value['Descricao'];?>
 <?php $_smarty_tpl->tpl_vars['livrotipo'] = new Smarty_variable($_smarty_tpl->tpl_vars['Liv']->value['Tipo'], null, 0);?><?php }?><?php } ?></h3>
			<span class="dropdown">
				<button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Opções <span class="caret"></span></button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="/info/agenda/agenda_livros">Cadastros</a></li>
					<li><a href="/info/agenda/agenda_feriados">Feriados</a></li>
					<li><a href="/info/agenda/agenda_abrir_encaixe/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">Abrir Encaixe</a></li>
					<li><a href="/info/agenda/agenda_lista_antecipa">Pacientes que desejam antecipar</a></li>
					<li><a href="/info/agenda/agenda_lista_abandono">Relatório de Abandono</a></li>
					<li><a href="/info/agenda/agenda_estatisticas/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
/0000/2359">Estatísticas</a></li>
					<li><a data-toggle="modal" data-target="#imprimiAgenda" href="" data-dismiss="modal">Imprimir Agenda</a></li>
					<?php if ($_smarty_tpl->tpl_vars['inf']->value->login=="FISIOCARDIO"||$_smarty_tpl->tpl_vars['inf']->value->login=="FUKUNARI"){?><li><a href="/info/agenda/relatorio">Relatório</a></li><?php }?>
				</ul>
			</span>
			
			<span class="dropdown">
				<button class="btn btn-sm btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Buscas<span class="caret"></span></button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="/info/agenda/datalivre/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
<?php if ($_smarty_tpl->tpl_vars['comandoespecial']->value!=null){?>/<?php echo $_smarty_tpl->tpl_vars['comandoespecial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
<?php }?>">Data Livre</a></li>
					<li><a href="/info/agenda/busca_avancada">Busca Avançada</a></li>
				</ul>
			</span>
		</div>
		
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/agenda_ir/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
<?php if ($_smarty_tpl->tpl_vars['comandoespecial']->value!=null){?>/<?php echo $_smarty_tpl->tpl_vars['comandoespecial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
<?php }?>">
		<div class="step">
			<label>Médico</label>
			<div class="row">
				<div class="col-md-10">
					<select name="livroid" class="form-control">
						<?php  $_smarty_tpl->tpl_vars['Liv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv']->key => $_smarty_tpl->tpl_vars['Liv']->value){
$_smarty_tpl->tpl_vars['Liv']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['Liv']->value['LivroId'];?>
" <?php if ($_smarty_tpl->tpl_vars['livroid']->value==$_smarty_tpl->tpl_vars['Liv']->value['LivroId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Liv']->value['Descricao'];?>
</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-default">Ir</button>		
				</div>
			</div>
		</form>		
			
		<br>
			<label>Pesquisar</label>
			<div class="row">
				<form method="post" data-toggle="validator" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/agenda_buscar/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">
					<div class="col-md-10">
						<input type="text" name="Busca" class="form-control" data-error="Informe um nome válido de Paciente." required>
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-md-2">
						<button name="btn" type="submit" class="btn btn-default">Buscar</button>
					</div>
				</form>
			</div>
		
		<br>
			<center><h4><?php  $_smarty_tpl->tpl_vars['Liv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv']->key => $_smarty_tpl->tpl_vars['Liv']->value){
$_smarty_tpl->tpl_vars['Liv']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['livroid']->value==$_smarty_tpl->tpl_vars['Liv']->value['LivroId']){?>Horários Livres: <?php echo $_smarty_tpl->tpl_vars['Liv']->value['LIVRES'];?>
 | Ocupados: <?php echo $_smarty_tpl->tpl_vars['Liv']->value['TOTAL']-$_smarty_tpl->tpl_vars['Liv']->value['LIVRES'];?>
 | Total: <?php echo $_smarty_tpl->tpl_vars['Liv']->value['TOTAL'];?>
<?php }?><?php } ?></h4></center>
			
			
			
		</div>
	</div>
	
	<div class="col-md-5">
		<div class="step">
		<div id="dncalendar-container">
		</div>
		
		

		</div>
	</div>
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['agenda_busca']->value=="agenda_busca"){?>
		<?php if (count($_smarty_tpl->tpl_vars['Pacientes']->value)==0){?>
			<div  class="col-md-12">
				<div class="step">
					<center><label>Não foram encontradas referências para o nome procurado</label></center>
				</div>
			</div>
		<?php }else{ ?>
		<div  class="col-md-12">
			<div class="step">
				<center><label>Foram encontradas <?php echo count($_smarty_tpl->tpl_vars['Pacientes']->value);?>
 referências abaixo para o nome procurado</label></center>
				
				<table class="table table-hover table-stripped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nome</th>
							<th>Nascimento</th>
							<th>Acessar</th>
						</tr>
					</thead>
					<?php  $_smarty_tpl->tpl_vars['Pac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Pac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pacientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Pac']->key => $_smarty_tpl->tpl_vars['Pac']->value){
$_smarty_tpl->tpl_vars['Pac']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['Pac']->value['PacienteId'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['Pac']->value['NomePaciente'];?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Pac']->value['DataNasc'],"%d/%m/%Y");?>
</td>
						<td><a href="/info/agenda/agenda_busca_porid/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Pac']->value['PacienteId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<?php }?>
	<?php }else{ ?>
	
		<?php  $_smarty_tpl->tpl_vars['Liv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv']->key => $_smarty_tpl->tpl_vars['Liv']->value){
$_smarty_tpl->tpl_vars['Liv']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['livroid']->value==$_smarty_tpl->tpl_vars['Liv']->value['LivroId']&&$_smarty_tpl->tpl_vars['Liv']->value['OptionObservacoes']==1){?><?php if (strlen($_smarty_tpl->tpl_vars['Liv']->value['Observacoes'])>5){?><div  class="col-md-12"><div class="alert alert-warning" role="alert"><?php echo $_smarty_tpl->tpl_vars['Liv']->value['Observacoes'];?>
</div></div><?php }?><?php }?><?php } ?>
		
		<?php  $_smarty_tpl->tpl_vars['ObsAge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ObsAge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ObservacoesAgenda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ObsAge']->key => $_smarty_tpl->tpl_vars['ObsAge']->value){
$_smarty_tpl->tpl_vars['ObsAge']->_loop = true;
?>
			<?php if (strlen($_smarty_tpl->tpl_vars['ObsAge']->value['Observacao'])>1){?>
				<div  class="col-md-12"><div class="alert alert-danger" role="alert"><span><?php echo $_smarty_tpl->tpl_vars['ObsAge']->value['Observacao'];?>
</span><span style="display: inline; float: right;"><a data-toggle="modal" data-target="#myObservacoesAgenda<?php echo $_smarty_tpl->tpl_vars['ObsAge']->value['Id'];?>
" href=""><i class="glyphicon glyphicon-eye-open"></i></a> <a data-toggle="modal" data-target="#myExcluiObservacoesAgenda<?php echo $_smarty_tpl->tpl_vars['ObsAge']->value['Id'];?>
" href=""><i class="glyphicon glyphicon-remove"></i></a></span></div></div>
				
				<div class="modal fade" id="myObservacoesAgenda<?php echo $_smarty_tpl->tpl_vars['ObsAge']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<div class="row">
									<div class="col-md-12">
										<h3>Dados da Observação</h3>
									</div>
								</div>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<h4><?php echo $_smarty_tpl->tpl_vars['ObsAge']->value['Observacao'];?>
</h4>
										<label><?php if ($_smarty_tpl->tpl_vars['ObsAge']->value['Nome']!=''){?>Criado por: <?php echo $_smarty_tpl->tpl_vars['ObsAge']->value['Nome'];?>
<?php }?></label>
										<label>Data: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ObsAge']->value['DataCriacao'],"%d/%m/%Y");?>
</label>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<a class="btn btn-danger" href="/info/agenda/excluicomentario/<?php echo $_smarty_tpl->tpl_vars['ObsAge']->value['Id'];?>
">Excluir</a>
								<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="modal fade" id="myExcluiObservacoesAgenda<?php echo $_smarty_tpl->tpl_vars['ObsAge']->value['Id'];?>
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
										<label>Confirma a exclusão da observação da agenda?</label>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<a class="btn btn-danger" href="/info/agenda/excluicomentario/<?php echo $_smarty_tpl->tpl_vars['ObsAge']->value['Id'];?>
">Excluir</a>
								<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
							</div>
						</div>
					</div>
				</div>
				
			<?php }?>
		<?php } ?>
		
		<div class="col-md-12" style="text-align: right;">
			<a class="btn btn-sm btn-success" data-toggle="modal" data-target="#myNovaObservacoesAgenda" href=""><i class="glyphicon glyphicon-plus"></i> Nova Observação</a> <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myBloquearAgendaDia" href=""><i class="glyphicon glyphicon-ban-circle"></i> Bloquear Dia</a>
		</div>
			<div class="modal fade" id="myNovaObservacoesAgenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<div class="row">
								<div class="col-md-12">
									<h3>Nova Observação</h3>
								</div>
							</div>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/novoComentario">
										<div class="helper-display-none">
											<input type="text" name="livroid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">
											<input type="text" name="data" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
">
										</div>
										<div class="form-group">
											<label>Observação</label>
											<textarea name="observacao" class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-success">Salvar</button>	
								<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
							</form>	
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="myBloquearAgendaDia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<div class="row">
								<div class="col-md-12">
									<h3>Bloqueio de agenda</h3>
								</div>
							</div>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/bloqueardia">
										<div class="helper-display-none">
											<input type="text" name="livroid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">
											<input type="text" name="dia" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
">
											<input type="text" name="mes" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
">
											<input type="text" name="ano" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
">
										</div>
										<div class="form-group">
											<label>Observação</label>
											<textarea name="observacao" class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-danger">Salvar</button>	
								<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
							</form>	
						</div>
					</div>
				</div>
			</div>
			
			</br>
			</br>
		
			<div  class="col-md-12">
				<div class="step">
					<table class="table table-hover table-stripped">
						<thead>
						<tr>
							<th>Id</th>
							<th>Data</th>
							<th>Hora</th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th>Paciente</th>
							<th>Telefone</th>
							<th>Procedimento</th>
							<?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2){?><th>Sessão</th><?php }?>
							<th>Convênio</th>
							<th>Opções</th>
						</tr>
						</thead>
						<?php  $_smarty_tpl->tpl_vars['Hor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Hor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Horarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Hor']->key => $_smarty_tpl->tpl_vars['Hor']->value){
$_smarty_tpl->tpl_vars['Hor']->_loop = true;
?>
						<tr>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4){?><font color="#007E33"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==5){?><font color="#CC0000"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==6){?><font color="#FF5722"><?php }?><?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1){?><font color="#0099CC"><?php }?><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4||$_smarty_tpl->tpl_vars['Hor']->value['Status']==5||$_smarty_tpl->tpl_vars['Agenda']->value['Status']==6||($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1)){?></font><?php }?></td>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4){?><font color="#007E33"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==5){?><font color="#CC0000"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==6){?><font color="#FF5722"><?php }?><?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1){?><font color="#0099CC"><?php }?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['Data'],"%d/%m/%Y");?>
<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4||$_smarty_tpl->tpl_vars['Hor']->value['Status']==5||$_smarty_tpl->tpl_vars['Agenda']->value['Status']==6||($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1)){?></font><?php }?></td>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4){?><font color="#007E33"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==5){?><font color="#CC0000"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==6){?><font color="#FF5722"><?php }?><?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1){?><font color="#0099CC"><?php }?><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Hora'];?>
<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4||$_smarty_tpl->tpl_vars['Hor']->value['Status']==5||$_smarty_tpl->tpl_vars['Agenda']->value['Status']==6||($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1)){?></font><?php }?></td>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Confirmado']==1){?><img src="/styles/images/confirmado.png" alt="alternative text" title="Confirmado"/><?php }else{ ?><img src="/styles/images/naoconfirmado.png" alt="alternative text" title="Sem Confirmação"/><?php }?></td>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Adiantar']==1){?><img src="/styles/images/adianta.png" alt="alternative text" title="Deseja Antecipar"/><?php }else{ ?><img src="/styles/images/naoadianta.png" alt="alternative text" title="Não deseja antecipar"/><?php }?></td>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Cadeirante']=="Sim"){?><img src="/styles/images/deficiente.png" alt="alternative text" title="Paciente Deficiênte"/><?php }?></td>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Respostas']>0){?> <a data-toggle="modal" data-target="#myModalResposta<?php echo $_smarty_tpl->tpl_vars['Hor']->value['MSGID'];?>
" href=""><i class="glyphicon glyphicon-phone" alt="alternative text" title="Resposta de SMS"></i></a><?php }?></td>
							<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==2||$_smarty_tpl->tpl_vars['Hor']->value['Status']==3){?><td colspan="<?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==1){?>4<?php }elseif($_smarty_tpl->tpl_vars['livrotipo']->value==2){?>5<?php }?>"><center><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==2){?>BLOQUEADO<?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==3){?>RESERVADO<?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['UsuarioAgendamento']!=''){?> POR <?php echo $_smarty_tpl->tpl_vars['Hor']->value['UsuarioAgendamento'];?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['DataAgendado'],"%d/%m/%Y");?>
 - <?php echo $_smarty_tpl->tpl_vars['Hor']->value['HoraAgendado'];?>
<?php }?></center></td><?php }else{ ?>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4){?><font color="#007E33"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==5){?><font color="#CC0000"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==6){?><font color="#FF5722"><?php }?><?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1){?><font color="#0099CC"><?php }?><?php echo $_smarty_tpl->tpl_vars['Hor']->value['NomePaciente'];?>
<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4||$_smarty_tpl->tpl_vars['Hor']->value['Status']==5||$_smarty_tpl->tpl_vars['Agenda']->value['Status']==6||($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1)){?></font><?php }?></td>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4){?><font color="#007E33"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==5){?><font color="#CC0000"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==6){?><font color="#FF5722"><?php }?><?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1){?><font color="#0099CC"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Celular']!=" "&&$_smarty_tpl->tpl_vars['Hor']->value['Celular']!=''){?><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Celular'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Telefone'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4||$_smarty_tpl->tpl_vars['Hor']->value['Status']==5||$_smarty_tpl->tpl_vars['Agenda']->value['Status']==6||($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1)){?></font><?php }?></td>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4){?><font color="#007E33"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==5){?><font color="#CC0000"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==6){?><font color="#FF5722"><?php }?><?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1){?><font color="#0099CC"><?php }?><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Exame'];?>
<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4||$_smarty_tpl->tpl_vars['Hor']->value['Status']==5||$_smarty_tpl->tpl_vars['Agenda']->value['Status']==6||($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1)){?></font><?php }?></td>
							<?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2){?><td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4){?><font color="#007E33"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==5){?><font color="#CC0000"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==6){?><font color="#FF5722"><?php }?><?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1){?><font color="#0099CC"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['SessaoId']!=''){?><?php echo $_smarty_tpl->tpl_vars['Hor']->value['SessaoId'];?>
ª SESSAO<?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4||$_smarty_tpl->tpl_vars['Hor']->value['Status']==5||$_smarty_tpl->tpl_vars['Agenda']->value['Status']==6||($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1)){?></font><?php }?></td><?php }?>
							<td><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4){?><font color="#007E33"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==5){?><font color="#CC0000"><?php }?><?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==6){?><font color="#FF5722"><?php }?><?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1){?><font color="#0099CC"><?php }?><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Convenio'];?>
<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==4||$_smarty_tpl->tpl_vars['Hor']->value['Status']==5||$_smarty_tpl->tpl_vars['Agenda']->value['Status']==6||($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['SessaoId']==1&&$_smarty_tpl->tpl_vars['Hor']->value['Status']==1)){?></font><?php }?></td><?php }?>
							<td><div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									Opções
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Status']==null||($_smarty_tpl->tpl_vars['Hor']->value['Status']=="3"&&$_smarty_tpl->tpl_vars['Hor']->value['UsuarioAgendamento']==$_smarty_tpl->tpl_vars['inf']->value->mult))&&($_smarty_tpl->tpl_vars['livrotipo']->value==1||$_smarty_tpl->tpl_vars['livrotipo']->value==2)){?><li><a href="/info/agenda/agendar/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Agendar<?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2){?> Avaliação<?php }?></a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Status']==null||($_smarty_tpl->tpl_vars['Hor']->value['Status']=="3"&&$_smarty_tpl->tpl_vars['Hor']->value['UsuarioAgendamento']==$_smarty_tpl->tpl_vars['inf']->value->mult))&&$_smarty_tpl->tpl_vars['livrotipo']->value==3){?><li><a href="/info/agenda/agendar_longa/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Agendar</a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Status']==null&&$_smarty_tpl->tpl_vars['comandoespecial']->value=="1")&&$_smarty_tpl->tpl_vars['livrotipo']->value==1){?><li><a href="/info/agenda/agendarduplicando/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
/<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
">Agendar Duplicando</a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Status']==null&&$_smarty_tpl->tpl_vars['comandoespecial']->value=="1")&&$_smarty_tpl->tpl_vars['livrotipo']->value==2){?><li><a href="/info/agenda/agendarduplicandosessao/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
/<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
">Agendar Duplicando</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="5"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="6"){?><li><a href="/info/agenda/duplicar/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Duplicar Agendamento</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==null&&$_smarty_tpl->tpl_vars['comandoespecial']->value=="2"){?><li><a href="/info/agenda/agendartransferindo/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
/<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
">Agendar Transferindo</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==null&&$_smarty_tpl->tpl_vars['comandoespecial']->value=="7"){?><li><a href="/info/agenda/agendarduplicando/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
/<?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
">Agendar Atual</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"){?><li><a href="/info/agenda/transferir/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Transferir</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"){?><li><a data-toggle="modal" data-target="#myCancelar<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" href="">Cancelar</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"&&$_smarty_tpl->tpl_vars['livrotipo']->value==2){?><li><a data-toggle="modal" data-target="#myCancelarTodas<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" href="">Cancelar Sessões Futuras</a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="5")&&$_smarty_tpl->tpl_vars['livrotipo']->value==2){?><li><a href="/info/agenda/reagendasessao/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['PacienteId'];?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Reagendar Sessões</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==null){?><li><a href="/info/agenda/bloquear/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Bloquear</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="2"){?><li><a href="/info/agenda/retirabloquear/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Desbloquear</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==null){?><li><a href="/info/agenda/reservar/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Reservar</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="3"){?><li><a href="/info/agenda/retirareservar/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Retirar Reserva</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']==null){?><li><a href="/info/agenda/excluihorario/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Excluir Horário</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="5"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="6"){?><li role="separator" class="divider"></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="5"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="6"){?><li><a data-toggle="modal" data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" href="">Visualizar</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="5"){?><li><a href="/info/agenda/editahorario/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['Data'],"%d/%m/%Y");?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Editar Agendamento</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="5"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="6"){?><li><a href="/info/pacientes/pacientes_ficha/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['PacienteId'];?>
">Ficha do Paciente</a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="5"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="6")&&$_smarty_tpl->tpl_vars['ficha_clinica_modulo']->value=="1"&&$_smarty_tpl->tpl_vars['inf']->value->login=="VTEODOSIO"){?><li><a href="/info/ficha_clinica/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['PacienteId'];?>
">Ficha Clínica</a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="5")&&$_smarty_tpl->tpl_vars['livrotipo']->value==2){?><li><a href="/info/agenda/novasessao/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['Data'],"%d/%m/%Y");?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['SessaoId'];?>
">Agendar novas Sessões</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="5"||$_smarty_tpl->tpl_vars['Hor']->value['Status']=="6"){?><li role="separator" class="divider"></li><?php }?>
									<?php if ((($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"&&$_smarty_tpl->tpl_vars['livrotipo']->value==1)||($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"&&$_smarty_tpl->tpl_vars['livrotipo']->value==2))&&$_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes']=='1'){?><li><a href="/info/agenda/compareceu/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar Como Compareceu</a></li><?php }?>
									<?php if ((($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"&&$_smarty_tpl->tpl_vars['livrotipo']->value==1)||($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"&&$_smarty_tpl->tpl_vars['livrotipo']->value==2))&&$_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes']>1){?><li><a data-toggle="modal" data-target="#myCompareceu<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" href="">Marcar Como Compareceu</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"){?><li><a href="/info/agenda/naocompareceu/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Desmarcar Como Compareceu</a></li><?php }?>
									<?php if ((($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"&&$_smarty_tpl->tpl_vars['livrotipo']->value==1)||($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"&&$_smarty_tpl->tpl_vars['livrotipo']->value==2))&&$_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes']=='1'&&$_smarty_tpl->tpl_vars['Hor']->value['Faltas']!=$_smarty_tpl->tpl_vars['faltas']->value){?><li><a href="/info/agenda/faltou/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar Como Faltou</a></li><?php }?>
									<?php if ((($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"&&$_smarty_tpl->tpl_vars['livrotipo']->value==1)||($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"))&&$_smarty_tpl->tpl_vars['Hor']->value['Faltas']>=$_smarty_tpl->tpl_vars['faltas']->value&&$_smarty_tpl->tpl_vars['faltas']->value!="-1"){?><li><a data-toggle="modal" data-target="#myAbandonou<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" href="">Marcar Como Faltou</a></li><?php }?>
									<?php if ((($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"&&$_smarty_tpl->tpl_vars['livrotipo']->value==1)||($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"&&$_smarty_tpl->tpl_vars['livrotipo']->value==2))&&$_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes']>1&&$_smarty_tpl->tpl_vars['Hor']->value['Faltas']!=$_smarty_tpl->tpl_vars['faltas']->value){?><li><a data-toggle="modal" data-target="#myFaltou<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" href="">Marcar Como Faltou</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="5"){?><li><a href="/info/agenda/naofaltou/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Desmarcar Como Faltou</a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Adiantar']=="0"||$_smarty_tpl->tpl_vars['Hor']->value['Adiantar']==null)&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!=null&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!="3"&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!="2"&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!="6"){?><li><a href="/info/agenda/adiantar/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Deseja Antecipar</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Adiantar']=="1"){?><li><a href="/info/agenda/desadiantar/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Desmarcar como Antecipar</a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Confirmado']=="0"||$_smarty_tpl->tpl_vars['Hor']->value['Confirmado']==null)&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!=null&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!="3"&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!="2"&&$_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes']=='1'&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!="6"){?><li><a href="/info/agenda/confirma/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar como Confirmado</a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Confirmado']=="0"||$_smarty_tpl->tpl_vars['Hor']->value['Confirmado']==null)&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!=null&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!="3"&&$_smarty_tpl->tpl_vars['Hor']->value['Status']!="2"&&$_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes']>1){?><li><a data-toggle="modal" data-target="#myConfirmar<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" href="">Marcar como Confirmado</a></li><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Confirmado']=="1"){?><li><a href="/info/agenda/desconfirma/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Desmarcar como Confirmado</a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1")){?><li><a href="/info/agenda/cancelou/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar como Cancelou</a></li><?php }?>
									<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Status']=="6")){?><li><a href="/info/agenda/descancelou/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Desmarcar como Cancelou</a></li><?php }?>
								</ul>
								</div>
							</td>
						</tr>
						
						
						<div class="modal fade" id="myModal<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Dados do Agendamento</h4>
								</div>
								<div class="modal-body">
															<div class="row">
																<div class="col-md-7">
																	<h4>Agenda</h4>
																	<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['Hor']->value['Descricao']);?>
</label>
																</div>
																<div class="col-md-3">
																	<h4>Data</h4>
																	<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['Data'],"%d/%m/%Y");?>
</label>
																</div>
																<div class="col-md-2">
																	<h4>Hora</h4>
																	<label><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Hora'];?>
</label>
																</div>
															</div>
															
															<div class="row">
																<div class="col-md-12">
																	<h4>Nome do Paciente</h4>
																	<label><?php echo $_smarty_tpl->tpl_vars['Hor']->value['NomePaciente'];?>
</label>
																</div>
															</div>
															<div class="row">
																<div class="col-md-5">
																	<h4>Data de Nascimento</h4>
																	<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['DataNasc'],"%d/%m/%Y");?>
</label>
																</div>
																<div class="col-md-4">
																	<h4>Telefone</h4>
																	<label><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Telefone'];?>
</label>
																</div>
																<div class="col-md-3">
																	<h4>Celular</h4>
																	<label><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Celular'];?>
</label>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<h4>Procedimento</h4>
																	<label><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Exame'];?>
<?php if ($_smarty_tpl->tpl_vars['livrotipo']->value==2&&$_smarty_tpl->tpl_vars['Hor']->value['Exame']!=''){?> (<?php echo $_smarty_tpl->tpl_vars['Hor']->value['SessaoId'];?>
ª SESSAO)<?php }?></label>
																</div>
																<div class="col-md-6">
																	<h4>Convênio</h4>
																	<label><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Convenio'];?>
</label>
																</div>
															</div>
															<div class="row">
																<div class="col-md-12">
																	<h4>Observações</h4>
																	<label><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Observacoes'];?>
</label>
																</div>
															</div>
															
															<div class="row">
																<?php if ($_smarty_tpl->tpl_vars['Hor']->value['AgendadoPor']!=''){?>
																<div class="col-md-6">
																	<h4>Agendado Por</h4>
																	<label><?php echo $_smarty_tpl->tpl_vars['Hor']->value['UsuarioAgendamento'];?>
</label><br>
																	<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['DataAgendado'],"%d/%m/%Y");?>
 - <?php echo $_smarty_tpl->tpl_vars['Hor']->value['HoraAgendado'];?>
</label>
																</div>
																<?php }else{ ?>
																<div class="col-md-6">
																	<h4>Agendado Em</h4>
																	<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['DataAgendado'],"%d/%m/%Y");?>
 - <?php echo $_smarty_tpl->tpl_vars['Hor']->value['HoraAgendado'];?>
</label>
																</div>
																<?php }?>
																<?php if ($_smarty_tpl->tpl_vars['Hor']->value['UsuarioAlteracao']!=''){?>
																<div class="col-md-6">
																	<h4>Último Usuário</h4>
																	<label><?php echo $_smarty_tpl->tpl_vars['Hor']->value['UsuarioAlteracao'];?>
</label><br>
																	<label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['DataAlteracao'],"%d/%m/%Y");?>
 - <?php echo $_smarty_tpl->tpl_vars['Hor']->value['HoraAlteracao'];?>
</label>
																</div>
																<?php }?>
																<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Chegada']!=''){?>
																<div class="col-md-6">
																	<h4>Hora Chegada</h4>
																	<label><?php echo substr($_smarty_tpl->tpl_vars['Hor']->value['Chegada'],0,5);?>
</label>
																</div>
																<?php }?>
															</div>
															
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"){?><a href="/info/agenda/compareceu/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
" class="btn btn-sm btn-success">Marcar Como Compareceu</a><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="4"){?><a href="/info/agenda/naocompareceu/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
" class="btn btn-sm btn-success">Desmarcar Como Compareceu</a><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"){?><a href="/info/agenda/faltou/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
" class="btn btn-sm btn-primary">Marcar Como Faltou</a><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="5"){?><a href="/info/agenda/naofaltou/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
" class="btn btn-sm btn-primary">Desmarcar Como Faltou</a><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['Hor']->value['Status']=="1"){?><a data-toggle="modal" data-target="#myCancelar<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" href="" class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</a><?php }?>
								</div>
								</div>
							</div>
							</div>
							
							
							
							<div class="modal fade" id="myModalResposta<?php echo $_smarty_tpl->tpl_vars['Hor']->value['MSGID'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<div class="row">
												<div class="col-md-12">
													<h3>Resposta via SMS</h3>
												</div>
											</div>
										</div>
										<div class="modal-body">
										<?php  $_smarty_tpl->tpl_vars['RespostaSMS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RespostaSMS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RespostasSMS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RespostaSMS']->key => $_smarty_tpl->tpl_vars['RespostaSMS']->value){
$_smarty_tpl->tpl_vars['RespostaSMS']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['Hor']->value['MSGID']==$_smarty_tpl->tpl_vars['RespostaSMS']->value['MSGID']){?>
											<div class="row">
												<div class="col-md-12">
													<h4><?php echo $_smarty_tpl->tpl_vars['RespostaSMS']->value['NUMEROTELEFONE'];?>
(<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['RespostaSMS']->value['DATA'],"%d/%m/%Y");?>
):</h4>
													<label><?php echo $_smarty_tpl->tpl_vars['RespostaSMS']->value['MENSAGEM'];?>
</label>
												</div>
											</div>
										<?php }?>
										<?php } ?>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
										</div>
									</div>
								</div>
							</div>
							
							<div class="modal fade" id="myCancelar<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<div class="row">
												<div class="col-md-12">
													<h3>Confirmação de Cancelamento</h3>
												</div>
											</div>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-12">
													<label>Você confirma o cancelamento do Paciente <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['NomePaciente'];?>
</b> no dia <b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['Data'],"%d/%m/%Y");?>
</b> às <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Hora'];?>
</b>?</label>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<a class="btn btn-danger" href="/info/agenda/cancelar/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Cancelar Agendamento</a>
											<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
										</div>
									</div>
								</div>
							</div>
							
							<div class="modal fade" id="myCancelarTodas<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<div class="row">
												<div class="col-md-12">
													<h3>Confirmação de Cancelamento - Sessões Futuras</h3>
												</div>
											</div>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-12">
													<label>Você confirma o cancelamento de Todas as Sessões Futuras do Paciente <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['NomePaciente'];?>
</b> incluindo do dia <b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Hor']->value['Data'],"%d/%m/%Y");?>
</b>?</label>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<a class="btn btn-danger" href="/info/agenda/cancelarfuturas/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Cancelar Agendamentos Futuros</a>
											<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
										</div>
									</div>
								</div>
							</div>
							
							<div class="modal fade" id="myConfirmar<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<div class="row">
												<div class="col-md-12">
													<h3>Confirmar todos os agendamentos deste Paciente?</h3>
												</div>
											</div>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-12">
													<label>Paciente <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['NomePaciente'];?>
</b> possui mais <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes']-1;?>
</b> agendamento<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes'])-1>1){?>s<?php }?> neste mesmo dia. Deseja marcar todas como confirmado?</label>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
											<a class="btn btn-default" href="/info/agenda/confirma/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar apenas esse</a>
											<a class="btn btn-default" href="/info/agenda/confirmatodos/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['PacienteId'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar Todos</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="modal fade" id="myCompareceu<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<div class="row">
												<div class="col-md-12">
													<h3>Marcar como compareceu em todos os agendamentos do dia deste Paciente?</h3>
												</div>
											</div>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-12">
													<label>Paciente <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['NomePaciente'];?>
</b> possui mais <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes']-1;?>
</b> agendamento<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes'])-1>1){?>s<?php }?> neste mesmo dia. Deseja marcar todas como compareceu?</label>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
											<a class="btn btn-default" href="/info/agenda/compareceu/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar apenas esse</a>
											<a class="btn btn-default" href="/info/agenda/compareceutodos/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['PacienteId'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar Todos</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="modal fade" id="myFaltou<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<div class="row">
												<div class="col-md-12">
													<h3>Marcar como faltou em todos os agendamentos do dia deste Paciente?</h3>
												</div>
											</div>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-12">
													<label>Paciente <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['NomePaciente'];?>
</b> possui mais <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes']-1;?>
</b> agendamento<?php if (($_smarty_tpl->tpl_vars['Hor']->value['Confirmacoes'])-1>1){?>s<?php }?> neste mesmo dia. Deseja marcar todas como faltou?</label>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
											<a class="btn btn-default" href="/info/agenda/faltou/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar apenas esse</a>
											<a class="btn btn-default" href="/info/agenda/faltoutodos/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['PacienteId'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar Todos</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="modal fade" id="myAbandonou<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<div class="row">
												<div class="col-md-12">
													<h3>Número de faltas atingiu número de abandono</h3>
												</div>
											</div>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-12">
													<label>Paciente <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['NomePaciente'];?>
</b> possui <b><?php echo $_smarty_tpl->tpl_vars['Hor']->value['Faltas']+1;?>
</b> faltas atingindo abandono. Deseja marcar como abandono e excluir agendamentos futuros?</label>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
											<a class="btn btn-default" href="/info/agenda/faltou/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar falta apenas</a>
											<a class="btn btn-default" href="/info/agenda/abandono/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['Id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Hor']->value['LivroId'];?>
">Marcar Abandono</a>
										</div>
									</div>
								</div>
							</div>
							
						<?php } ?>
					</table>
				</div>
			</div>
	<?php }?>
	
	<div class="modal fade" id="imprimiAgenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-md-12">
							<h3>Impressão de Agendas</h3>
						</div>
					</div>
				</div>
				
				<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/agenda_imprimir/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
" target="_blank">
				
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<label>Selecione a agenda que deseja imprimir</label>
							<select name="livroid" class="form-control">
							<option value="0">TODAS</option>
							<?php  $_smarty_tpl->tpl_vars['Liv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv']->key => $_smarty_tpl->tpl_vars['Liv']->value){
$_smarty_tpl->tpl_vars['Liv']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['Liv']->value['LivroId'];?>
" <?php if ($_smarty_tpl->tpl_vars['livroid']->value==$_smarty_tpl->tpl_vars['Liv']->value['LivroId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Liv']->value['Descricao'];?>
</option>
							<?php } ?>
							</select>
						</div>
					</div>
					</br>
					<div class="row">
						<div class="col-md-1">
							<label><input type="checkbox" name="optionobservacoes" value="1" checked></label>
						</div>
						<div class="col-md-11">
							<label>Imprimir observações da agenda</label>
						</div>
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="submit" class="btn btn-default">Imprimir</button>		
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
				
				</form>
			</div>
		</div>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="/styles/js/dncalendar.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			var my_calendar = $("#dncalendar-container").dnCalendar({
				minDate: "2019-06-15",
				maxDate: "2021-06-02",
				defaultDate: "<?php echo $_smarty_tpl->tpl_vars['atual']->value;?>
",
				monthNames: [ "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" ], 
				monthNamesShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
				dayNames: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
                dayNamesShort: [ 'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab' ],
                dataTitles: { defaultDate: '', today : 'Hoje' },
                notes: [
					<?php  $_smarty_tpl->tpl_vars['Fer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Fer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FeriadosVariavel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Fer']->key => $_smarty_tpl->tpl_vars['Fer']->value){
$_smarty_tpl->tpl_vars['Fer']->_loop = true;
?>
                		{ "date": "<?php echo $_smarty_tpl->tpl_vars['Fer']->value['ano'];?>
-<?php echo $_smarty_tpl->tpl_vars['Fer']->value['mes'];?>
-<?php echo $_smarty_tpl->tpl_vars['Fer']->value['dia'];?>
", "note": ["<?php echo $_smarty_tpl->tpl_vars['Fer']->value['Descricao'];?>
"] },
					<?php } ?>
					<?php  $_smarty_tpl->tpl_vars['FerFixos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FerFixos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FeriadosFixos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FerFixos']->key => $_smarty_tpl->tpl_vars['FerFixos']->value){
$_smarty_tpl->tpl_vars['FerFixos']->_loop = true;
?><?php  $_smarty_tpl->tpl_vars['AnosFeriados'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['AnosFeriados']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Anos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['AnosFeriados']->key => $_smarty_tpl->tpl_vars['AnosFeriados']->value){
$_smarty_tpl->tpl_vars['AnosFeriados']->_loop = true;
?>
                		{ "date": "<?php echo $_smarty_tpl->tpl_vars['AnosFeriados']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['FerFixos']->value['mes'];?>
-<?php echo $_smarty_tpl->tpl_vars['FerFixos']->value['dia'];?>
", "note": ["<?php echo $_smarty_tpl->tpl_vars['FerFixos']->value['Descricao'];?>
"] },
					<?php } ?><?php } ?>
                		],
				dias_livres: [
					<?php  $_smarty_tpl->tpl_vars['PintarAg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PintarAg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PintarAgendas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PintarAg']->key => $_smarty_tpl->tpl_vars['PintarAg']->value){
$_smarty_tpl->tpl_vars['PintarAg']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['PintarAg']->value['Total']>$_smarty_tpl->tpl_vars['PintarAg']->value['Preenchido']){?>
                		{ "date": "<?php echo $_smarty_tpl->tpl_vars['PintarAg']->value['ano'];?>
-<?php echo $_smarty_tpl->tpl_vars['PintarAg']->value['mes'];?>
-<?php echo $_smarty_tpl->tpl_vars['PintarAg']->value['dia'];?>
", "note": ["<?php echo $_smarty_tpl->tpl_vars['PintarAg']->value['Descricao'];?>
"] },
					<?php }?>
					<?php } ?>
                		],
				dias_ocupados: [
					<?php  $_smarty_tpl->tpl_vars['PintarAg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PintarAg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PintarAgendas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PintarAg']->key => $_smarty_tpl->tpl_vars['PintarAg']->value){
$_smarty_tpl->tpl_vars['PintarAg']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['PintarAg']->value['Total']==$_smarty_tpl->tpl_vars['PintarAg']->value['Preenchido']&&$_smarty_tpl->tpl_vars['PintarAg']->value['Total']!=0){?>
                		{ "date": "<?php echo $_smarty_tpl->tpl_vars['PintarAg']->value['ano'];?>
-<?php echo $_smarty_tpl->tpl_vars['PintarAg']->value['mes'];?>
-<?php echo $_smarty_tpl->tpl_vars['PintarAg']->value['dia'];?>
", "note": ["<?php echo $_smarty_tpl->tpl_vars['PintarAg']->value['Descricao'];?>
"] },
					<?php }?>
					<?php } ?>
                		],
                showNotes: true,
                startWeek: 'sunday',
                dayClick: function(date, view) {
					window.location = '/info/agenda/' + date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear() + '/' + <?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
<?php if ($_smarty_tpl->tpl_vars['comandoespecial']->value==1||$_smarty_tpl->tpl_vars['comandoespecial']->value==2||$_smarty_tpl->tpl_vars['comandoespecial']->value==7){?> + '/' + <?php echo $_smarty_tpl->tpl_vars['comandoespecial']->value;?>
 + '/' + <?php echo $_smarty_tpl->tpl_vars['horreqid']->value;?>
<?php }?>;
                }
			});

			// init calendar
			my_calendar.build();

			// update calendar
			// my_calendar.update({
			// 	minDate: "2016-01-05",
			// 	defaultDate: "2016-05-04"
			// });
		});
		</script>
		

<link rel="stylesheet" href="/styles/css/dncalendar-skin.css">
<script src="/styles/bootstrap/js/bootstrap.js"></script>
<script src="/styles/js/core.info.js"></script>
<script type="text/javascript" src="/styles/js/info/core.js"></script>
<script src="/styles/js/validator.min.js"></script>



</body>
</html><?php }} ?>