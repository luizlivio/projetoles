<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 12:19:09
         compiled from "engine\view\InfoPanel\pages\Agenda\system.agenda_estatisticas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22855cd08e7766ae30-57721167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb06e884e66f5810ea1dae45b6dd9a099480a15e' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Agenda\\system.agenda_estatisticas.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22855cd08e7766ae30-57721167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd08e776dd159_23156539',
  'variables' => 
  array (
    'Livros' => 0,
    'livro' => 0,
    'dia' => 0,
    'mes' => 0,
    'ano' => 0,
    'livroid' => 0,
    'horaini' => 0,
    'horafin' => 0,
    'PATH' => 0,
    'Livros2' => 0,
    'Liv2' => 0,
    'Convenios' => 0,
    'Conv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd08e776dd159_23156539')) {function content_5cd08e776dd159_23156539($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Estatísitcas da Agenda</h1>
	
	<?php  $_smarty_tpl->tpl_vars['livro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['livro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['livro']->key => $_smarty_tpl->tpl_vars['livro']->value){
$_smarty_tpl->tpl_vars['livro']->_loop = true;
?><?php } ?>
	
	<h4>Dados do Filtro: <?php echo $_smarty_tpl->tpl_vars['livro']->value['Descricao'];?>
 (<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
) <a data-toggle="modal" class="btn btn-sm btn-warning" data-target="#myObservacoesAgenda" href="">Alterar Filtro</a> </h4>
	<a href="/info/agenda/agenda_estatisticas_altera/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['horaini']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['horafin']->value;?>
" ></a>
	
	<div class="modal fade" id="myObservacoesAgenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-md-12">
							<h3>Editar Filtro</h3>
						</div>
					</div>
				</div>
				<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/agenda/agenda_estatisticas_altera">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<h4>Unidade:</h4>
							<select name="livroid" class="form-control">
								<?php  $_smarty_tpl->tpl_vars['Liv2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv2']->key => $_smarty_tpl->tpl_vars['Liv2']->value){
$_smarty_tpl->tpl_vars['Liv2']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['Liv2']->value['LivroId'];?>
" <?php if ($_smarty_tpl->tpl_vars['livroid']->value==$_smarty_tpl->tpl_vars['Liv2']->value['LivroId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Liv2']->value['Descricao'];?>
</option>
								<?php } ?>
							</select>
							<h4>Data:</h4>
							<input type="text" name="data" id="data" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
">
							<h4>Hora Inicial:</h4>
							<input type="text" name="horaini" id="hora" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['horaini']->value;?>
">
							<h4>Hora Fianl:</h4>
							<input type="text" name="horafin" id="hora2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['horafin']->value;?>
">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Filtrar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	
	<table class="table table-hover table-stripped">
		<tr>
            <td>Quantidade de Horários</td>
			<td><?php echo $_smarty_tpl->tpl_vars['livro']->value['TOTAL'];?>
</td>
        </tr>
		<tr>
            <td>Horários Livres</td>
			<td><?php echo $_smarty_tpl->tpl_vars['livro']->value['LIVRES'];?>
</td>
        </tr>
		<tr>
            <td>Pacientes Agendados</td>
			<td><?php echo $_smarty_tpl->tpl_vars['livro']->value['TOTAL']-$_smarty_tpl->tpl_vars['livro']->value['LIVRES'];?>
</td>
        </tr>
		<tr>
            <td>Comparecimentos</td>
			<td><?php echo $_smarty_tpl->tpl_vars['livro']->value['COMPARECEU'];?>
</td>
        </tr>
		<tr>
            <td>Faltas</td>
			<td><?php echo $_smarty_tpl->tpl_vars['livro']->value['FALTOU'];?>
</td>
        </tr>
    </table>
	
	<h3>Convênios</h3>
	<table class="table table-hover table-stripped">	
		<thead>
		<tr>
            <th>Convênio</th>
			<th>Quantidade</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Conv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Conv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Convenios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Conv']->key => $_smarty_tpl->tpl_vars['Conv']->value){
$_smarty_tpl->tpl_vars['Conv']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['Conv']->value['Descricao'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['Conv']->value['Quantidade'];?>
</td>
			</tr>
		<?php } ?>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>