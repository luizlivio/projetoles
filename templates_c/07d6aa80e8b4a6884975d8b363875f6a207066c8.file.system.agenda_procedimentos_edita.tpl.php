<?php /* Smarty version Smarty-3.1.13, created on 2020-10-20 16:27:18
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.agenda_procedimentos_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56335f8f3a1624ca31-22643569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07d6aa80e8b4a6884975d8b363875f6a207066c8' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.agenda_procedimentos_edita.tpl',
      1 => 1603221736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56335f8f3a1624ca31-22643569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Procedimentos' => 0,
    'PATH' => 0,
    'Procedimento' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f8f3a162b0a59_04841920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f3a162b0a59_04841920')) {function content_5f8f3a162b0a59_04841920($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
<?php  $_smarty_tpl->tpl_vars['Procedimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Procedimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Procedimentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Procedimento']->key => $_smarty_tpl->tpl_vars['Procedimento']->value){
$_smarty_tpl->tpl_vars['Procedimento']->_loop = true;
?><?php } ?>

	<h1>Edição de Procedimento</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/cadastros/editaProcedimento">
		
		<div class="helper-display-none">
            <input type="text" name="procedimentoid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Procedimento']->value['ProcedimentoId'];?>
">
        </div>
		
        <div class="form-group">
            <label>Nome do Procedimento</label>
            <input type="text" name="nomeprocedimento" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Procedimento']->value['Descricao'];?>
">
        </div>
	
		</br>
		
		<button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</body>
</html><?php }} ?>