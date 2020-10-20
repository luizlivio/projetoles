<?php /* Smarty version Smarty-3.1.13, created on 2020-10-20 16:18:38
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.agenda_convenios_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274425f8f380e6055c5-49610609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ea3ab7a8d433efe527dadc1352e5782c8c8e3e' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.agenda_convenios_edita.tpl',
      1 => 1603221506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274425f8f380e6055c5-49610609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Convenios' => 0,
    'PATH' => 0,
    'Convenio' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f8f380e65ec86_57468023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f380e65ec86_57468023')) {function content_5f8f380e65ec86_57468023($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
<?php  $_smarty_tpl->tpl_vars['Convenio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Convenio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Convenios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Convenio']->key => $_smarty_tpl->tpl_vars['Convenio']->value){
$_smarty_tpl->tpl_vars['Convenio']->_loop = true;
?><?php } ?>

	<h1>Edição de Convênios</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/cadastros/editaConvenio">
		
		<div class="helper-display-none">
            <input type="text" name="convenioid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Convenio']->value['ConvenioId'];?>
">
        </div>
		
        <div class="form-group">
            <label>Nome do Convênio</label>
            <input type="text" name="nomeconvenio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Convenio']->value['Descricao'];?>
">
        </div>
	
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>