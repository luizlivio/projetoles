<?php /* Smarty version Smarty-3.1.13, created on 2020-10-20 16:04:34
         compiled from "engine\view\InfoPanel\pages\Cadastros\system.agenda_livros_novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75905f8f34974783d3-72128648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd76c3a46b149bd7839c5b1c021494b3a3007d797' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Cadastros\\system.agenda_livros_novo.tpl',
      1 => 1603220671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75905f8f34974783d3-72128648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5f8f34974a8310_78145940',
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f34974a8310_78145940')) {function content_5f8f34974a8310_78145940($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/headerEditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Cadastro de Livros</h1>
    
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/cadastros/novoLivro">
		
        <div class="form-group">
            <label>Nome do Livro</label>
            <input type="text" name="nomelivro" class="form-control" placeholder="Nome do Livro">
        </div>
		
		<button type="submit" class="btn btn-default">Salvar</button>		

    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html><?php }} ?>