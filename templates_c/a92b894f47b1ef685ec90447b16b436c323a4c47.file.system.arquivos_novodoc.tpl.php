<?php /* Smarty version Smarty-3.1.13, created on 2019-07-18 00:15:58
         compiled from "engine\view\InfoPanel\pages\Arquivos\system.arquivos_novodoc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243885d2fe46e0263b5-30809634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a92b894f47b1ef685ec90447b16b436c323a4c47' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Arquivos\\system.arquivos_novodoc.tpl',
      1 => 1561603799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243885d2fe46e0263b5-30809634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'diretorio' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d2fe46e0762e5_98063505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2fe46e0762e5_98063505')) {function content_5d2fe46e0762e5_98063505($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
    <h1>Novo Doc</h1>
    <br />
	
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/arquivos/SalvarDoc" >
		<div class="helper-display-none">
			<input type="text" name="diretorio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['diretorio']->value;?>
">
		</div>
		
		<div>
			<label>Nome do arquivo</label>
			<input type="text" name="nome" class="form-control">
		</div>
		
		<br />
		
		<div>
			<textarea name="content" style="height:900px;width:100%;"></textarea>
		</div>
		<br>
		<button type="submit" class="btn btn-default">Salvar</button>
	</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html><?php }} ?>