<?php /* Smarty version Smarty-3.1.13, created on 2020-02-10 20:32:41
         compiled from "engine\view\InfoPanel\pages\Configuracoes\system.configuracoes_hierarquia_edita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48235e41e819eadd81-15938197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a3ba12f0aaae256dfa6d36c5df11d442aabdcea' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Configuracoes\\system.configuracoes_hierarquia_edita.tpl',
      1 => 1561603800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48235e41e819eadd81-15938197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Hierarquias' => 0,
    'PATH' => 0,
    'hierarquiaid' => 0,
    'hierarquia' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5e41e81a23b527_77340095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e41e81a23b527_77340095')) {function content_5e41e81a23b527_77340095($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
<div class="step">
    <h1>Edita Ocupante</h1>
    <br />
	
	<?php  $_smarty_tpl->tpl_vars['hierarquia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hierarquia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Hierarquias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hierarquia']->key => $_smarty_tpl->tpl_vars['hierarquia']->value){
$_smarty_tpl->tpl_vars['hierarquia']->_loop = true;
?><?php } ?>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/configuracoes/hierarquiaEdita/<?php echo $_smarty_tpl->tpl_vars['hierarquiaid']->value;?>
">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Nome'];?>
">
		
		<label>Email</label>
		<input type="text" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Email'];?>
">
		
		<label>Telefone</label>
		<input type="text" name="telefone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Telefone'];?>
">
		
		<label>Cargo</label>
		<input type="text" name="cargo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hierarquia']->value['Cargo'];?>
">
		
		<br>
		<div>
		<button type="submit" class="btn btn-default">Salvar</button>
		</div>
		</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>