<?php /* Smarty version Smarty-3.1.13, created on 2020-10-20 16:08:13
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.agenda_livros_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241235f8f359d9d2808-66918487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6447713e01594127cf17dbba1a1deb7bf60200b' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.agenda_livros_edita.tpl',
      1 => 1603220844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241235f8f359d9d2808-66918487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Livros' => 0,
    'PATH' => 0,
    'Livro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f8f359da27ff5_35079759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f359da27ff5_35079759')) {function content_5f8f359da27ff5_35079759($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Edita Cadastro do Livro</h1>
    <?php  $_smarty_tpl->tpl_vars['Livro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Livro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Livro']->key => $_smarty_tpl->tpl_vars['Livro']->value){
$_smarty_tpl->tpl_vars['Livro']->_loop = true;
?>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/cadastros/editaLivro">
		
		<div class="helper-display-none">
            <input type="text" name="livroid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Livro']->value['LivroId'];?>
">
        </div>
		
        <div class="form-group">
            <label>Nome do Livro</label>
            <input type="text" name="nomelivro" class="form-control" placeholder="Nome do Livro" value="<?php echo $_smarty_tpl->tpl_vars['Livro']->value['Descricao'];?>
">
        </div>
		
        <button type="submit" class="btn btn-default">Salvar</button>		

    </form>	
	<?php } ?>	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</body>
</html><?php }} ?>