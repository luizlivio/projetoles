<?php /* Smarty version Smarty-3.1.13, created on 2019-07-23 17:31:32
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.checklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205735d3768ec61bea9-08724521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc862376b505127dd2432e9b232f30b9a964aaa9' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.checklist.tpl',
      1 => 1563913889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205735d3768ec61bea9-08724521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d3768ec676560_35559677',
  'variables' => 
  array (
    'Procedimentos' => 0,
    'status' => 0,
    'Proc' => 0,
    'Checklist' => 0,
    'Chec' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d3768ec676560_35559677')) {function content_5d3768ec676560_35559677($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Proc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Proc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Procedimentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Proc']->key => $_smarty_tpl->tpl_vars['Proc']->value){
$_smarty_tpl->tpl_vars['Proc']->_loop = true;
?><?php } ?>

<?php if ($_smarty_tpl->tpl_vars['status']->value==1){?><div class="alert alert-success" role="alert">Novo Item Cadastrado com Sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==2){?><div class="alert alert-success" role="alert">Item Editado com Sucesso!</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['status']->value==3){?><div class="alert alert-success" role="alert">Item Excluido com Sucesso!</div><?php }?>

<div class="step">
	<h1>Checklist do procedimento - <?php echo $_smarty_tpl->tpl_vars['Proc']->value['TUSS'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Proc']->value['Descricao'];?>
</h1>
	<a href="/info/cadastros/checklist_novo/<?php echo $_smarty_tpl->tpl_vars['Proc']->value['ProcedimentoId'];?>
" class="btn btn-sm btn-primary">Novo Item</a>
	
	<table class="table table-hover table-stripped">
		<thead>
        <tr>
			<th>Descrição</th>
			<th>Editar</th>
			<th>Excluir</th>
        </tr>
		</thead>
		<?php  $_smarty_tpl->tpl_vars['Chec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Chec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Checklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Chec']->key => $_smarty_tpl->tpl_vars['Chec']->value){
$_smarty_tpl->tpl_vars['Chec']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['Chec']->value['Descricao'];?>
</td>
			<td><a href="/info/cadastros/checklist_edita/<?php echo $_smarty_tpl->tpl_vars['Chec']->value['ChecklistId'];?>
" class="btn btn-sm btn-primary">Editar</a></td>
			<td><a data-toggle="modal" data-target="#myCancelarProc<?php echo $_smarty_tpl->tpl_vars['Chec']->value['ChecklistId'];?>
" href="" class="btn btn-sm btn-danger" data-dismiss="modal">Excluir</a></td>
        </tr>
		
		<div class="modal fade" id="myCancelarProc<?php echo $_smarty_tpl->tpl_vars['Chec']->value['ChecklistId'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<div class="row">
							<div class="col-md-12">
								<h3>Confirmação de Exclusão</h3>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<label>Você confirma a exclusão do Procedimento <b><?php echo $_smarty_tpl->tpl_vars['Chec']->value['Descricao'];?>
</b>?</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<a class="btn btn-danger" href="/info/cadastros/checklist_exclui/<?php echo $_smarty_tpl->tpl_vars['Proc']->value['ProcedimentoId'];?>
/<?php echo $_smarty_tpl->tpl_vars['Chec']->value['ChecklistId'];?>
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