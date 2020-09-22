<?php /* Smarty version Smarty-3.1.13, created on 2019-06-27 08:13:51
         compiled from "engine\view\InfoPanel\pages\Guias\system.guias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139265ccf04e1e0deb4-65108269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01f8b329b80f50d14cc881beb6781b476c43f6f' => 
    array (
      0 => 'engine\\view\\InfoPanel\\pages\\Guias\\system.guias.tpl',
      1 => 1561603801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139265ccf04e1e0deb4-65108269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ccf04e1e4f5e9_34941239',
  'variables' => 
  array (
    'PATH' => 0,
    'Livros' => 0,
    'Liv' => 0,
    'livroid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccf04e1e4f5e9_34941239')) {function content_5ccf04e1e4f5e9_34941239($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../master/header2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderTopBody2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="step">
	<h1>Filtrar Guias</h1>
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/info/guias/Filtrar">

		<h3>Período</h3>
		<div class="form-group">
			<label>Data Inicial</label>
			<input type="text" id="data" name="datainicial" class="form-control">
		</div>
		
		<div class="form-group">
			<label>Data Final</label>
			<input type="text" id="data2" name="datafinal" class="form-control">
		</div>
		
		<div class="form-group">
		<label>Agenda</label>
		<select name="livroid" class="form-control">
			<?php  $_smarty_tpl->tpl_vars['Liv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Liv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Livros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Liv']->key => $_smarty_tpl->tpl_vars['Liv']->value){
$_smarty_tpl->tpl_vars['Liv']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['Liv']->value['LivroId'];?>
" <?php if ($_smarty_tpl->tpl_vars['livroid']->value==$_smarty_tpl->tpl_vars['Liv']->value['LivroId']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['Liv']->value['Descricao'];?>
</option>
			<?php } ?>
		</select>
	</div>

		<button type="submit" class="btn btn-default">Filtrar</button>
    </form>		
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../../master/renderBottomBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../../master/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>