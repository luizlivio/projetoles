<?php /* Smarty version Smarty-3.1.13, created on 2019-07-23 18:17:41
         compiled from "engine\view\InfoPanel\pages\Pedidos\system.pedidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38575d2ffa89a617f7-90005652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c139b8216a2fc5e217eaa22aee08ff2cd795931d' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Pedidos\\system.pedidos.tpl',
      1 => 1563916658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38575d2ffa89a617f7-90005652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d2ffa89ac71f5_17789483',
  'variables' => 
  array (
    'Administradores' => 0,
    'status' => 0,
    'PATH' => 0,
    'admin' => 0,
    'Pedidos' => 0,
    'Pedido' => 0,
    'contas' => 0,
    'conta' => 0,
    'pagina' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2ffa89ac71f5_17789483')) {function content_5d2ffa89ac71f5_17789483($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\engine\\libs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Administradores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value){
$_smarty_tpl->tpl_vars['admin']->_loop = true;
?><?php } ?>

<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Pedido Médico excluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Pedido Médico incluído com sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Pedido Médico editado com sucesso!</div><?php }?>

<div class="step">
	<h1>Pedidos Médicos</h1>
	
	<a href="/info/pedidos/pedidos_novo" class="btn btn-sm btn-primary">Novo Pedido</a>
	<br>
	<br>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/pedidos/PesquisaPedidos">
		<div class="row">
			<div class="col-lg-12">
			<div class="input-group">
			  <div id="a"><input type="text" name="pesquisa" class="form-control" placeholder="Procurar por..."></div>
			  <span class="input-group-btn">
				<button class="btn btn-default" type="submit">Pesquisar</button>
			  </span>
			</div>
		  </div>
		</div>
	</form>

	<table class="table table-hover table-stripped">
        <thead>
		<tr>
			<th>Id</th>
            <th>Nome</th>
			<th>Data</th>
			<th>Acessar</th>
			<th>Imprimir</th>
			<?php if ($_smarty_tpl->tpl_vars['admin']->value['conta']==1){?><th>Fazer Checklist</th><?php }?>
			<th>Excluir</th>
        </tr>
		</thead>
        <?php  $_smarty_tpl->tpl_vars['Pedido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Pedido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Pedidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Pedido']->key => $_smarty_tpl->tpl_vars['Pedido']->value){
$_smarty_tpl->tpl_vars['Pedido']->_loop = true;
?>
        <tr>
            <td><font color="<?php if ($_smarty_tpl->tpl_vars['Pedido']->value['Status']=="1"){?>#CC0000<?php }else{ ?>#007E33<?php }?>"><?php echo $_smarty_tpl->tpl_vars['Pedido']->value['PedidoId'];?>
</font></td>
			<td><font color="<?php if ($_smarty_tpl->tpl_vars['Pedido']->value['Status']=="1"){?>#CC0000<?php }else{ ?>#007E33<?php }?>"><?php echo $_smarty_tpl->tpl_vars['Pedido']->value['NomePaciente'];?>
</font></td>
            <td><font color="<?php if ($_smarty_tpl->tpl_vars['Pedido']->value['Status']=="1"){?>#CC0000<?php }else{ ?>#007E33<?php }?>"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Pedido']->value['Data'],"%d/%m/%Y");?>
</font></td>
			<td><a href="/info/pedidos/pedidos_editar/<?php echo $_smarty_tpl->tpl_vars['Pedido']->value['PedidoId'];?>
" class="btn btn-sm btn-primary">Acessar</a></td>
			<td><a href="/info/pedidos/pedido_imprimir/<?php echo $_smarty_tpl->tpl_vars['Pedido']->value['PedidoId'];?>
" class="btn btn-sm btn-primary">Imprimir</a></td>
			<?php if ($_smarty_tpl->tpl_vars['admin']->value['conta']==1){?><td><a href="/info/pedidos/checklist/<?php echo $_smarty_tpl->tpl_vars['Pedido']->value['PedidoId'];?>
" class="btn btn-sm btn-primary">Fazer Checklist</a></td><?php }?>
			<td><a data-toggle="modal" data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['Pedido']->value['PedidoId'];?>
" href="" class="btn btn-sm btn-danger">Excluir</a></li></td>
        </tr>
		
		<div class="modal fade" id="myModal<?php echo $_smarty_tpl->tpl_vars['Pedido']->value['PedidoId'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Confirma Exclusão</h4>
			  </div>
			  <div class="modal-body">
					<label>Confirma Exclusão do Pedido de <b><?php echo $_smarty_tpl->tpl_vars['Pedido']->value['NomePaciente'];?>
</b>?
			  </div>
			  <div class="modal-footer">
				<a href="/info/pedidos/pedido_excluir/<?php echo $_smarty_tpl->tpl_vars['Pedido']->value['PedidoId'];?>
" class="btn btn-sm btn-danger">Excluir</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>							
			  </div>
			</div>
		  </div>
		</div>
        <?php } ?>
    </table>
	
	<?php echo count($_smarty_tpl->tpl_vars['Pedidos']->value);?>
 Resultados Apresentados
	
	<?php  $_smarty_tpl->tpl_vars['conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conta']->key => $_smarty_tpl->tpl_vars['conta']->value){
$_smarty_tpl->tpl_vars['conta']->_loop = true;
?><?php } ?>
	
	<?php if ($_smarty_tpl->tpl_vars['conta']->value['conta']!=''&&count($_smarty_tpl->tpl_vars['Pedidos']->value)>10){?>
	<p align="center"> 	
		<center><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/pedidos/MudaPagina">
			<?php if ($_smarty_tpl->tpl_vars['pagina']->value!=1){?><a href="/info/pedidos/<?php echo $_smarty_tpl->tpl_vars['pagina']->value-1;?>
" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-chevron-left"></i></a><?php }?>
			1 <input type="text" name="pagina" size="4" value="<?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['conta']->value['conta'];?>
<?php $_tmp1=ob_get_clean();?><?php echo ceil($_tmp1);?>

			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['conta']->value['conta'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['pagina']->value!=ceil($_tmp2)){?><a href="/info/pedidos/<?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-chevron-right"></i></a><?php }?>
			<div class="helper-display-none">
				<button type="submit" class="btn btn-default">Ir</button>
			</div>
			</form>
		</center>
	</p>
	<?php }?>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>