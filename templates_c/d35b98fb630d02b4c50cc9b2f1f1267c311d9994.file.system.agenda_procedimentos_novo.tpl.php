<?php /* Smarty version Smarty-3.1.13, created on 2020-10-20 16:25:33
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.agenda_procedimentos_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31265f8f39add5c825-70720689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd35b98fb630d02b4c50cc9b2f1f1267c311d9994' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.agenda_procedimentos_novo.tpl',
      1 => 1603221701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31265f8f39add5c825-70720689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f8f39adda5703_20162190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f39adda5703_20162190')) {function content_5f8f39adda5703_20162190($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Cadastro de Procedimento</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/cadastros/novoProcedimento">
		
        <div class="form-group">
            <label>Nome do Procedimento</label>
            <input type="text" name="nomeprocedimento" class="form-control" placeholder="Nome do Procedimento">
        </div>
		
		<br>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</body>
</html><?php }} ?>