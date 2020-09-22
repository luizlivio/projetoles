<?php /* Smarty version Smarty-3.1.13, created on 2019-07-03 00:19:09
         compiled from "engine\view\InfoPanel\pages\Modulos\system.modulos_ficha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243235cde1e820b0a41-68430571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df00e34193e407c2031d2195fe017529018e3f80' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Modulos\\system.modulos_ficha.tpl',
      1 => 1561603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243235cde1e820b0a41-68430571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cde1e821298f0_80610406',
  'variables' => 
  array (
    'status' => 0,
    'Modulos' => 0,
    'Modulo' => 0,
    'Banco' => 0,
    'Usuarios' => 0,
    'Usu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cde1e821298f0_80610406')) {function content_5cde1e821298f0_80610406($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Usuário Vinculado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Usuário Desvinculado com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Módulo Editado com sucesso!</div><?php }?>

<div class="step">
	<h1>Módulo</h1>
	
	<?php  $_smarty_tpl->tpl_vars['Modulo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Modulo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Modulos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Modulo']->key => $_smarty_tpl->tpl_vars['Modulo']->value){
$_smarty_tpl->tpl_vars['Modulo']->_loop = true;
?>
	<div><a href="/info/modulos/modulos_edita/<?php echo $_smarty_tpl->tpl_vars['Modulo']->value['ID'];?>
" class="btn btn-sm btn-primary">Editar</a> <a href="/info/modulos/pagarreceber_bancos_exclui/<?php echo $_smarty_tpl->tpl_vars['Banco']->value['BANCOID'];?>
" class="btn btn-sm btn-danger">Excluir</a></div>
	
	<div class="row">
		<div class="col-md-2">
			<h3>Código</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Modulo']->value['ID'];?>
</label>
		</div>
		<div class="col-md-4">
			<h3>Descrição</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Modulo']->value['MODULO'];?>
</label>
		</div>
		<div class="col-md-6">
			<h3>Link</h3>
			<label><?php echo $_smarty_tpl->tpl_vars['Modulo']->value['LINK'];?>
</label>
		</div>
	</div>
	<?php } ?>
	<br>
	<hr>
	<h3>Usuários</h3>
	<div><a href="/info/modulos/vinculoUsuario/<?php echo $_smarty_tpl->tpl_vars['Modulo']->value['ID'];?>
" class="btn btn-sm btn-primary">Vincular Usuário</a></div>
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Nome</th>
			<th>Permissões</th>
			<th>Desvincular</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Usu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Usu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Usu']->key => $_smarty_tpl->tpl_vars['Usu']->value){
$_smarty_tpl->tpl_vars['Usu']->_loop = true;
?>
        <tr>
            <td><?php if ($_smarty_tpl->tpl_vars['Usu']->value['Userid']=="0"){?>Todos<?php }else{ ?><?php echo utf8_encode($_smarty_tpl->tpl_vars['Usu']->value['Nome']);?>
<?php }?></td>
			<td><?php if ($_smarty_tpl->tpl_vars['Usu']->value['Permissao']==0){?>Somente Leitura<?php }elseif($_smarty_tpl->tpl_vars['Usu']->value['Permissao']==1){?>Administrador<?php }?></td>
            <td><a href="/info/modulos/desvinculoUsuario/<?php echo $_smarty_tpl->tpl_vars['Modulo']->value['ID'];?>
/<?php echo $_smarty_tpl->tpl_vars['Usu']->value['Userid'];?>
" class="btn btn-sm btn-primary">Desvincular</a></td>
        </tr>
		<?php } ?>
    </table>
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>