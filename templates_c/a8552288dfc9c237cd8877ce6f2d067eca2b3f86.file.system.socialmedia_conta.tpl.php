<?php /* Smarty version Smarty-3.1.13, created on 2020-01-19 23:40:54
         compiled from "engine\view\InfoPanel\pages\SocialMedia\system.socialmedia_conta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223335e251336e80105-85934086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8552288dfc9c237cd8877ce6f2d067eca2b3f86' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\SocialMedia\\system.socialmedia_conta.tpl',
      1 => 1561603812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223335e251336e80105-85934086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'Designer' => 0,
    'nivel' => 0,
    'des' => 0,
    'designer' => 0,
    'Clientes' => 0,
    'cli' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e251336ee6d21_85649843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e251336ee6d21_85649843')) {function content_5e251336ee6d21_85649843($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Adicionado com sucesso!</div><?php }?>

<div class="step">
	<h1>Carteira de Clientes</h1>
	
	<?php  $_smarty_tpl->tpl_vars['des'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['des']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Designer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['des']->key => $_smarty_tpl->tpl_vars['des']->value){
$_smarty_tpl->tpl_vars['des']->_loop = true;
?><?php } ?>
	
	<?php if ($_smarty_tpl->tpl_vars['nivel']->value==1){?><div class="row">
		<div class="col-md-12">
			<h3>Nome</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['des']->value['Nome'];?>
</label>
		</div>
	</div><?php }?>
	
	<div class="row">
		<div class="col-md-12">
			<?php if ($_smarty_tpl->tpl_vars['nivel']->value==1){?><div>
				<a href="/info/socialmedia/novocliente/<?php echo $_smarty_tpl->tpl_vars['designer']->value;?>
" class="btn btn-sm btn-primary">Adicionar Cliente</a>
			</div><?php }?>
			
			<table class="table table-hover table-stripped">
				<thead>
					<tr>
						<th>Cliente</th>
						<th>Plano</th>
						<th>Valor</th>
						<th>Opções</th>
					</tr>
				</thead>
				<?php  $_smarty_tpl->tpl_vars['cli'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cli']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cli']->key => $_smarty_tpl->tpl_vars['cli']->value){
$_smarty_tpl->tpl_vars['cli']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['cli']->value['Nome'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['cli']->value['Plano'];?>
 Artes por Mês</td>
						<td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['cli']->value['Valor'],2,',','.');?>
</td>
						<td><a href="/info/socialmedia/painel/<?php echo $_smarty_tpl->tpl_vars['cli']->value['Id'];?>
" class="btn btn-sm btn-primary">Acessar Conta</a></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>