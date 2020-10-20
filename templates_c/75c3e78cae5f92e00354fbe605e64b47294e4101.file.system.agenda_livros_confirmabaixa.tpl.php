<?php /* Smarty version Smarty-3.1.13, created on 2020-10-20 16:15:23
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.agenda_livros_confirmabaixa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:294745f8f360d1deda3-50521566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75c3e78cae5f92e00354fbe605e64b47294e4101' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.agenda_livros_confirmabaixa.tpl',
      1 => 1603221032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294745f8f360d1deda3-50521566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f8f360d23c9b6_50185375',
  'variables' => 
  array (
    'Livros' => 0,
    'PATH' => 0,
    'Livro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f360d23c9b6_50185375')) {function content_5f8f360d23c9b6_50185375($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
    <h1>Confirma Baixa do Livro</h1>
    <br>
	
	<?php  $_smarty_tpl->tpl_vars['Livro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Livro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Livro']->key => $_smarty_tpl->tpl_vars['Livro']->value){
$_smarty_tpl->tpl_vars['Livro']->_loop = true;
?>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/cadastros/baixaLivro">

	<div>
		<label>Confirma Baixa do Livro <?php echo $_smarty_tpl->tpl_vars['Livro']->value['Descricao'];?>
?</label>
	</div>
	
	<div class="helper-display-none">
	<input type="text" name="livroid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Livro']->value['LivroId'];?>
">
	</div>
	
	<div>
	<button type="submit" class="btn btn-default">Excluir</button>
	<input type="button" value="Cancelar" onclick="window.history.go(-1)" class="btn btn-default">
	</div>
	
	</form>
	<?php } ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>