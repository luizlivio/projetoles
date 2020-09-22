<?php /* Smarty version Smarty-3.1.13, created on 2020-02-25 22:03:26
         compiled from "engine\view\InfoPanel\pages\PagarReceber\system.financeiro_banco.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225875dd2092022d1d4-68709211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372dcb2de3024d6779f5815437da85de80213b8b' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\PagarReceber\\system.financeiro_banco.tpl',
      1 => 1582679002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225875dd2092022d1d4-68709211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dd2092026dd90_98754344',
  'variables' => 
  array (
    'status' => 0,
    'Bancos' => 0,
    'Banco' => 0,
    'ObsAge' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dd2092026dd90_98754344')) {function content_5dd2092026dd90_98754344($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Nova Conta Criada com sucesso!</div><?php }?>

<div class="step">
	<h1>Bancos</h1>
	<a href="/info/PagarReceber/pagarreceber_banco_novo" class="btn btn-sm btn-primary">Nova Conta</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
            <th>Id</th>
			<th>Banco</th>
			<th>Agência</th>
			<th>Conta</th>
			<th>Saldo</th>
			<th>Acessar</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Banco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Banco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Bancos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Banco']->key => $_smarty_tpl->tpl_vars['Banco']->value){
$_smarty_tpl->tpl_vars['Banco']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Banco']->value['ContaId'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Banco'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Agencia'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Numeroconta'];?>
</td>
			<td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['Banco']->value['SaldoInicial']-$_smarty_tpl->tpl_vars['Banco']->value['Despesas']+$_smarty_tpl->tpl_vars['Banco']->value['Receitas'],2,',','.');?>
</td>
			<td><a data-toggle="modal" data-target="#myBank<?php echo $_smarty_tpl->tpl_vars['Banco']->value['ContaId'];?>
" href="" class="btn btn-sm btn-primary">Acessar</i></a></td>
        </tr>
		
		<div class="modal fade" id="myBank<?php echo $_smarty_tpl->tpl_vars['Banco']->value['ContaId'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<div class="row">
									<div class="col-md-12">
										<h3>Dados da Conta</h3>
									</div>
								</div>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-1">
										<label>Id</label>
										<h4><?php echo $_smarty_tpl->tpl_vars['Banco']->value['ContaId'];?>
</h4>
									</div>
									<div class="col-md-11">
										<label>Banco</label>
										<h4><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Banco'];?>
</h4>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-3">
										<label>Agência</label>
										<h4><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Agencia'];?>
</h4>
									</div>
									<div class="col-md-3">
										<label>Conta</label>
										<h4><?php echo $_smarty_tpl->tpl_vars['Banco']->value['Numeroconta'];?>
</h4>
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
		<?php } ?>
    </table>
	
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>