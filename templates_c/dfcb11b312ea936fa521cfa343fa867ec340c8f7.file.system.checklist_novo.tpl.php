<?php /* Smarty version Smarty-3.1.13, created on 2019-07-23 18:51:33
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.checklist_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295435d376b26785579-50104000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfcb11b312ea936fa521cfa343fa867ec340c8f7' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.checklist_novo.tpl',
      1 => 1563918586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295435d376b26785579-50104000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d376b267b54d9_44427658',
  'variables' => 
  array (
    'PATH' => 0,
    'procedimentoid' => 0,
    'Procedimentos' => 0,
    'Proc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d376b267b54d9_44427658')) {function content_5d376b267b54d9_44427658($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Cadastro de Procedimento</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/cadastros/novoChecklist">
		
		<div class="helper-display-none">
            <input type="text" name="procedimentoid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['procedimentoid']->value;?>
">
			<input type="text" name="tuss" class="form-control" value="<?php  $_smarty_tpl->tpl_vars['Proc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Proc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Procedimentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Proc']->key => $_smarty_tpl->tpl_vars['Proc']->value){
$_smarty_tpl->tpl_vars['Proc']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['Proc']->value['TUSS'];?>
<?php } ?>">
        </div>
		
		<div class="form-group">
			<label>Descrição</label>
			<textarea name="descricao" class="form-control"></textarea>
		</div>
		<br>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</body>
</html><?php }} ?>