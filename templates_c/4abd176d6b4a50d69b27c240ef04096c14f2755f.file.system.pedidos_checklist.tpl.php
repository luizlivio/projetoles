<?php /* Smarty version Smarty-3.1.13, created on 2019-07-23 19:07:48
         compiled from "engine\view\InfoPanel\pages\Pedidos\system.pedidos_checklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111065d377c3f6a36e8-05647366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4abd176d6b4a50d69b27c240ef04096c14f2755f' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Pedidos\\system.pedidos_checklist.tpl',
      1 => 1563919544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111065d377c3f6a36e8-05647366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d377c3f702131_03060274',
  'variables' => 
  array (
    'PATH' => 0,
    'PedidosProc' => 0,
    'Proc' => 0,
    'Checklist' => 0,
    'Chec' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d377c3f702131_03060274')) {function content_5d377c3f702131_03060274($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<form method="post" data-toggle="validator" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/pedidos/salvaChecklist">
		<?php  $_smarty_tpl->tpl_vars['Proc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Proc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PedidosProc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Proc']->key => $_smarty_tpl->tpl_vars['Proc']->value){
$_smarty_tpl->tpl_vars['Proc']->_loop = true;
?>
			<h1>Checklist do procedimento - <?php echo $_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Proc']->value['ProcDescricao'];?>
</h1>
		
			<table class="table table-hover table-stripped">
				<?php  $_smarty_tpl->tpl_vars['Chec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Chec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Checklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Chec']->key => $_smarty_tpl->tpl_vars['Chec']->value){
$_smarty_tpl->tpl_vars['Chec']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['Chec']->value['TUSS']==$_smarty_tpl->tpl_vars['Proc']->value['ProcTUSS']){?>
					<tr>
						<td><label><input type="checkbox" name="option[<?php echo $_smarty_tpl->tpl_vars['Chec']->value['ChecklistId'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['Chec']->value['ChecklistId'];?>
"> <?php echo $_smarty_tpl->tpl_vars['Chec']->value['Descricao'];?>
</label></td>
					</tr>
					<?php }?>
				<?php } ?>
			</table>
		<?php } ?>
	</form>		
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>