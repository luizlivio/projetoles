<?php /* Smarty version Smarty-3.1.13, created on 2020-10-20 16:17:25
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.agenda_convenios_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17695f8f379c038934-68678694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd942e38c61fea9a6eb5b3584f398d04edba8dfd9' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.agenda_convenios_novo.tpl',
      1 => 1603221420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17695f8f379c038934-68678694',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f8f379c06af92_06597239',
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f379c06af92_06597239')) {function content_5f8f379c06af92_06597239($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Cadastro de Convênios</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/cadastros/novoConvenio">
		
        <div class="form-group">
            <label>Nome do Convênio</label>
            <input type="text" name="nomeconvenio" class="form-control" placeholder="Nome do Convênio">
        </div>
	
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>