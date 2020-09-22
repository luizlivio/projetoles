<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 13:35:08
         compiled from "engine\view\InfoPanel\pages\Usuarios_Cliente\system.usuarios_ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71305cd084de9e0938-82861977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3cbaad61e6877a42767993cc59c4477e427168c' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Usuarios_Cliente\\system.usuarios_ficha.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71305cd084de9e0938-82861977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cd084dea440c4_17147646',
  'variables' => 
  array (
    'status' => 0,
    'usuarios' => 0,
    'usu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd084dea440c4_17147646')) {function content_5cd084dea440c4_17147646($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Usuário Editado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Usuário Adicionado Ao Painel Administrativo!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Usuário Retirado do Painel Administrativo!</div><?php }?>

<div class="step">					
		<h1>Ficha Cadastral</h1>
	
	<?php  $_smarty_tpl->tpl_vars['usu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usu']->key => $_smarty_tpl->tpl_vars['usu']->value){
$_smarty_tpl->tpl_vars['usu']->_loop = true;
?>
	<div><a href="/info/usuarios_cliente/usuarios_edita/<?php echo $_smarty_tpl->tpl_vars['usu']->value['UserId'];?>
" class="btn btn-sm btn-primary">Editar Dados da Conta</a> </div>

	<div class="row">
		<div class="col-md-1">
			<h3>Id</h3>
			<label><?php echo utf8_encode($_smarty_tpl->tpl_vars['usu']->value['UserId']);?>
</label>
		</div>

		<div class="col-md-6">
			<h3>Nome</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['Nome'];?>
</label>
		</div>

		<div class="col-md-2">
			<h3>Ativo</h3>
			<label><?php if ($_smarty_tpl->tpl_vars['usu']->value['Ativo']!="1"){?>DESATIVADO<?php }else{ ?>ATIVO<?php }?></label>
		</div>
		
		<div class="col-md-3">
			<h3>CPF</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['CPF'];?>
</label>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3">
			<h3>Tipo</h3>
			<label><?php if ($_smarty_tpl->tpl_vars['usu']->value['Tipo']=="U"){?>Administrativo<?php }elseif($_smarty_tpl->tpl_vars['usu']->value['Tipo']=="M"){?>Médico/Fisioterapeuta<?php }?></label>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['usu']->value['Tipo']=="M"){?>
			<div class="col-md-3">
				<h3>Conselho</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['Conselho'];?>
</label>
			</div>
			<div class="col-md-3">
				<h3>Registro</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['Registro'];?>
</label>
			</div>
			<div class="col-md-1">
				<h3>UF</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['Estado'];?>
</label>
			</div>
			<div class="col-md-2">
				<h3>CBOS</h3>
				<label><?php echo $_smarty_tpl->tpl_vars['usu']->value['CBOS'];?>
</label>
			</div>
		<?php }?>
	</div>
	<?php } ?>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>