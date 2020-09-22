<?php /* Smarty version Smarty-3.1.13, created on 2019-07-23 17:29:00
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.checklist_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93945d376d6da9bfc0-18583156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01bd506ce2dd71b2bee724b044bf4fa5a4b58570' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.checklist_edita.tpl',
      1 => 1563913736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93945d376d6da9bfc0-18583156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d376d6dad5bf5_85499497',
  'variables' => 
  array (
    'Checklist' => 0,
    'PATH' => 0,
    'Chec' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d376d6dad5bf5_85499497')) {function content_5d376d6dad5bf5_85499497($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['Chec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Chec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Checklist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Chec']->key => $_smarty_tpl->tpl_vars['Chec']->value){
$_smarty_tpl->tpl_vars['Chec']->_loop = true;
?><?php } ?>

<div class="step">
	<h1>Cadastro de Procedimento</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/cadastros/editaChecklist">
		
		<div class="helper-display-none">
            <input type="text" name="checklistid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Chec']->value['ChecklistId'];?>
">
			<input type="text" name="procedimentoid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Chec']->value['ProcedimentoId'];?>
">
        </div>
		
		<div class="form-group">
			<label>Descrição</label>
			<textarea name="descricao" class="form-control"><?php echo $_smarty_tpl->tpl_vars['Chec']->value['Descricao'];?>
</textarea>
		</div>
		<br>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</body>
</html><?php }} ?>