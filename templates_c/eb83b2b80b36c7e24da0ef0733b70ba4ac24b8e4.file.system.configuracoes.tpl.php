<?php /* Smarty version Smarty-3.1.13, created on 2019-09-30 22:27:41
         compiled from "engine\view\InfoPanel\pages\Configuracoes\system.configuracoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223445d92ab8d53ce67-30908451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb83b2b80b36c7e24da0ef0733b70ba4ac24b8e4' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Configuracoes\\system.configuracoes.tpl',
      1 => 1561603800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223445d92ab8d53ce67-30908451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enviado' => 0,
    'Servidores' => 0,
    'Server' => 0,
    'Modens' => 0,
    'modem' => 0,
    'Hierarquias' => 0,
    'hierarquia' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d92ab8d5ff808_62027032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d92ab8d5ff808_62027032')) {function content_5d92ab8d5ff808_62027032($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['enviado']->value==1){?><div class="alert alert-success" role="alert">Modem Incluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==2){?><div class="alert alert-success" role="alert">Modem Excluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==3){?><div class="alert alert-success" role="alert">Modem Editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==4){?><div class="alert alert-success" role="alert">Modem Ativado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==5){?><div class="alert alert-success" role="alert">Modem Desativado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==6){?><div class="alert alert-success" role="alert">Servidor Adicionado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==7){?><div class="alert alert-danger" role="alert">Servidor Não pode ser Excluído pois há modens vinculados à ele</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==8){?><div class="alert alert-success" role="alert">Servidor Excluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==9){?><div class="alert alert-danger" role="alert">Não é possível desativar o Modem pois só existe 1 ativo</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==10){?><div class="alert alert-success" role="alert">Teste Enviado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==11){?><div class="alert alert-success" role="alert">Testes Enviados com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==12){?><div class="alert alert-success" role="alert">Ocupante Cadastrado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==13){?><div class="alert alert-success" role="alert">Ocupante Editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==14){?><div class="alert alert-success" role="alert">Ocupante Excluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==15){?><div class="alert alert-danger" role="alert">Não há modens ativos!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==16){?><div class="alert alert-success" role="alert">Fila de Espera Rearmada!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==17){?><div class="alert alert-success" role="alert">Não há mensagens na fila de espera!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['enviado']->value==18){?><div class="alert alert-success" role="alert">Configurações Alteradas com Sucesso!</div><?php }?>

<div class="step">
	<h1>Configurações</h1>
	<br>
	
	<h3>Servidores</h3>
	<a href="/info/configuracoes/novoserver" class="btn btn-sm btn-primary">Novo Servidor</a> <a href="/info/configuracoes/testegeral" class="btn btn-sm btn-primary">Testar Todos os Modens</a> <a href="/info/configuracoes/rearm" class="btn btn-sm btn-primary">Rearmar Fila de Pendentes</a>
	
	<?php  $_smarty_tpl->tpl_vars['Server'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Server']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Servidores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Server']->key => $_smarty_tpl->tpl_vars['Server']->value){
$_smarty_tpl->tpl_vars['Server']->_loop = true;
?>
	<div><label>Modens do Servidor <?php echo $_smarty_tpl->tpl_vars['Server']->value['Id'];?>
</label></div>
	<a href="/info/configuracoes/novomodem/<?php echo $_smarty_tpl->tpl_vars['Server']->value['Id'];?>
" class="btn btn-sm btn-primary">Novo Modem</a> <a href="/info/configuracoes/deleteserver/<?php echo $_smarty_tpl->tpl_vars['Server']->value['Id'];?>
" class="btn btn-sm btn-danger">Excluir Servidor</a>
	
	<br>
	
	<table class="table table-hover table-stripped">
		<thead>
			<tr>
				<th class="col-sm-1">Id</th>
				<th class="col-sm-2">Porta Serial</th>
				<th class="col-sm-4">Número de Telefone</th>
				<th class="col-sm-1">Envios</th>
				<th class="col-sm-1">Ações</th>
				<th class="col-sm-1">Teste</th>
				<th class="col-sm-1"></th>
				<th class="col-sm-1"></th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['modem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['modem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Modens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['modem']->key => $_smarty_tpl->tpl_vars['modem']->value){
$_smarty_tpl->tpl_vars['modem']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['Server']->value['Id']==$_smarty_tpl->tpl_vars['modem']->value['ServidorId']){?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['modem']->value['ModemId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['modem']->value['PortaSerial'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['modem']->value['Numero'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['modem']->value['Conta'];?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['modem']->value['Ativo']=="0"){?><a href="/info/configuracoes/ativamodem/<?php echo $_smarty_tpl->tpl_vars['modem']->value['ModemId'];?>
" class="btn btn-sm btn-primary">Ativar</a><?php }else{ ?><a href="/info/configuracoes/desativamodem/<?php echo $_smarty_tpl->tpl_vars['modem']->value['ModemId'];?>
" class="btn btn-sm btn-primary">Desativar</a><?php }?></td>
			<td><a href="/info/configuracoes/testemodem/<?php echo $_smarty_tpl->tpl_vars['modem']->value['ModemId'];?>
" class="btn btn-sm btn-primary">Testar</a></td>
			<td><a href="/info/configuracoes/editamodem/<?php echo $_smarty_tpl->tpl_vars['modem']->value['ModemId'];?>
" class="btn btn-sm btn-primary">Editar</a></td>
			<td><a href="/info/configuracoes/deletemodem/<?php echo $_smarty_tpl->tpl_vars['modem']->value['ModemId'];?>
" class="btn btn-sm btn-danger">Excluir</a></td>
        </tr>
        <?php }?><?php } ?>
		</tbody>
    </table>
	<?php } ?>
	
	<hr />
	
	<h3>Cargos e Funções</h3>
	<a href="/info/configuracoes/novohierarquia" class="btn btn-sm btn-primary">Novo Ocupante</a>
	
	<table class="table table-hover table-stripped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Telefone</th>
				<th>Cargo</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['hierarquia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hierarquia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Hierarquias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hierarquia']->key => $_smarty_tpl->tpl_vars['hierarquia']->value){
$_smarty_tpl->tpl_vars['hierarquia']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Nome'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Email'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Telefone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Cargo'];?>
</td>
			<td><a href="/info/configuracoes/editahierarquia/<?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Id'];?>
" class="btn btn-sm btn-primary">Editar</a></td>
			<td><a href="/info/configuracoes/deletehierarquia/<?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Id'];?>
" class="btn btn-sm btn-danger">Excluir</a></td>
        </tr>
        <?php } ?>
		</tbody>
    </table>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>