<?php /* Smarty version Smarty-3.1.13, created on 2019-06-29 18:22:49
         compiled from "engine\view\InfoPanel\pages\Guias\system.guias_valor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99275cf4d05ca54ce0-42545699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d900f07ee5f490b9a3c901b1d9234a3e064e7a9' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Guias\\system.guias_valor.tpl',
      1 => 1561603801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99275cf4d05ca54ce0-42545699',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cf4d05cc56e91_16137386',
  'variables' => 
  array (
    'PATH' => 0,
    'mesinicial' => 0,
    'diainicial' => 0,
    'anoinicial' => 0,
    'mesfinal' => 0,
    'diafinal' => 0,
    'anofinal' => 0,
    'livroid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf4d05cc56e91_16137386')) {function content_5cf4d05cc56e91_16137386($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Abertura de Encaixes</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/guias/novoValor">
		
		<div class="helper-display-none">
			<input type="text" name="datainicial" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mesinicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diainicial']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anoinicial']->value;?>
">
			<input type="text" name="datafinal" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mesfinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['diafinal']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['anofinal']->value;?>
">
			<input type="text" name="livroid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['livroid']->value;?>
">
		</div>
		
		<div class="form-group">
            <label>Valor</label>
            <input type="text" name="valor" class="form-control">
        </div>
		
        <button type="submit" class="btn btn-default">Adicionar</button>

    </form>		

	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>