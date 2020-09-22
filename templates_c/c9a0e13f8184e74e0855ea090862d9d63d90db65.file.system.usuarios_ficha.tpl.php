<?php /* Smarty version Smarty-3.1.13, created on 2019-07-18 01:00:00
         compiled from "engine\view\InfoPanel\pages\Usuarios\system.usuarios_ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140155cf956256c2568-12364276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9a0e13f8184e74e0855ea090862d9d63d90db65' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Usuarios\\system.usuarios_ficha.tpl',
      1 => 1563422397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140155cf956256c2568-12364276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cf956257456e0_16414648',
  'variables' => 
  array (
    'status' => 0,
    'usuarios' => 0,
    'usu' => 0,
    'usuarioscliente' => 0,
    'usucli' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf956257456e0_16414648')) {function content_5cf956257456e0_16414648($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Usuário Editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Usuário Adicionado Ao Painel Administrativo!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Usuário Retirado do Painel Administrativo!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==4){?><div class="alert alert-success" role="alert">Usuário Incluido com sucesso!</div><?php }?>

<div class="step">
	<h1>Ficha Cadastral</h1>
	
	<?php  $_smarty_tpl->tpl_vars['usu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usu']->key => $_smarty_tpl->tpl_vars['usu']->value){
$_smarty_tpl->tpl_vars['usu']->_loop = true;
?>
	<div><a href="/info/usuarios/usuarios_edita/<?php echo $_smarty_tpl->tpl_vars['usu']->value['userid'];?>
" class="btn btn-sm btn-primary">Editar Dados da Conta</a> <?php if ($_smarty_tpl->tpl_vars['usu']->value['inativo']=="F"&&$_smarty_tpl->tpl_vars['usu']->value['PainelAdm']=="0"){?><a href="/info/usuarios/usuarios_acompanha/<?php echo $_smarty_tpl->tpl_vars['usu']->value['userid'];?>
" class="btn btn-sm btn-warning">Acompanhar na tela Inicial</a><?php }?> <?php if ($_smarty_tpl->tpl_vars['usu']->value['inativo']=="F"&&$_smarty_tpl->tpl_vars['usu']->value['PainelAdm']=="1"){?><a href="/info/usuarios/usuarios_desacompanha/<?php echo $_smarty_tpl->tpl_vars['usu']->value['userid'];?>
" class="btn btn-sm btn-warning">Retirar da tela Inicial</a><?php }?></div>

	<div class="row">
		<div class="col-md-1">
			<h3>Id</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['userid'];?>
</label>
		</div>

		<div class="col-md-6">
			<h3>Nome</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['nome'];?>
</label>
		</div>

		<div class="col-md-5">
			<h3>Status</h3>
			<label><?php if ($_smarty_tpl->tpl_vars['usu']->value['inativo']=="T"){?>DESATIVADO<?php }else{ ?>ATIVO<?php }?></label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-2">
			<h3>Login</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['LOGIN'];?>
</label>
		</div>

		<div class="col-md-3">
			<h3>SenhaSite</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['usu']->value['senhasite']);?>
</label>
		</div>
	
		<div class="col-md-7">
			<h3>Email</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['Email'];?>
</label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-5">
			<h3>Telefone</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['Telefone'];?>
</label>
		</div>
		
		<div class="col-md-4">
			<h3>DDD (Saída)</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['DDD'];?>
</label>
		</div>
		
		<div class="col-md-2">
			<h3>Valor</h3>
			<label>R$ <?php echo number_format($_smarty_tpl->tpl_vars['usu']->value['Valor'],2,',','.');?>
</label>
		</div>
	</div>
	
	<?php } ?>
	
	<hr />
	
	<h1>Usuários da Clínica</h1>
		<div><a href="/info/usuarios/usuarioscliente_novo/<?php echo $_smarty_tpl->tpl_vars['usu']->value['userid'];?>
" class="btn btn-sm btn-primary">Novo Usuario</a></div>
		
		<form method="post" action="/info/usuarios/PesquisaUsuariosCliente">
		
		<div class="helper-display-none">
			<input type="text" name="userid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value['userid'];?>
">
		</div>
	
		<br>
		
		<div class="row">
			<div class="col-lg-12">
			
				<div class="input-group">
				<div>
					<input type="text" name="pesquisa" class="form-control" placeholder="Procurar por ...">
				</div>
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit">Pesquisar</button>
				</span>
				</div>
			</div>
		</div>
		
		</form>
		
		<br>
		
		<table class="table table-hover table-stripped">
			<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Grupo</th>
				<th>Status</th>
				<th>Acessar</th>
			</tr>
			</thead>
			<?php  $_smarty_tpl->tpl_vars['usucli'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usucli']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarioscliente']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usucli']->key => $_smarty_tpl->tpl_vars['usucli']->value){
$_smarty_tpl->tpl_vars['usucli']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['usucli']->value['UserId'];?>
</td>
				<td><?php echo utf8_encode($_smarty_tpl->tpl_vars['usucli']->value['Nome']);?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['usucli']->value['Tipo']=="M"){?>Médico/Fisioterapeuta<?php }elseif($_smarty_tpl->tpl_vars['usucli']->value['Tipo']=="U"){?>Administrativo<?php }?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['usucli']->value['Ativo']=='1'){?>ATIVO<?php }else{ ?>DESATIVADO<?php }?></td>
				<td><a href="/info/usuarios/usuarioscliente_ficha/<?php echo $_smarty_tpl->tpl_vars['usucli']->value['UserId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
			</tr>
			<?php } ?>
		</table>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>